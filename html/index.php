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
      <div class="container vertical-center wrapper">
      
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

            <div class="layout-card" >
              <div class="layout-card-body" data-layoutid="corporate">
                  <img src="./images/image2.png" alt="layout-corporate" />
              </div>
              <div class="layout-footer d-flex">
                  <input type="radio" class="custom-radio-btn" name="layoutsradiobtn" value="corporate"/>
                  <p class="layout-name">Corporate</p>
              </div>
            </div>

            <div class="layout-card" >
              <div class="layout-card-body" data-layoutid="university" >
                  <img src="./images/image3.png" alt="layout-university" />
              </div>
              <div class="layout-footer d-flex">
                  <input type="radio" class="custom-radio-btn" name="layoutsradiobtn" value="university"/>
                  <p class="layout-name">University</p>
              </div>
            </div>

            <div class="layout-card" >
              <div class="layout-card-body" data-layoutid="school" >
                  <img src="./images/image1.png" alt="layout-school" />
              </div>
              <div class="layout-footer d-flex">
                  <input type="radio" class="custom-radio-btn" name="layoutsradiobtn" value="school"/>
                  <p class="layout-name">School</p>
              </div>
            </div>

            <div class="layout-card" >
              <div class="layout-card-body" data-layoutid="classic" >
                  <img src="./images/image2.png" alt="layout-classic" />
              </div>
              <div class="layout-footer d-flex">
                  <input type="radio" class="custom-radio-btn" name="layoutsradiobtn" value="classic"/>
                  <p class="layout-name">Classic</p>
              </div>
            </div>

          </div>
        </div>


        <div class="main">
          <!-- <div class="right">
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
          </div> -->

          <div class="right">
              <div class="layout-card" >
                <div class="layout-card-body" data-layoutid="1">
                    <img src="./images/image2.png" alt="layout-1" />
                </div>
                <div class="layout-footer d-flex">
                    <input type="radio" class="custom-radio-btn" checked name="layoutselected" value="1"/>
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
                <input type="submit" class="btn btn-primary" value="Create sandbox">
              </form>
            </div>
          </div>
          
        </div>
      </div>

  </body>

  <script>
    // This event trigger when we click on layout Image and It will select the layout
    function changeHandler(targetInput = "") {
      let layoutMain = document.querySelector('.layout-main');
      let main = document.querySelector('.main');

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
    const cards = document.querySelectorAll('.layout-main .layout-card .layout-card-body');
    cards.forEach(card => {
        card.addEventListener('click', function() {
            let layoutid = this.dataset.layoutid;
            let targetInput = document.querySelector(`.custom-radio-btn[value="${layoutid}"]`);
            // if(!targetInput.checked) {
              targetInput.checked = true;
              changeHandler(targetInput);
            // } 
        });
    });

    // add event listener to trigger an event when radio button is checked or unchecked for any cards
    const radioBtns = document.querySelectorAll('.layout-main .layout-card .custom-radio-btn');
    radioBtns.forEach(radioBtn => {
      radioBtn.addEventListener('change', function() {
        changeHandler(this);
      });
    });

    //add event listener to onclick on btn-back
    const btnBack = document.querySelector('.btn-back');  
    btnBack.addEventListener('click', function() {
      changeHandler();
    });

    // for scrolling the layout image on hover

  </script>
</html>
