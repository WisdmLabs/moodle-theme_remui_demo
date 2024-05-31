<?php
	$maintenance = false;
        if  ($maintenance) {
		header("Location: https://demo.tryremui.edwiser.org/maintenance.html");
	}

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
  </head>
  <body>
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
                      
                      echo '<label class="d-flex layout-box" for="'. $category_id .'" >';
                      echo '  <input type="radio" id="'. $category_id .'" class="layout-radio-btn" name="layoutName" value="'. $category_id .'" />';
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
                <input type="email" class="form-control" name="email" placeholder="Enter your Email Id" data-nb required>
                <input type="hidden" class="form-control" name="tagid" value="-1">
                <button type="submit" class="form-control btn btn-primary disabled" title="Create Sandbox" disabled>
                  Create sandbox
                </input>
              </div>

            </div>
            
          </form>
        </div>
      </div>
    </div>

  </body>

  <!--EMAIL VALIDATOR -->
  <script type="text/javascript">
    _NBSettings = {
        apiKey: 'public_4c53c3c5a0d1e538b96ddc29a9a09413',
        displayPoweredBy: false,
        acceptedMessage: "Great! Everything looks good",
        rejectedMessage: "Oops! Email didn\’t go through. Check it?",
        timeout: 1,
    };

    document.querySelector('body').addEventListener('nb:registered', function (event) {
      // Get field using id from registered event
      let field = document.querySelector('[data-nb-id="' + event.detail.id + '"]');

      // Handle clear events; i.e. hide feedback
      field.addEventListener('nb:clear', function(e) {
        submitBtn.classList.add('disabled');
        submitBtn.disabled = true;
      });

      // Handle results (API call has succeeded)
      field.addEventListener('nb:result', function(e) {
        // Check the result
        if (e.detail.result.is(_nb.settings.getAcceptedStatusCodes())) {
          submitBtn.classList.remove('disabled');
          submitBtn.disabled = false;
        }
        else {
          submitBtn.classList.add('disabled');
          submitBtn.disabled = true;
        }
      });
    });
  </script>
  
  <script type="text/javascript" src="https://cdn.neverbounce.com/widget/dist/NeverBounce.js"></script>
  <!--EMAIL VALIDATOR -->

  <!-- Form Handler -->
  <script type="text/javascript" src="./formhandler.js"></script>

</html>
