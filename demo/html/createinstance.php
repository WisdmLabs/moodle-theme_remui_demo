<?php
define('WEB_SCRIPT', true);

// Include the centralized configuration loader first
require_once("DemoConfigLoader.php");

$email = "xyz@gmail.com";
$demo_type = null; // Will be determined later

if (!isset($_POST) || empty($_POST)) {
  // Check if we have GET parameters for page builder demo
  if (isset($_GET['email']) && isset($_GET['layoutName']) && isset($_GET['tagid'])) {
    $email = $_GET['email'];
    $layout_name = $_GET['layoutName'];
    $tagid = $_GET['tagid'];
    // Check if demo type is specified
    if (isset($_GET['demo_type'])) {
      $demo_type = $_GET['demo_type'];
    }
  } else {
    // Redirect to demo.tryremui.edwiser.org if no valid parameters are set
    header("Location: https://demo.tryremui.edwiser.org");
    exit;
  }
}

require_once("./InstanceManager.php");

$im = new InstanceManager();

if (isset($_POST) && isset($_POST['email'])) {
    $email = $_POST['email'];
}

$layout_name = DemoConfigLoader::getDefaultLayoutName();
if (isset($_POST) && isset($_POST['layoutName'])) {
  $layout_name = $_POST['layoutName'];
} else if (isset($_GET['layoutName'])) {
  $layout_name = $_GET['layoutName'];
}

$tagid = -1;
if (isset($_POST) && isset($_POST['tagid'])) {
  $tagid = $_POST['tagid'];
} else if (isset($_GET['tagid'])) {
  $tagid = $_GET['tagid'];
}

// Check for demo_type in POST parameters first, then GET
if (isset($_POST) && isset($_POST['demo_type'])) {
  $demo_type = $_POST['demo_type'];
} else if (isset($_GET['demo_type'])) {
  $demo_type = $_GET['demo_type'];
}

// If demo_type is not explicitly set, determine it based on layout name
if ($demo_type === null) {
  $demo_type = DemoConfigLoader::getDemoTypeForLayout($layout_name, "remui");
}

if (5 <= round(disk_free_space("/") / 1024 / 1024 / 1024)) {
  $demoinstance = $im->retrieve_fresh_instance($email, $layout_name, $tagid, $demo_type);
  
  // Set cookie with email that expires in 30 days
  // Extract domain from instance URL
  $domain = $demoinstance['instanceurl'];
  $domain = substr($domain, 0, strpos($domain, '/'));
  setcookie('user_email', $email, time() + (86400 * 30), '/', $domain, true, true);
} else {
  $demoinstance = [
    'invalid' => true,
    'message' => 'Our limits have reached, please try after some time.',
    'instanceurl' => 'demo.tryremui.edwiser.org/createinstance.php'
  ];
}
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo DemoConfigLoader::getDemoDescription($demo_type); ?> - Demo</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <meta http-equiv="refresh" content="2;URL=https://<?php echo $demoinstance['instanceurl'] ?>">
  </head>
  <body>
  <div class="bg-top-left"></div>
  <div class="bg-bottom-right"></div>
  <div class="main-container stack-top">
    <div class="container wrapper">
      <div class="logo-container">
        <img class="logo"src="./images/Logo.png" alt="Edwiser RemUI Brand Logo"/>
      </div>
      <div class="main d-flex">

        <div class="left">
          <h1 class="heading m-0 p-0">
          <span class="text-3">
            <?php
              if (!isset($demoinstance['invalid'])) {
                $demoDescription = DemoConfigLoader::getDemoDescription($demo_type);
                echo "We are ready with new " . $demoDescription . ".";
              } else if (isset($demoinstance['invalid'])) {
                echo $demoinstance['message'];
              }
              ?>
            </span>
          </h1>
          <?php if (!isset($demoinstance['invalid'])) { ?>
            <p class="sub-text italic d-flex align-items-center">
              <span>If not redirected in</span> <img class="hourglass" src="./images/hourglass.gif" alt="Timer Image" width="30"><span id="redirecttimer">30 seconds</span>,&nbsp;<a href="http://<?php echo $demoinstance['instanceurl'] ?>" title="Demo Instance link">Click here</a>
            </p>
          <?php }?>
        </div>

      </div>
    </div>
  </div>
  </body>
  <?php
      if (!isset($demoinstance['invalid'])) {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var myVar = setInterval(myTimer, 1000);
            var timelimit = 30;
            function myTimer() {
                var element = document.getElementById("redirecttimer");
                // var timelimit = element.innerHTML;
                if (timelimit != 0) {
                    timelimit = timelimit - 1;
                    var text = timelimit + " seconds";
                    element.innerHTML = text;
                }
            }
        });
    </script>
    <?php } ?>
</html>
