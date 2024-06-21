<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <style>

  input[type=text], input[type=password],select {
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
  background-image: url('../images/homepageimg5.png');
}
</style>
<br><br><br><br><br><br>
<h1 style="text-align:center;  font-size:35px">Login</h1>

<div class="form">


<form action="login.inc.php" method="post">

  
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Your username..">

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Your password..">


      
    
      <button name="submit" type="submit">login</button>
      <p>Don't have an account? <a href="signup.php"> Register</a></p>
      </div>

 
      <br><br><br><br><br><br>

      


  </form>
    









<?php 
include "footer.php";

?>
    
</body>
</html>
