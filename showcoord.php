<?php
$link = mysqli_connect('localhost', '****', '****', '****'); // Cambiar

$result = $link->query("SELECT Num_id, Nombre, ApellidoP, ApellidoM, Email, Nombre_Universidad, Nombre_Equipos, URL_Web FROM coordinador");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Num_id"] . " " . $row["Nombre"] . " " . $row["ApellidoP"] . " " .$row["ApellidoM"] . " " . $row["Email"] . " " . $row["Nombre_Universidad"] . " " . $row["Nombre_Equipos"] . " " . $row["URL_Web"] . "<br>";
    }
} else {
    echo "Database Empty.";
}
$link->close();
?>
