<?php
$link = mysqli_connect('localhost', '****', '****', '****'); // Cambiar
  
  $id = $_POST['idnumber'];
  $admin_name = $_POST['adminname'];
  $first_lastname = $_POST['lastname1'];
  $second_lastname = $_POST['lastname2'];
  $student_age = $_POST['age'];
  $student_grade = $_POST['grade'];
  $school_name = $_POST['schoolname'];
  $nombre_coordinador = $_POST['coorname'];
  $uni_name = $_POST['uniname'];
  $student_address = $_POST['address'];
  
  
  $stmt = mysqli_prepare($link, "INSERT INTO estudiante (Num_id, Nombre, ApellidoP, ApellidoM, Edad, Grado, Nombre_Escuela, Nombre_Coordinador, Nombre_Universidad, Direccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, 'isssiissss', $id, $admin_name, $first_lastname, $second_lastname, $student_age, $student_grade, $school_name, $nombre_coordinador, $uni_name, $student_address);
  
  // Create connection
  $stmt->execute();

  echo '<script>alert("Funcionó")</script>';;
?>
