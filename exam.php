<?php
$link = mysqli_connect('localhost', '****', '****', '****'); // Cambiar

  $uni_name = $_POST['uniname'];
  $nombre_coordinador = $_POST['coorname'];
  $nombre_admin = $_POST['adminname'];
  
  $stmt = mysqli_prepare($link, "INSERT INTO examen (Nombre_Coordinador, Nombre_Universidad, Nombre_Administrador) VALUES (?, ?, ?)");
  mysqli_stmt_bind_param($stmt, 'sss', $nombre_coordinador, $uni_name, $nombre_admin);
  
  // Create connection
  $stmt->execute();

  echo '<script>alert("Funcionó")</script>';;
?>
