<?php
define('WEB_SCRIPT', true);
require_once("./InstanceManager.php");

$im = new InstanceManager();
$email = "xyz@gmail.com";

if (isset($_POST) && isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (3 <= round(disk_free_space("/") / 1024 / 1024 / 1024)) {
  $demoinstance = $im->retrieve_fresh_instance($email);
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
    <title>Edwiser RemUI demo</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <meta http-equiv="refresh" content="2;URL=https://<?php echo $demoinstance['instanceurl']?>">
  </head>
  <body>
  <div class="bg-top-left"></div>
  <div class="bg-bottom-right"></div>
  <div class="container vertical-center">
      <div class="logo-container">
        <img class="logo"src="./images/Logo.png" alt="Edwiser RemUI Brand Logo"/>
      </div>
      <div class="main d-flex">
        <div class="left">
          <h1 class="heading m-0 py-1 p-0">
          <span class="text-3">
            <?php
              if (!isset($demoinstance['invalid'])) {
                echo "We are ready with new Edwiser RemUI demo sandbox.";
              } else if (isset($demoinstance['invalid'])) {
                echo $demoinstance['message'];
              }
              ?>
            </span>
          </h1>
          <?php if (!isset($demoinstance['invalid'])) { ?>
            <p class="sub-text italic d-flex align-items-center">
              If not redirected in <img class="hourglass" src="./images/hourglass.gif" alt="Timer Image" width="30"><span id="redirecttimer">10 seconds</span>,
              &nbsp;<a href="https://<?php echo $demoinstance['instanceurl']?>" title="Demo Instance link">Click here</a>
            </p>
          <?php }?>
        </div>
        <div class="right">
          <div class="image-stack-container">
            <div class="stack2">
              <img src="./images/image2.png" />
            </div>
            <div class="stack1 main">
              <img src="./images/image1.png">
            </div>
            <div class="stack3">
              <img src="./images/image3.png">
            </div>
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
            var timelimit = 10;
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
