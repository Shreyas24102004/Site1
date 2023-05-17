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
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <title>Service</title>
    <link rel="stylesheet" href="nicepage1.css" media="screen">
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Service.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage1.js" defer=""></script>
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
    <meta property="og:title" content="Service">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-0b3e"><div class="u-clearfix u-sheet u-sheet-1">
    <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="991" data-image-height="993">
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
    <section class="u-align-center u-clearfix u-white u-section-1" id="sec-8cda">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1">Select Car Model</h1>
        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row" >
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                <div class="u-border-1 u-border-grey-30 u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-1">
                  <img class="u-image u-image-contain u-image-round u-radius-10 u-image-1" src="images/hatchback.jpeg" alt="" data-image-width="370" data-image-height="136">
                  <h5 class="u-text u-text-2">HATCHBACK</h5>
                  <a href="hatchback_2b62cd2de9f474733fff02559fded3799f604dbee47d890186eb3967b4bac58c.html" class="u-border-1 u-border-black u-btn u-btn-rectangle u-button-style u-radius-0 u-btn-1">Select</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                <div class="u-border-1 u-border-grey-30 u-container-layout u-valign-bottom u-container-layout-2">
                  <img class="u-image u-image-contain u-image-round u-radius-10 u-image-2" src="images/seden1.jpeg" alt="" data-image-width="380" data-image-height="133">
                  <h2 class="u-align-center u-text u-text-3">SEDEN</h2>
                  <a href="hatchback_2b62cd2de9f474733fff02559fded3799f604dbee47d890186eb3967b4bac58c.html" class="u-border-2 u-border-black u-btn u-button-style u-white u-btn-2">Select</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-3">
                <div class="u-border-1 u-border-grey-30 u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-3">
                  <img class="u-image u-image-contain u-image-round u-radius-10 u-image-3" src="images/af29b6cd92f4ed44394fc54720755382a3bf398fbc6b1dfb052a87c57871dc4994080442303cfcda7170ff9bb81dcb7725c70b7c95bdb2430daef6_1280.jpg" alt="" data-image-width="1280" data-image-height="853">
                  <h3 class="u-text u-text-4">SUV</h3>
                  <a href="hatchback_2b62cd2de9f474733fff02559fded3799f604dbee47d890186eb3967b4bac58c.html" class="u-border-1 u-border-black u-btn u-button-style u-white u-btn-3">Select</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-2">
          <div class="u-layout">
            <div class="u-layout-row" >
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-4">
                <div class="u-border-1 u-border-grey-30 u-container-layout u-container-layout-4">
                  <img class="u-image u-image-contain u-image-round u-radius-10 u-image-4" src="images/pickuptruck.jpeg" alt="" data-image-width="279" data-image-height="180">
                  <h5 class="u-text u-text-5">PICKUPTRUCK</h5>
                  <a href="hatchback_2b62cd2de9f474733fff02559fded3799f604dbee47d890186eb3967b4bac58c.html" class="u-border-1 u-border-black u-btn u-btn-rectangle u-button-style u-radius-0 u-btn-4">Select</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-5">
                <div class="u-border-1 u-border-grey-30 u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-5">
                  <img class="u-image u-image-contain u-image-round u-radius-10 u-image-5" src="images/minivan.jpeg" alt="" data-image-width="275" data-image-height="183">
                  <h2 class="u-align-center u-text u-text-6">MINIVAN</h2>
                  <a href="hatchback_2b62cd2de9f474733fff02559fded3799f604dbee47d890186eb3967b4bac58c.html" class="u-border-2 u-border-black u-btn u-button-style u-white u-btn-5">Select</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-6">
                <div class="u-border-1 u-border-grey-30 u-container-layout u-container-layout-6">
                  <img class="u-image u-image-contain u-image-round u-radius-10 u-image-6" src="images/crossover.jpeg" alt="" data-image-width="275" data-image-height="183">
                  <h3 class="u-text u-text-7">CROSSOVER</h3>
                  <a href="hatchback_2b62cd2de9f474733fff02559fded3799f604dbee47d890186eb3967b4bac58c.html" class="u-border-1 u-border-black u-btn u-button-style u-white u-btn-6">Select</a>
                </div>
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