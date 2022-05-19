<?php
$link = mysqli_connect('localhost', '****', '****', '****'); // Cambiar

  $admin_id = $_POST['idnumber'];
  $nombre = $_POST['adminname'];
  $apellidoP = $_POST['lastname1'];
  $apellidoM = $_POST['lastname2'];
  $email = $_POST['email'];
  $nombre_universidad = $_POST['uniname'];
  $posicion_organizacion = $_POST['position'];

  $stmt = mysqli_prepare($link, "INSERT INTO administrador (Num_id, Nombre, ApellidoP, ApellidoM, Email, Nombre_Universidad, Posicion_Organizacion) VALUES (?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, 'issssss', $admin_id, $nombre, $apellidoP, $apellidoM, $email, $nombre_universidad, $posicion_organizacion);
  // Create connection
  $stmt->execute();

  echo '<script>alert("Funcionó")</script>';

?>
