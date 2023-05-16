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
    <meta name="keywords" content="​Electric Cars">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="csss.css">
    <link id="u-page-google-font" rel="stylesheet" href="css1.css">
    
    

    
    <!-- <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/logo.jpg"
}</script> -->
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-0b3e"><div class="u-clearfix u-sheet u-sheet-1">
        <a   class="u-image u-logo u-image-1" data-image-width="991" data-image-height="993">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Service.html" style="padding: 10px 20px;">Service</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Service.html">Service</a>
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
    <section class="u-clearfix u-grey-15 u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-section-1" id="carousel_caf0">
      <div class="u-expanded-width u-gradient u-hover-feature u-shape u-shape-rectangle u-shape-1" data-animation-name="" data-animation-duration="0" data-animation-direction=""></div>
      <div class="u-palette-2-base u-radius-20 u-shape u-shape-round u-shape-2"></div>
      <img src="images/front-view-high-speed-silver-sport-car-driving-highway_114579-4030.jpg"  class="u-align-left u-hover-feature u-image u-image-round u-radius-50 u-image-1" data-image-width="626" data-image-height="417" data-animation-name="customAnimationIn" data-animation-duration="4000" data-animation-direction="" data-animation-delay="0">
      <div class="u-align-left u-container-style u-gradient u-group u-radius-50 u-shape-round u-similar-fill u-group-1">
        <div class="u-container-layout u-padding-12 u-container-layout-1">
          <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-palette-2-base u-text-1"> OCRS</h2>
          <h6 class="u-text u-text-2">Online Car Repair System.</h6>
          <p class="u-text u-text-3">It's provide customer to book car service from him/her location and their suitable date and time.</p>
        </div>
      </div>
      
      
    </section>
    <section class="u-clearfix u-image u-section-2" id="sec-b2b0" data-image-width="1280" data-image-height="558">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-text u-text-body-alt-color u-text-1">Free Pick up &amp; Drop Across Ahmedabad</p><span class="u-icon u-icon-circle u-palette-1-base u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 515.556 515.556" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2ac7"></use></svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556" id="svg-2ac7"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"></path></svg>
            
            
          </span>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <p class="u-text u-text-body-alt-color u-text-2">Certified Mechanics Expert Workmanship&nbsp;</p><span class="u-icon u-icon-circle u-palette-1-base u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 515.556 515.556" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3af3"></use></svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556" id="svg-3af3"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"></path></svg>
            
            
          </span>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <p class="u-text u-text-body-alt-color u-text-3">Best Affordable &nbsp;&amp; Upfront Prices&nbsp;</p><span class="u-icon u-icon-circle u-palette-1-base u-text-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 515.556 515.556" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-76aa"></use></svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556" id="svg-76aa"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"></path></svg>
            
            
          </span>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-body-alt-color u-text-4">24 Hours Customer Support <font color="#478ac9">+91 1234567890</font>
                </p><span class="u-icon u-icon-circle u-palette-1-base u-text-white u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 515.556 515.556" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-76aa"></use></svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556" id="svg-76aa"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"></path></svg>
            
            
          </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-3" id="sec-261f" data-image-width="1280" data-image-height="960">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/9615597-4262834d.png" alt=""></span>
                <h1 class="u-align-center u-text u-text-body-alt-color u-text-1">Car <span style="font-weight: 700;"></span>Service
                </h1>
                <p class="u-align-center u-text u-text-body-alt-color u-text-2">Our certified expert Mechanic are dedicated to bringing you the best performance solutions.</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-text-white u-icon-2"><img src="images/2099058-4e4e0347.png" alt=""></span>
                <h1 class="u-align-center u-text u-text-body-alt-color u-text-3">Car Repair</h1>
                <p class="u-align-center u-text u-text-body-alt-color u-text-4">It's important to keep your vehicle in tune and up to date with repairs. This will help you save time and does not risk your car much.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-f1c3"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Thank You</p>
      </div></footer><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 20px; bottom: 20px; padding: 20px; background-image: linear-gradient(#478ac9, white);" class="u-back-to-top u-gradient u-icon u-icon-circle u-opacity u-opacity-85" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  
</body></html>
