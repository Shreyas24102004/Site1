<?php

include '_dbconnect.php';


// Check if the form was submitted
if (isset($_POST['submit'])) {

    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["lpassword"];

    // Prepare and execute the SQL query
    $stmt = mysqli_prepare($conn, "SELECT * FROM user WHERE User_Name = ? AND User_Password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);

    // Check if there is a row with the given username and password
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) == 1) {
        // The login was successful
        $login = true;
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You are logged in
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div> ';
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['User_Name'] = $username;
        header("location: Home.php");
    } else {
        // The login failed
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Password and username are incorrect.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
}

// Close the database connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="logincss.css">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en">
    <!-- <?php
    if($login){
      
      }
      if($showError){
    
      }
    ?> -->
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-e54f" data-image-width="1024" data-image-height="680">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/logo.jpg" alt=""></span>
            <h2 class="u-text u-text-default u-text-palette-2-base u-text-1">Login Now</h2>
            <div class="u-form u-login-control u-form-1">
              <form action="login.php" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                <div class="u-form-group u-form-name u-label-top">
                  <label for="username-a30d" class="u-label u-text-grey-30 u-label-1">Username *</label>
                  <input type="text" placeholder="Enter your Username" id="username-a30d" name="username" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-1" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-label u-text-grey-30 u-label-2">Password *</label>
                  <input type="password" placeholder="Enter your Password" id="password-a30d" name="lpassword" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-2" required="">
                </div>
                <div class="u-form-checkbox u-form-group u-label-top">
                  <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
                  <label for="checkbox-a30d" class="u-label u-text-grey-30 u-label-3">Remember me</label>
                </div>
                <div class="u-align-center u-form-group u-form-submit u-label-top">
                  <input type="submit" value="submit" name="submit" class="u-form-control-hidden">
                  <button type="submit"  class="u-active-palette-1-base u-border-2 u-border-grey-75 u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-2-base u-radius-50 u-btn-1">Login</button>
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            <a href="Signup.php" class="u-border-active-palette-2-base u-border-hover-palette-2-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-palette-2-base u-btn-2">Don't have an account?</a>
            <a href="Signup.html" class="u-border-active-palette-2-base u-border-hover-palette-2-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-palette-2-base u-btn-3">Forgot password?</a>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-f1c3"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Thank You</p>
      </div></footer>
  
</body></html>
