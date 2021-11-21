<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>


<?php

    session_start();
    include('conexionDB.php');

    $id=$_POST['id'];
    $password=$_POST['password'];

	$consulta = "SELECT * FROM usuarios";
	
	$resultado = hacerQuery($consulta);
	
	if($resultado == FALSE)
		echo "fallo conexión<br>";


    $cont=0;
    while($row = mysqli_fetch_array($resultado)) { 
        if ($id == $row['enfermera_id'] && $password == $row['contrasena']) {
            echo "Su número de registro y contraseña son correctos<br>";
            $_SESSION['usuario'] = $id;
            $cont++;
            echo "<br><br> <form action='../pages/dashboard.html' method='post'> <button id='dashboard' type='submit' class='btn'>Ingresar al sistema</button> </form>";
        }
    }
    if ($cont == 0) {
        echo "Su número de registro y/o contraseña son incorrectos<br>";
        echo "<br><br> <form action='../../index.html' method='post'> <button id='index' type='submit' class='btn'>Volver a intentar</button> </form>";
    }

?>

</body>
</html>