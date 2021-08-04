<?php
$servername = "localhost";
$username = "harmonic_site";
$password = "wHa91bvZTvzF";

$email = $_POST["email"];
try {
  $conn = new PDO("mysql:host=$servername;dbname=harmonic_zeus", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = "INSERT INTO emails_site (email)
  VALUES ("$email")";
  // use exec() because no results are returned
  $conn->exec($sql);
  
  echo "New record created successfully!";
  return true;

} catch(PDOException $e) {

  echo $sql . "<br>" . $e->getMessage();
  return false;

}

$conn = null;


?>