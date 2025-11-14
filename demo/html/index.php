<?php
    $maintenance = false;
    if ($maintenance) {
        header("Location: https://demo.tryremui.edwiser.org/maintenance.html");
    }

    // Get query parameters
    $email = isset($_GET['e']) ? $_GET['e'] : '';

    // Include the centralized configuration loader
    require_once("DemoConfigLoader.php");

    // Function to determine demo type dynamically (now uses centralized DemoConfigLoader)
    function getDemoTypeForLayout($layoutName, $defaultType = "remui") {
        return DemoConfigLoader::getDemoTypeForLayout($layoutName, $defaultType);
    }

    // Function to get tag ID for a demo type
    function getTagIdForDemoType($demoType, $defaultTagId = -1) {
        return DemoConfigLoader::getDefaultTagId($demoType, $defaultTagId);
    }

    // Function to get demo type from query parameters dynamically
    function getDemoTypeFromQueryParams() {
        $availableTypes = DemoConfigLoader::getAvailableDemoTypes();
        
        // Check each demo type in configuration against query parameters
        foreach ($availableTypes as $demoType) {
            if (isset($_GET[$demoType])) {
                return $demoType;
            }
        }
        
        return null;
    }

    // Check for dynamic demo type in query parameters
    $dynamicDemoType = getDemoTypeFromQueryParams();
    $isDynamicDemo = $dynamicDemoType !== null;

    // Include the JSONFileManager class
    require("JsonFileManager.php");
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
    <!-- Hotjar Tracking Code for Site 5075383 (name missing) -->
    <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:5075383,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X3YTNJ8CJ1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X3YTNJ8CJ1');
