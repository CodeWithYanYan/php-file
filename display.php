<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST['username'];
  $password = $_POST['password'];

  echo "<p>Your username is " . $username . "</p>";
  echo "<p>Your password is " . $password . "</p>";

}

?>