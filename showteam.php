<?php
$link = mysqli_connect('localhost', 'root', '', 'comateq080'); // Cambiar

$result = $link->query("SELECT Nombre_Asociado, Nombre_Estudiantes1, Nombre_Estudiantes2, Nombre_Estudiantes3, Puntuacion, Año_participacion, Nombre_Universidad, Nombre_Coordinador FROM equipo");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Nombre_Asociado"] . " " . $row["Nombre_Estudiantes1"] . " " . $row["Nombre_Estudiantes2"] . " " .$row["Nombre_Estudiantes3"] . " " . $row["Puntuacion"] . " " . $row["Año_participacion"] . " " . $row["Nombre_Universidad"] . " " . $row["Nombre_Coordinador"] . "<br>";
    }
} else {
    echo "Database Empty.";
}
$link->close();
?>
