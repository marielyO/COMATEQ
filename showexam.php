<?php
$link = mysqli_connect('localhost', '****', '****', '****'); // Cambiar

$result = $link->query("SELECT Nombre_Universidad, Nombre_Coordinador, Nombre_Administrador FROM examen");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Nombre_Universidad"] . " " . $row["Nombre_Coordinador"] . " " . $row["Nombre_Administrador"] . "<br>";
    }
} else {
    echo "Database Empty.";
}
$link->close();
?>

