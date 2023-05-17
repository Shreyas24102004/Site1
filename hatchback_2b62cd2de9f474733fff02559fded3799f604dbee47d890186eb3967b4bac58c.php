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
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>hatchback</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="nicepage1.css" media="screen">
<link rel="stylesheet" href="hatchback.css" media="screen">
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
    <meta property="og:title" content="hatchback">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-white u-header" id="sec-0b3e"><div class="u-clearfix u-sheet u-sheet-1">
    <a  class="u-image u-logo u-image-1" data-image-width="991" data-image-height="993">
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
    <section class="u-align-center u-clearfix u-section-1" id="sec-6f35">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
        <div class="u-expanded-width u-tabs u-tabs-1">
          <ul class="u-border-1 u-border-grey-25 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item u-tab-item-1" role="presentation">
              <a class="active u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-tab-link u-text-active-palette-2-base u-text-hover-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Periodic Services</a>
            </li>
            <li class="u-tab-item u-tab-item-2" role="presentation">
              <a class="u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-tab-link u-text-active-palette-2-base u-text-hover-black u-tab-link-2" id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917" aria-selected="false">Brake Maintenance</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-button-style u-tab-link u-tab-link-3" id="link-tab-08ef" href="#tab-08ef" role="tab" aria-controls="tab-08ef" aria-selected="false">Ac Service</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-button-style u-tab-link u-tab-link-4" id="link-tab-fd2d" href="#tab-fd2d" role="tab" aria-controls="tab-fd2d" aria-selected="false">Denting &amp; Painting</a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-1">
                <img alt="" class="u-image u-image-default u-image-1" data-image-width="1280" data-image-height="853" src="images/fdca052436f94ac8c2b70467c72f9e43b75b180356e4aad55a946a2f0ca0d336f24f82ac73c4befafaf657c0e64f57fb99bda0bd52fda0a34d6750_1280.jpg">
                <h4 class="u-text u-text-1">Basic Service</h4>
                <ul class="u-custom-list u-text u-text-2">
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-b367"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Wiper Fluid Replacement<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-b367"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Battery Water Top Up<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-b367"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Car Wash<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-b367"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Interior Vacuuming ( Carpet &amp; Seats )<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-b367"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Engine Oil Replacement<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-b367"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Oil Filter Replacement<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-b367"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Air Filter Cleaning<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-b367"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Coolant Top Up (200 ml)<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-b367"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Heater/Spark Plugs Checking<br>
                  </li>
                </ul>
                <a  class="u-active-none u-btn u-button-style u-hover-none u-none u-text-black u-text-hover-palette-1-light-1 u-btn-1"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <img class="u-image u-image-round u-radius-10 u-image-2" src="images/car-maintenance-guide.jpeg" alt="" data-image-width="1600" data-image-height="900">
                <h4 class="u-text u-text-3">Standard Service</h4>
                <ul class="u-custom-list u-text u-text-4">
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-1dcf"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Car Scanning
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-1dcf"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Rear Brake Shoes Serviced
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-1dcf"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Front Brake Pads Serviced<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-1dcf"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Fuel Filter Checking<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-1dcf"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Brake Fluid Top Up<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-1dcf"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>AC Filter Cleaning<br>
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-1dcf"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>All Basic Service...<br>
                  </li>
                </ul>
                <a  class="u-active-none u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-2-base u-btn-2"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-2917" role="tabpanel" aria-labelledby="link-tab-2917">
              <div class="u-container-layout u-container-layout-2">
                <img class="u-image u-image-contain u-image-round u-radius-36 u-image-3" src="images/26296sc011-2018-spp-1.jpg" alt="" data-image-width="1200" data-image-height="900">
                <img class="u-image u-image-contain u-image-round u-preserve-proportions u-radius-36 u-image-4" src="images/BrakeShoeThumbnail.jpg" alt="" data-image-width="640" data-image-height="640">
                <img class="u-image u-image-contain u-image-round u-preserve-proportions u-radius-36 u-image-5" src="images/C-Hook__13924.1643285852.jpg" alt="" data-image-width="1280" data-image-height="1280">
                <a  class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-3"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <a  class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-4"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <a class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-5"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <img class="u-image u-image-contain u-image-round u-preserve-proportions u-radius-36 u-image-6" src="images/s-l1600.jpg" alt="" data-image-width="1200" data-image-height="1200">
                <img class="u-image u-image-contain u-image-round u-preserve-proportions u-radius-36 u-image-7" src="images/Thumbnail.jpg" alt="" data-image-width="640" data-image-height="640">
                <img class="u-image u-image-contain u-image-round u-preserve-proportions u-radius-36 u-image-8" src="images/Thumbnail2.jpg" alt="" data-image-width="640" data-image-height="640">
                <a class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-6"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <a class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-7"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <a class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-8"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
              </div>
            </div>
            <div class="u-container-style u-tab-pane" id="tab-08ef" role="tabpanel" aria-labelledby="link-tab-08ef">
              <div class="u-container-layout u-container-layout-3">
                <img class="u-image u-image-round u-radius-10 u-image-9" src="images/ac_repair.jpg" alt="" data-image-width="1500" data-image-height="1068">
                <h4 class="u-text u-text-default u-text-5">Regular AC Service</h4>
                <ul class="u-custom-list u-text u-text-default u-text-6">
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-8602"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>AC vent cleaning
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-8602"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>AC Inspaction
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-8602"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>AC Gas
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-8602"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>AC Filter Cleaning
                  </li>
                  <li>
                    <div class="u-list-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 24 24" id="svg-8602"><path d="m23.526 5.101c-.04-.399-.231-.759-.541-1.014l-2.318-1.904c-.639-.524-1.585-.432-2.111.207l-9.745 11.86-3.916-3.355c-.628-.536-1.576-.465-2.115.163l-1.952 2.278c-.261.304-.388.691-.357 1.091s.215.764.52 1.024l7.403 6.346c.275.235.616.361.974.361.044 0 .089-.002.134-.006.405-.036.77-.229 1.028-.542l12.662-15.411c.255-.309.373-.7.334-1.098z" fill="#2196f3"></path><path d="m.638 13.173c-.304.354-.452.807-.417 1.273.036.466.251.891.606 1.194l7.403 6.346v.001c.321.273.719.421 1.136.421.052 0 .104-.003.156-.007.472-.042.898-.266 1.199-.632l12.665-15.411c.613-.746.504-1.852-.242-2.464l-2.318-1.904c-.744-.612-1.848-.504-2.463.24l-9.584 11.665-3.722-3.189c-.732-.627-1.839-.543-2.467.189zm3.444-1.329 4.303 3.688c.153.131.348.196.554.178.201-.018.386-.115.514-.271l10.07-12.255c.087-.107.246-.123.352-.035l2.318 1.904c.107.088.123.246.035.353l-12.664 15.41c-.058.07-.132.087-.171.09-.039.006-.115.001-.185-.059l-7.404-6.346c-.068-.059-.083-.132-.086-.171-.003-.038.001-.113.06-.182l1.952-2.278c.089-.102.247-.116.352-.026z"></path></svg>
                    </div>Condenser Cleaning
                  </li>
                </ul>
                <a class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-9"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
              </div>
            </div>
            <div class="u-container-style u-tab-pane" id="tab-fd2d" role="tabpanel" aria-labelledby="link-tab-fd2d">
              <div class="u-container-layout u-container-layout-4">
                <img class="u-image u-image-round u-radius-36 u-image-10" src="images/maxresdefault.jpg" alt="" data-image-width="1280" data-image-height="720">
                <img class="u-image u-image-round u-radius-38 u-image-11" src="images/LHSreardoorpaintsq.jpg" data-image-width="300" data-image-height="300">
                <h4 class="u-text u-text-default u-text-7">Front Side Paint </h4>
                <h4 class="u-text u-text-default u-text-8">Left Side Paint </h4>
                <a class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-10"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <a class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-11"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <img class="u-image u-image-round u-radius-36 u-image-12" src="images/Bootpaintsq.jpg" data-image-width="300" data-image-height="300">
                <img class="u-image u-image-round u-radius-42 u-image-13" src="images/RHSfrontdoorpaintsq.jpg" data-image-width="300" data-image-height="300">
                <h4 class="u-text u-text-default u-text-9">Rear Side Paint</h4>
                <h4 class="u-text u-text-default u-text-10">Right Side Paint </h4>
                <a class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-12"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <a  class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-13"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <img class="u-image u-image-round u-radius-39 u-image-14" src="images/rooftop.jpeg" alt="" data-image-width="273" data-image-height="185">
                <img class="u-image u-image-round u-radius-45 u-image-15" src="images/GettyImages-155161419-5c538fd54cedfd0001efd77c.jpg" alt="" data-image-width="1500" data-image-height="998">
                <h4 class="u-text u-text-default u-text-11">Whole Body Paint</h4>
                <h4 class="u-text u-text-default u-text-12">Rooftop Paint</h4>
                <a  class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-14"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
                <a  class="u-active-none u-border-2 u-border-grey-75 u-btn u-button-style u-hover-none u-none u-text-body-color u-text-hover-palette-1-base u-btn-15"><span class="u-icon u-text-palette-2-base"><svg class="u-svg-content" viewBox="0 0 511.334 511.334" style="width: 1em; height: 1em;"><path d="m506.887 114.74c-3.979-5.097-10.086-8.076-16.553-8.076h-399.808l-5.943-66.207c-.972-10.827-10.046-19.123-20.916-19.123h-42.667c-11.598 0-21 9.402-21 21s9.402 21 21 21h23.468l23.018 256.439c.005.302-.01.599.007.903.047.806.152 1.594.286 2.37l.842 9.376c.016.177.034.354.055.529 2.552 22.11 13.851 41.267 30.19 54.21-8.466 10.812-13.532 24.407-13.532 39.172 0 35.106 28.561 63.667 63.666 63.667 35.106 0 63.667-28.561 63.667-63.667 0-7.605-1.345-14.9-3.801-21.667h114.936c-2.457 6.767-3.801 14.062-3.801 21.667 0 35.106 28.561 63.667 63.667 63.667s63.667-28.561 63.667-63.667-28.561-63.667-63.667-63.667h-234.526c-15.952 0-29.853-9.624-35.853-23.646l335.608-19.724c9.162-.538 16.914-6.966 19.141-15.87l42.67-170.67c1.567-6.272.158-12.918-3.821-18.016z"></path></svg><img></span>&nbsp;Add to cart
                </a>
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