<?php
$link = mysqli_connect('localhost', 'root', '', 'comateq080'); // Cambiar

$result = $link->query("SELECT Num_id, Nombre, ApellidoP, ApellidoM, Email, Nombre_Universidad, Posicion_Organizacion FROM administrador");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Num_id"] . " " . $row["Nombre"] . " " . $row["ApellidoP"] . " " . $row["ApellidoM"] .  " " . $row["Email"] .  " " . $row["Nombre_Universidad"] .  " " . $row["Posicion_Organizacion"] ."<br>";
    }
} else {
    echo "Database Empty.";
}
$link->close();
?>



