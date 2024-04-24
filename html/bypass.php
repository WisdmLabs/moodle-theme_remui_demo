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
    <div class="bg-top-left"></div>
    <div class="bg-bottom-right"></div>
    <div class="container vertical-center">
      <div class="logo-container">
        <img class="logo"src="./images/Logo.png" alt="Edwiser RemUI Brand Logo"/>
      </div>
      <div class="main d-flex">
        <div class="left">
          <h1 class="heading m-0 py-1 p-0">
            <span class="text-2">Welcome to</span>
            <span class="text-1">Edwiser RemUI demo</span>
          </h1>
          <p class="sub-text">
            We will create a demo sandbox just for you. Feel free to explore and play around it. The sandbox will be available to you for 2 hours.
          </p>
          <div class="inline-form">
            <form class="form" action="./createinstance.php" method="post">
              <label for="inputEmail" class="hidden">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your Email Id" required>
              <input type="submit" class="btn btn-primary" value="Create sandbox">
            </form>
          </div>
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
</html>
