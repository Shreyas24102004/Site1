<?php
include '_dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $checkemail = "SELECT * FROM user WHERE User_Email = '$email'";
    $result = mysqli_query($conn, $checkemail);

    if (mysqli_num_rows($result) == 0) {
        echo "<script>alert('Email does not exist')</script>";
    } elseif (empty($pass) || empty($cpass)) {
        echo "<script>alert('Please enter password fields.')</script>";
    } elseif ($pass != $cpass) {
        echo "<script>alert('Password and Confirm Password do not match')</script>";
    } elseif (strlen($pass) < 8 || !preg_match("#[0-9]+#", $pass) || !preg_match("#[a-z]+#", $pass) || !preg_match("#[A-Z]+#", $pass) || !preg_match("#\W+#", $pass)) {
        echo "<script>alert('Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character')</script>";
    } else {
        $update = "UPDATE user SET User_Password = '$pass' WHERE User_Email = '$email'";
        $result = mysqli_query($conn, $update);

        if ($result) {
            echo "<script>alert('Password updated successfully')</script>";
            header('location: login.php');
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./forgot.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>
<body>
    <form method="POST">
        <div class="login_form_container">
            <div class="login_form">
                <h2>Forgot Password</h2>
                <div class="input_group">
                    <i class="fa fa-user"></i>
                    <input type="email" name="email" placeholder="E-mail" class="input_text" />
                </div>
                <div class="input_group">
                    <i class="fa fa-unlock-alt"></i>
                    <input type="password" placeholder="Password" name="pass" class="input_text" />
                </div>
                <div class="input_group">
                    <i class="fa fa-unlock-alt"></i>
                    <input type="password" name="cpass" placeholder="Confirm Password" class="input_text" />
                </div><br><br><br>
                <button style="color: white" type="submit" id="login_button">Submit</button>
            </div>
        </div>
    </form>
    <script src="forgot.js"></script>
</body>
</html>
