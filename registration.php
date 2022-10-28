<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "main";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



function hoosonbish($field) {
  if($field != "") {
    return true;
    
  } return false;
}

if(isset($_POST['email'])) {
    foreach($_POST as $index => $data) {
      if(hoosonbish($data) == false) {
        die('hooson baina' . $index);
      }
      if($_POST['password'] != $_POST['password_confirmation']) {
        header('Location: /register.php?error=confirmation');
      }
      die('ready');
    }


} else{
  header("Location: /register.php?");
}
?>