</script>
  </head>
  <body>

    <?php if ($isDynamicDemo && !empty($email)): ?>
      <?php
        // Determine layout name and demo type dynamically
        $layoutName = $dynamicDemoType;
        $demoType = $dynamicDemoType;
        $tagId = getTagIdForDemoType($demoType);
      ?>
      <div class="bg-top-left"></div>
      <div class="bg-bottom-right"></div>
      <div class="loader-container" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 9999;">
        <div class="loader" style="border: 5px solid #f3f3f3; border-top: 5px solid #3498db; border-radius: 50%; width: 50px; height: 50px; animation: spin 2s linear infinite;"></div>
      </div>
      <style>
        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
      </style>
      <form id="pageBuilderForm" action="createinstance.php" method="post" style="display: none;">
          <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
          <input type="hidden" name="layoutName" value="<?php echo $layoutName; ?>">
          <input type="hidden" name="tagid" value="<?php echo $tagId; ?>">
          <input type="hidden" name="demo_type" value="<?php echo $demoType; ?>">
      </form>
      <script>
          document.addEventListener('DOMContentLoaded', function() {
              setTimeout(function() {
                  const form = document.getElementById('pageBuilderForm');
                  if (form) {
                      console.log('Submitting form...');
                      form.submit();
                  } else {
                      console.error('Page builder form not found');
                      $urlparams = 'email=<?php echo urlencode($email); ?>&layoutName=<?php echo $layoutName; ?>&tagid=<?php echo $tagId; ?>&demo_type=<?php echo $demoType; ?>';
                      window.location.href = 'createinstance.php?' . $urlparams;
                  }
              }, 100);
          });
      </script>
    <?php else: ?>

    <div class="bg-top-left"></div>
    <div class="bg-bottom-right"></div>
    <div class="main-container stack-top">
      <div class="bg-top-left d-none"></div>
      <div class="bg-bottom-right d-none"></div>
      <div id="layout-wrapper" class="container wrapper">

        <div class="logo-container">
          <img class="logo"src="./images/Logo.png" alt="Edwiser RemUI Brand Logo"/>
        </div>
        <h1 class="heading m-0 p-0">
            <span class="text-orange">Welcome to</span>
            Edwiser RemUI demo
        </h1>

        <div class="inline-form">
          <form class="form" action="./createinstance.php" method="post">

            <div class="layout-options-wrapper">
              <h1 class="form-heading m-0 p-0">Please select what best describes the e-learning site you are trying to build</h1>

              <div class="layout-options">

                <?php

                  // Create a JSONFileManager object
                  $json_file_manager = new JSONFileManager("./data/demo_categories.json");

                  // NOTE :::::::::::::::
                  // If new category is added on demo landing page, make sure to add new tag on edwiser.org FluentCRM.
                  // Also add the ID of newly created instance into the $demos array.

                  // Get the JSON data
                  $json_data = $json_file_manager->read();
                  // Loop through each category and create a layout card
                  foreach ($json_data as $category) {
                      $category_id = $category->id;
                      $category_name = $category->name;
                      $demo_type = DemoConfigLoader::getDemoTypeForLayout($category_id);

                      echo '<label class="d-flex layout-box" for="'. $category_id .'" >';
                      echo '  <input type="radio" id="'. $category_id .'" class="layout-radio-btn" name="layoutName" value="'. $category_id .'" data-demo-type="'. $demo_type .'" />';
                      echo '  <span class="layout-name">'. $category_name .'</span>';
                      echo '</label>';
                  }
                ?>
              </div>
            </div>

            <div class="email-form-wrapper disabled">

              <h1 class="form-heading m-0 p-0">Enter your email to create a sandbox</h1>
              <p class="form-sub-text m-0">
                We will create a demo sandbox just for you. Feel free to explore and play around it. The sandbox will be available to you for 2 hours.
              </p>

              <div class="email-form">
                <label for="inputEmail" class="hidden">Email</label>
                <!-- <input type="hidden" class="form-control" name="layoutName"> -->
                <input type="email" class="form-control" name="email" placeholder="Enter your Email Id" required>
                <!-- Add this near the email input -->
                <input type="hidden" class="form-control" name="tagid" value="-1">
                <input type="hidden" class="form-control" name="demo_type" value="<?php echo DemoConfigLoader::getDemoTypeForLayout('default'); ?>">
                <button type="submit" class="form-control btn btn-primary disabled" title="Create Sandbox" disabled>
                  Create sandbox
                </button>
                <div class="tooltip" id="emailTooltip">Oops! Email didn't go through. Check it?</div>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>

    <?php endif; ?>

  </body>

  <script>
    const emailInput = document.querySelector('input[name="email"]');
    const submitButton = document.querySelector('button[type="submit"]');
    const layoutInputs = document.querySelectorAll('input[name="layoutName"]');
    const demoTypeInput = document.querySelector('input[name="demo_type"]');

    emailInput.addEventListener('input', validateEmail);

    // Update demo type when layout is selected
    layoutInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.checked) {
                const demoType = this.getAttribute('data-demo-type');
                demoTypeInput.value = demoType;
            }
        });
    });

    // Debounce code is to prevent multiple requests to the server.
    function debounce(func, delay) {
      let timeoutId;
      return function (...args) {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => func.apply(this, args), delay);
      };
    }

    // debouncedVerifyEmail is to validate and verify emails.
    const debouncedVerifyEmail = debounce((email) => {
      submitBtn.classList.add('disabled');
      submitButton.disabled = true;

      if (isValidEmail(email)) {
        verifyEmail(email);
      }
    }, 500);


    function validateEmail() {
      const email = emailInput.value.trim();
      document.querySelector('.email-form').classList.remove('invalid');
      debouncedVerifyEmail(email);
    }

    function add_email_warning() {
      document.querySelector('.email-form').classList.add('invalid');
    }

    // Validating the syntax.
    function isValidEmail(email) {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailPattern.test(email);
    }

    // Verifying the email.
    function verifyEmail(email) {
      const requestOptions = {
        method: "GET",
        redirect: "follow"
      };

      var url = "https://api.bouncify.io/v1/verify";
      const apikey = "yn35ir8x8jhnon5jt4eebjej4olfnwip";

      url = url + "?apikey=" + apikey + "&email=" + email;

      fetch(url, requestOptions)
      .then((response) => {
        if ([401, 402, 403, 429].includes(response.status)) {
          submitBtn.classList.remove('disabled');
          submitButton.disabled = false;
          return;
        }

        return response.text();
      })
      .then((result) => {
        result = JSON.parse(result);
        if (result.result === 'deliverable') {
          submitBtn.classList.remove('disabled');
          submitButton.disabled = false;
          document.querySelector('.email-form').classList.remove('invalid');
        } else {
          submitBtn.classList.add('disabled');
          submitButton.disabled = true;
          document.querySelector('.email-form').classList.add('invalid');
        }
      })
      .catch((error) => console.error(error));
    }


  </script>

<?php if ($isDynamicDemo && !empty($email)): ?>
		<script>
		    // Use a single event listener for DOMContentLoaded
		    document.addEventListener('DOMContentLoaded', function() {
		        // Add a small delay to ensure everything is ready
		        setTimeout(function() {
		            const form = document.getElementById('pageBuilderForm');
		            if (form) {
		                console.log('Submitting form...');
		                form.submit();
		            } else {
		                console.error('Page builder form not found');
		                // Fallback: Redirect with GET parameters if form submission fails
                    $urlparams = 'email=<?php echo urlencode($email); ?>&layoutName=<?php echo $layoutName; ?>&tagid=<?php echo $tagId; ?>&demo_type=<?php echo $demoType; ?>';
		                window.location.href = 'createinstance.php?' . $urlparams;
		            }
		        }, 100); // 100ms delay
		    });
		</script>
<?php endif; ?>

  <!--<script type="text/javascript" src="https://cdn.neverbounce.com/widget/dist/NeverBounce.js"></script>-->
  <!--EMAIL VALIDATOR -->

  <!-- Form Handler -->
  <script type="text/javascript" src="./formhandler.js"></script>

</html>
