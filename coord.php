<?php
$link = mysqli_connect('localhost', '****', '****', '****'); // Cambiar

  $id_coordenador = $_POST['idnumber'];
  $nombre_coordinador = $_POST['adminname'];
  $apellidoP = $_POST['lastname1'];
  $apellidoM = $_POST['lastname2'];
  $email = $_POST['email'];
  $nombre_universidad = $_POST['uniname'];
  $nombre_equipo = $_POST['team'];
  $url = $_POST['url'];
  
  $stmt = mysqli_prepare($link, "INSERT INTO coordinador (Num_id, Nombre, ApellidoP, ApellidoM, Email, Nombre_Universidad, Nombre_Equipos, URL_Web) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, 'isssssss', $id_coordenador, $nombre_coordinador, $apellidoP, $apellidoM, $email, $nombre_universidad, $nombre_equipo, $url);
  
  // Create connection
  $stmt->execute();

  echo '<script>alert("Funcionó")</script>';
?>
