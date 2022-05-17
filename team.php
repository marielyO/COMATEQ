<?php
$link = mysqli_connect('localhost', 'root', '', 'comateq080'); // Cambiar

  $team_name = $_POST['teamname'];
  $name1 = $_POST['s1'];
  $name2 = $_POST['s2'];
  $name3 = $_POST['s3'];
  $score = $_POST['pt'];
  $participation_year = $_POST['year'];
  $nombre_universidad = $_POST['uniname'];
  $nombre_coordinador = $_POST['coorname'];
    
  $stmt = mysqli_prepare($link, "INSERT INTO equipo (Nombre_Asociado, Nombre_Estudiantes1	, Nombre_Estudiantes2, Nombre_Estudiantes3, Puntuacion, Año_participacion, Nombre_Universidad, Nombre_Coordinador) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, 'ssssds', $team_name, $name1, $name2, $name3, $score, $participation_year, $nombre_universidad, $nombre_coordinador);
  // Create connection
  $stmt->execute();

  echo '<script>alert("Funcionó")</script>';
?>