<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Entry</title>
</head>

<body>


<?php

    session_start();
    include('conexionDB.php');

    $id=$_SESSION['usuario'];
    $entry=$_POST['newEntry'];
    $date= date_create('now', timezone_open("America/Mexico_City"))->format('Y-m-d H:i:s');

	$consulta = "INSERT INTO entradas (enfermera_id, fecha, cuerpo) VALUES ('$id', '$date', '$entry')";
	
	if (hacerQuery($consulta)) {
        echo "Su entrada ha sido registrada correctamente<br>";
    } else {
        echo "Error al guardar los datos<br>";
    }
    echo "<br><br> <form action='../pages/dashboard.html' method='post'> <button id='dashboard' type='submit' class='btn'>Ir al dashboard</button> </form>";
?>

</body>
</html>