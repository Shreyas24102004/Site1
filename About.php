<?php
 
// Starting the session, to use and
// store data in session variable
session_start();
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['User_Name'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location:  login.php');
}
  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['User_Name']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="About Us">
    <meta name="description" content="">
    <title>About</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="About.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/logo.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-0b3e"><div class="u-clearfix u-sheet u-sheet-1">
        <a class="u-image u-logo u-image-1" data-image-width="991" data-image-height="993">
          <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="enter_service.php" style="padding: 10px 20px;">Service</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="enter_service.php">Service</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <div style="margin-left: 78%;margin-top: -3%;">
       <p style="display: inline; color:black;" id = "username_show"><strong>
                    <?php echo $_SESSION['User_Name']; ?>
                </strong></p>
                <?php if( $_SESSION['User_Name']): ?>
                    <a href="logout.php" style="display: inline;" name = "logout" class="u-border-2 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-hover-palette-1-base u-radius-50 u-text-palette-1-light-1 u-white u-btn-1">Logout</a>
                <?php else: ?>
                    <a href="login.php" style="display: inline;" class="u-border-2 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-hover-palette-1-base u-radius-50 u-text-palette-1-light-1 u-white u-btn-1">Login</a>
                <?php endif; ?>
       </div>
      </div></header>
    <section class="u-clearfix u-palette-1-dark-3 u-section-1" id="carousel_32d4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-round u-radius-20 u-image-1" src="images/61b3bb7c94d2718d384275bc9bd565bafa344ff9a7f99f011ebeb0bd0e33d824132d0dbc097b1880b5c800478f6a9347de3639541b12a59c1d89c2_1280.jpg" data-image-width="1280" data-image-height="853">
        <img class="u-image u-image-2" src="images/434031ca26366e2edef46bfed8545ab91bf5ee2d3ad59192f7fe7492977a8a0c41ae8706cf8a560123e7397ca1ea6dae507ace9a90c1fc22693654_1280.png" data-image-width="783" data-image-height="1280">
        <div class="u-align-left u-container-style u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-black u-text-1">About Us</h2>
            <p class="u-text u-text-2">Online Car Repair System is a multi-brand car service workshop offering genuine spare parts, diagnostics and repair – even for new-age cars with the latest automotive technology. So no matter which car you own, no matter what model, you can be assured of the best service.&nbsp; Garage have committed to constantly improving quality assurance standards.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-image u-shading u-section-2" id="carousel_caac" data-image-width="1980" data-image-height="1114">
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="u-expanded-width u-image u-image-default u-image-1" src="images/a41c81e8313bafc5e33c92560d38b0bfe9bb7738efe5d05021b02354580b94157ba414ac6aee184fcadadf65f804d04dd56b41d76407cd63fdeab7_1280.jpg" alt="" data-image-width="1280" data-image-height="720">
                <p class="u-hover-feature u-text u-text-1"> We are a Self owned and operated business that takes pride in providing quality car service to our customers. We offer a wide range of car services including oil changes, tune-ups, brake</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img class="u-expanded-width u-image u-image-default u-image-2" src="images/b6f066bdd5a4e33d87c51fdd227da4d28ada9c1535132f105d819eee5182fc2d3a5f64f52f63290d142e16de93572acad8b76ecc2426b8a01761ab_1280.jpg" alt="" data-image-width="1280" data-image-height="853">
                <p class="u-hover-feature u-text u-text-2">OCRS is located in the heart of the city and offers a Free Pick-up and Drop Off for customers. The company offers a wide range of services that are affordable and best prices.</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img class="u-expanded-width u-image u-image-default u-image-3" src="images/fdca052436f94ac8c2b70467c72f9e43b75b180356e4aad55a946a2f0ca0d336f24f82ac73c4befafaf657c0e64f57fb99bda0bd52fda0a34d6750_1280.jpg" alt="" data-image-width="1280" data-image-height="853">
                <p class="u-hover-feature u-text u-text-3">OCRS is available 24 hours a day, 7 days a week. We are the best car garage in Ahmedabad and provide the best car service in the city. We offer a wide range of payment options for our customers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-f1c3"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Thank You</p>
      </div></footer>
</body></html>