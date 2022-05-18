<?php

$servername = "localhost";
$username = "****";
$password = "****";
$dbname = "****";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$consulta = $_POST['query'];

$sql = $consulta;

if ($conn->query($sql) === TRUE) {
  echo "Su consulta fue exitosa.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
