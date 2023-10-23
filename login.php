<?php
include("lib/db.php");

// Redirect to index page if cookie uid is set
if( isset($_COOKIE['uid']) ) {
  header("Location: index.php");
}

// If submitted login form
if( isset($_POST['login']) ) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = $connect->query("SELECT `id` FROM `users` WHERE `email` = '$email' AND `password` = '$password' LIMIT 1");
  if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    setcookie(
      'uid',
      $row['id'],
      time() + 28800,
      "/otep"
    );
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
<form action="login.php" method="post">
    <p>
      <label>Email: </label>
      <input type="text" name="email" value="ricky@tibay.com" />
    </p>
    <p>
      <label>Password: </label>
      <input type="password" name="password" value="abcd" />
    </p>
    <p>
      <button type="submit" name="login">Login</button>
    </p>
  </form>
</body>
</html>