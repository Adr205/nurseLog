<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title>Register</title>
</head>

<body>


<?php

    session_start();
    include('../public/back/conexionBD.php');

    $id=$_POST['id'];
    $password=$_POST['password'];

	$consulta = "SELECT * FROM usuarios";
	
	$resultado = consultaBD($consulta);
	
	if($resultado == FALSE)
		echo "fallo conexión<br>";

    while($row = mysqli_fetch_array($resultado)) { 
        if ($id == $row['enfermera_id'] && $password == $row['contrasena']) {
            echo "Su número de registro y contraseña son correctos<br>";
            $_SESSION['usuario'] = $id;

            echo "<br><br> <form action='dashboard.html' method='post'> <button id='dashboard' type='submit' class='btn'>Ingresar al sistema</button> </form>";
        }
        else {
            echo "Su número de registro y/o contraseña son incorrectos<br>";
            echo "<br><br> <form action='../index.html' method='post'> <button id='index' type='submit' class='btn'>Volver a intentar</button> </form>";

        }
    }

?>

</body>
</html>