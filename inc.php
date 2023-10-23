<?php
include("lib/db.php");
include("lib/functions.php");

// Redirect to login page if cookie uid is not set
if( !isset($_COOKIE['uid']) ) {
  header("Location: login.php");
}

$user = getUser($_COOKIE['uid']);
?>