<?php

if(isset($_POST['submit'])){
 

        $uname=$_POST['uname'];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $error=[];
        
        // Check if email is valid and not already in the database
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo $error['email']="<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'Please enter a valid email address.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
          }
          else{
            $query = "SELECT * FROM user WHERE User_Email='$email'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                echo $error['email']="<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'This email address already exists.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
            }
          }



        // Check if contact is valid and not already in the database
          if(!preg_match('/^[0-9]{10}+$/', $contact)){
            echo $error['contact']="<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'Please enter a valid 10 digit contact number.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
          }
          else{
            $query = "SELECT * FROM user WHERE User_Contact='$contact'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                echo $error['contact']="<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'This contact number already exists.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
            }
          }




        // Check if password and confirm_password fields are not empty
        if(empty($password) || empty($cpassword)){
          echo $error['password']="<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'Please enter password fields.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
      }
      else if($password != $cpassword){
          echo $error['password']= "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'Passwords do not match.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
      }
      else if(strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[a-z]+#", $password) || !preg_match("#[A-Z]+#", $password) || !preg_match("#\W+#", $password)){
          echo $error['password']="<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
      }
      else if(empty($uname)){
        echo $error['username']="<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'Please enter a username.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
    }




    // Check if the username already exists in the database
      else if(!preg_match("/^[a-zA-Z0-9_]+$/", $uname)){
        echo $error['username']="<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'Username can only contain letters, numbers, and underscores.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
    }
    else{
        $query = "SELECT * FROM user WHERE User_Name='$uname'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            echo $error['username']="<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error!</strong> 'This username already exists. Please choose a different one.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
        }



        //entry in database SQL query
      else{
          // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
          $insert="INSERT INTO user (User_Name,User_Contact,User_Email,User_Address,User_Password) VALUES ('$uname','$contact' ,'$email','$address','$password')";
          $register=mysqli_query($conn,$insert);
          
          if($register){
              echo "<div class='alert alert-success alert-dismissible fade show' role='alert'> 'You are signed up now you can login.' <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>";
              header("location:login.php");
          }else{
              echo "Error: " . mysqli_error($conn);
          }
      }
    }
  }
?>