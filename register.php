<?php
include("lib/db.php");

// Redirect to index page if cookie uid is set
if( isset($_COOKIE['uid']) ) {
  header("Location: index.php");
}


if( isset($_POST['register']) ) {

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO `users` (`firstName`,`lastName`,`age`,`email`,`password`) VALUES ('$firstName','$lastName','$age','$email','$password')";

  $result = $connect->query($query);
  if($result) {
    header("Location: index.php");
  }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="register.php" method="post">
    <p>
      <label>First name: </label>
      <input type="text" name="firstName" />
    </p>
    <p>
      <label>Last name: </label>
      <input type="text" name="lastName" />
    </p>
    <p>
      <label>Age: </label>
      <input type="text" name="age" />
    </p>
    <p>
      <label>Email: </label>
      <input type="text" name="email" />
    </p>
    <p>
      <label>Password: </label>
      <input type="text" name="password" />
    </p>
    <p>
      <button type="submit" name="register">Register</button>
    </p>
    <p>
      Already registed? <a href="login.php" title="Login">Login</a>
</p>
  </form>
</body>
</html>