<?php
$link = mysqli_connect('localhost', 'root', '', 'comateq080'); // Cambiar

$result = $link->query("SELECT Nombre_Universidad, Nombre_Coordinador FROM problema");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Nombre_Universidad"] . " " . $row["Nombre_Coordinador"] . "<br>";
    }
} else {
    echo "Database Empty.";
}
$link->close();
?>

