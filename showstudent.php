<?php
$link = mysqli_connect('localhost', 'root', '', 'comateq080'); // Cambiar

$result = $link->query("SELECT Num_id, Nombre, ApellidoP, ApellidoM, Edad, Grado, Nombre_Escuela, Nombre_Coordinador, Nombre_Universidad, Direccion FROM estudiante");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Num_id"] . " " . $row["Nombre"] . " " . $row["ApellidoP"] . " " .$row["ApellidoM"] . " " . $row["Edad"] . " " . $row["Grado"] . " " . $row["Nombre_Escuela"] . " " . $row["Nombre_Coordinador"] . " " . $row["Nombre_Universidad"] . " " . $row["Direccion"] . "<br>";
    }
} else {
    echo "Database Empty.";
}
$link->close();
?>
