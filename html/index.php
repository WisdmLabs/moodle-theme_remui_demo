<?php
	$maintenance = false;
        if  ($maintenance) {
		header("Location: https://demo.tryremui.edwiser.org/maintenance.html");
	}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edwiser RemUI demo</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
  </head>
  <body>
      <div class="bg-top-left d-none"></div>
      <div class="bg-bottom-right d-none"></div>
      <div id="layout-wrapper" class="container vertical-center wrapper">
      
        <div class="logo-container">
          <img class="logo"src="./images/Logo.png" alt="Edwiser RemUI Brand Logo"/>
        </div>

        <div class="layout-main">
          <h1 class="heading m-0 p-0">
              <span class="text-orange">Welcome to</span>
              Edwiser RemUI demo
          </h1>
          <p class="desc m-0 p-0">Select the demo that best suits your needs</p>

          <div class="layout-main-content">
            <?php
            // Include the JSONFileManager class  
            require("JsonFileManager.php");
            
            // Create a JSONFileManager object
            $json_file_manager = new JSONFileManager("./data/demo_categories.json");

            // Get the JSON data
            $json_data = $json_file_manager->read();
            // Loop through each category and create a layout card
            foreach ($json_data as $category) {
                $category_id = $category->id;
                $category_name = $category->name;
                $category_image = $category->image;
                
                echo '<div class="layout-card">';
                echo '  <div class="layout-card-body" data-layoutid="' . $category_id . '">';
                echo '      <img src="./images/' . $category_image . '" alt="layout-' . $category_id . '" />';
                echo '  </div>';
                echo '  <div class="layout-footer d-flex">';
                echo '      <input type="radio" class="custom-radio-btn" name="layoutsradiobtn" value="' . $category_id . '"/>';
                echo '      <p class="layout-name">' . $category_name . '</p>';
                echo '  </div>';
                echo '</div>';
            }
            ?>
          </div>
        </div>

        <div class="main">

          <div class="right">
              <div class="layout-card" >
                <div class="layout-card-body" data-layoutid="1">
                    <img src="./images/image2.png" alt="layout-1" />
                </div>
                <div class="layout-footer d-flex">
                    <input type="radio" class="custom-radio-btn" checked name="layoutselected"/>
                    <p class="layout-name">Corporate</p>
                </div>
              </div>
              <button class="btn btn-secondary btn-back"> 
                <img src='./images/left-icon.svg' alt="" /> Back
              </button>
          </div>

          <div class="left d-flex">
            <h1 class="heading m-0 p-0">Enter your email to create a sandbox</h1>
            <p class="sub-text m-0">
              We will create a demo sandbox just for you. Feel free to explore and play around it. The sandbox will be available to you for 2 hours.
            </p>
            <div class="inline-form">
              <form class="form" action="./createinstance.php" method="post">
                <label for="inputEmail" class="hidden">Email</label>
                <input type="hidden" class="form-control" name="layoutName">
                <input type="email" class="form-control" name="email" placeholder="Enter your Email Id" required>
                <input type="submit" class="btn btn-primary disabled" value="Create sandbox">
              </form>
            </div>
          </div>
          
        </div>
      </div>

  </body>

  <script>

    const layoutWrapper = document.querySelector('#layout-wrapper');
    const cards = layoutWrapper.querySelectorAll('.layout-main .layout-card');
    const btnBack = layoutWrapper.querySelector('.btn-back');
    const emailInput = layoutWrapper.querySelector('.inline-form input[name="email"]');
    const submitBtn = layoutWrapper.querySelector('.inline-form input[type="submit"]');

    function setFormLayout(targetInput = "") {
      let targetLayout = layoutWrapper.querySelector(`.layout-card:has(.layout-card-body[data-layoutid="${targetInput.value}"])`);
      let layoutForm = layoutWrapper.querySelector('.inline-form form');
      let selectedLayout = layoutWrapper.querySelector(`.main .layout-card`);

      layoutForm.querySelector(`.form-control[name="layoutName"]`).value = targetInput.value;
      selectedLayout.querySelector('img').src = targetLayout.querySelector('.layout-card-body img').src;
      selectedLayout.querySelector('.layout-name').textContent = targetLayout.querySelector(".layout-name").textContent;
    }

    // This event trigger when we click on layout Image and It will select the layout
    function changeHandler(targetInput = "") {
      let layoutMain = layoutWrapper.querySelector('.layout-main');
      let main = layoutWrapper.querySelector('.main');

      if(targetInput.value) {
        setFormLayout(targetInput);
      }

      if(layoutMain.classList.contains("visible-to-hide")) {

        layoutMain.classList.remove("visible-to-hide");
        main.classList.remove("hidden-to-visible");

        main.classList.add("visible-to-hide");
        layoutMain.classList.add("hidden-to-visible");

        setTimeout(() => {
          main.style.display = "none";
          layoutMain.style.display = "flex";
        }, 400);

      } else {

        main.classList.remove("visible-to-hide");
        layoutMain.classList.remove("hidden-to-visible");

        layoutMain.classList.add("visible-to-hide");
        main.classList.add("hidden-to-visible");

        setTimeout(() => {
          main.style.display = "flex";
          layoutMain.style.display = "none";
        },400);

      }
    }
    
    // add event listener to trigger an event when radio button is checked or unchecked for any cards by clicking img
    cards.forEach(card => {
      card.querySelector(".layout-card-body").addEventListener('click', function() {
          let layoutid = this.dataset.layoutid;
          let targetInput = layoutWrapper.querySelector(`.custom-radio-btn[value="${layoutid}"]`);
          targetInput.checked = true;
          changeHandler(targetInput);
      });

      card.querySelector(".custom-radio-btn").addEventListener('change', function() {
        changeHandler(this);
      });
    });

    emailInput.addEventListener('input', function() {
      console.log(this.value);
      console.log(submitBtn);
      if(this.value.length > 0) {
        submitBtn.classList.remove('disabled');
      } else {
        submitBtn.classList.add('disabled');
      }
    });

    //add event listener to onclick on btn-back
    btnBack.addEventListener('click', function() {
      changeHandler();
    });

    // for scrolling the layout image on hover

  </script>
</html>
