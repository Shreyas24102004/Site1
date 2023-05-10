<?php
  include '_dbconnect.php';
  include 'ragister.php';
?>
<!DOCTYPE html>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel='stylesheet' href='bootstrap.min.css'>

<link rel="stylesheet" href="signup.css">
</head>
<body >
<!-- partial:index.partial.html -->
<!-- Button trigger modal -->
<center>
<button type="button" id="first-signup-button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Sign Up
</button>

</center>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="column" id="main">
          <h1>Sign Up </h1>
          <form action = "Signup.php" method = "post">
            <div class="form-group">
              <label for="exampleInputName">Name</label>
              <input type="text" class="form-control" id="exampleInputName" name="uname" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="contact">Contact no.</label>
              <input type="tel" class="form-control" id="exampleInputcontact" name="contact" pattern="[0-9]{5}[0-9]{5}" placeholder="1234567890" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail </label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="E-mail" required>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="exampleInputaddress" name="address" placeholder="Enter your Address" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <label for="passvalidation" style="font-size : 10px">(Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.)</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputCPassword1" name="cpassword" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary" Name="submit">Sign Up</button>

          </form>
        </div>
        <div>
          <?xml version="1.0" encoding="UTF-8"?>
          <svg width="67px" height="578px" viewBox="0 0 67 578" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
              <title>Path</title>
              <desc>Created with Sketch.</desc>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path d="M11.3847656,-5.68434189e-14 C-7.44726562,36.7213542 5.14322917,126.757812 49.15625,270.109375 C70.9827986,341.199016 54.8877465,443.829224 0.87109375,578 L67,578 L67,-5.68434189e-14 L11.3847656,-5.68434189e-14 Z" id="Path" fill="#F9BC35"></path>
              </g>
          </svg>
        </div>
        <div class="column" id="secondary">
          <div class="sec-content">
            <h2>Welcome to<br> Online Car Repair System (OCRS) </h2>
            <a href="login.php" class="btn btn-primary">Login
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='jquery.min.js'></script>
<script src='popper.min.js'></script>
<script src='bootstrap.min.js'></script>
</body>
</html>

