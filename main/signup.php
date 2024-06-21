<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <style>
      input[type=text],input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form{
  width: 70%;
  margin-left:auto;
  margin-right:auto;
}
    </style>
</head>
<body>
<?php 
include "mainheader.php";

?>

<style>
body {
  background-image: url('../images/homepageimg4.png');
}
</style>
<br><br><br><br><br><br>
<h1 style="text-align:center;  font-size:35px">Sign-Up</h1>

<div class="form">


<form action="signup.inc.php" method="post">

  <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your first name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      <label for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="Your address">

      <label for="email">E-mail</label>
      <input type="text" id="email" name="email" placeholder="Your email..">

      <label for="mobile">Mobile</label>
      <input type="text" id="mobile" name="mobile" placeholder="Your mobile..">

      <label for="gender">Gender</label>
      <input type="text" id="gender" name="gender" placeholder="Your gender..">

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Your username..">

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Your password..">


        <br>
      <label for="register">Register as</label>
      <select id="register" name="register">
        <option value="Jobseeker">Jobseeker</option>
        <option value="Employer">Employer</option>
      
      </select>
    
      <button name="submit" type="submit">Submit</button>
      <p>Already have an account?<a href="login.php"> Log in</a></p>
      </div>

    
      <br><br><br><br><br><br>


  </form>
    









<?php 
include "footer.php";

?>
    
</body>
</html>
