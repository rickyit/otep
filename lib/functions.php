<?php
include("lib/db.php");

function getUser($id) {
  global $connect;
  $result = $connect->query("SELECT `id`, `firstName`, `lastName`, `age`, `email` FROM `users` WHERE `id` = $id LIMIT 1");
  if($result->num_rows > 0) {
    return $result->fetch_assoc();
  } else {
    return false;
  }
}

function displayUserDetails($user) {
  $output = "<p>First Name: " . $user['firstName'] . "</p>";
  $output .= "<p>Last Name: " . $user['lastName'] . "</p>";
  $output .= "<p>Age: " . $user['age'] . "</p>";
  $output .= "<p>Email: " . $user['email'] . "</p>";
  $output .= "<p>Password: " . $user['password'] . "</p>";
 
  return $output;
}

function outputPost($post) {
  $output = '<article class="post-entry">';
    $output .= '<p class="post-content">';
      $output .= $post['post'];
    $output .= '</p>';
    $output .= '<p>';
      $output .= $post['likes'];
    $output .= '</p>';
  $output .= '</article>';
  return $output;
}



