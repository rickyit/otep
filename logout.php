<?php
if( isset($_COOKIE['uid']) ) {
  setcookie(
    'uid',
    '',
    time() - 1,
    "/otep"
  );
}
header("Location: login.php");


