const layoutWrapper = document.querySelector('#layout-wrapper');
const submitBtn = layoutWrapper.querySelector('.inline-form button[type="submit"]');
const layoutRadioBtns = layoutWrapper.querySelectorAll('.layout-options .layout-radio-btn');
const emailFormWrapper = layoutWrapper.querySelector('.email-form-wrapper');

layoutRadioBtns.forEach(radioBtn => {
    radioBtn.addEventListener('change', () => {
    emailFormWrapper.classList.remove('disabled');

    emailFormWrapper.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest'
    });
    });
});
// Get the form element
const form = document.querySelector('#layout-wrapper form');

submitBtn.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    // Add the loader design to the submit button
    submitBtn.innerHTML = '<div class="btnloader"></div>';
    submitBtn.classList.add('disabled');

    // Set up the request headers
    const username = 'ggovande';
    const password = 'R3lj lsM0 TKYG Tt0l g5lR 8DW5';
    const authString = `${username}:${password}`;
    const authToken = btoa(authString); // Base64 encode the username:password string

    const myHeaders = new Headers();
    myHeaders.append("Authorization", `Basic ${authToken}`);

    const requestOptions = {
    method: "GET",
    headers: myHeaders,
    redirect: "follow"
    };
    
    // Get the email value from the form
    const emailInput = layoutWrapper.querySelector('input[name="email"]');

    // Get the tagid input field
    const tagidInput = layoutWrapper.querySelector('input[name="tagid"]');

    const url = "https://edwiser.org/wp-json/fluent-crm/v2/subscribers/0?get_by_email=" + emailInput.value;

    fetch(url, requestOptions)
    .then((response) => {
        if (response.status === 200) {
        // If the response code is 200, parse the response as JSON
        return response.json();
        }
        // Submit the form
        form.submit();
    })
    .then((result) => {
        if (result.subscriber.tags.length > 0) {
        // Loop through each tag
        result.subscriber.tags.forEach((tag) => {
            if (tag.id == 21 || tag.id == 22 || tag.id == 23 || tag.id == 24 ) {
            tagidInput.value = tag.id;
            
            // Submit the form
            form.submit();
            }
        })
        }

        // Submit the form
        form.submit();
    })
    .catch((error) => {
        console.error("we are in error", error);
        
        // Submit the form
        form.submit();
    });
});
