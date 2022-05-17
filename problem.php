<?php
$link = mysqli_connect('localhost', 'root', '', 'comateq080'); // Cambiar

  $uni_name = $_POST['uniname'];
  $nombre_coordinador = $_POST['coorname'];
  
  $stmt = mysqli_prepare($link, "INSERT INTO problema (Nombre_Coordinador, Nombre_Universidad) VALUES (?, ?)");
  mysqli_stmt_bind_param($stmt, 'ss', $nombre_coordinador, $uni_name);
  
  // Create connection
  $stmt->execute();

  echo '<script>alert("Funcionó")</script>';;
?>