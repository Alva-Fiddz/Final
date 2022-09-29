<?php
include_once 'incluldes/dbh.inc.php';
?>
<!DOCTYPE html>

<head>
  <title>Employee Registration</title>
</head>

<body>
    
$conn;
  <form action="action_page.php">
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="login.html">Login</a></li>
      </ul>
    </nav>
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="FullName"><b>Full Name</b></label>
      <input type="text" placeholder="Enter your Full Name" name="FullName" required>
      <br><br>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <br><br>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <br><br>
      <label for="password-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="password-repeat" required>
      <hr><br><br>
      <button type="submit" class="RegisterButton">Register</button>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="#">Log in</a>.</p>
    </div>
  </form>
</body>