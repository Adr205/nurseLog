<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>

<?php

include('conexionDB.php');
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$department=$_POST['department'];
	$shift=$_POST['shift'];
    $id=$_POST['id'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

	
	$consulta = "INSERT INTO usuarios (enfermera_id, contrasena, nombres, apellidos, departamento, turno) VALUES ('$id', '$password', '$firstName','$lastName','$department','$shift')";
	if (hacerQuery($consulta)) {
        echo "Su cuenta ha sido registrada correctamente<br>";
	} else {
		echo "Error al guardar los datos<br>";
    }

?>

    <br><br>
    <form action="../../index.html" method="post">
        <button id='login' type='submit' class='btn'>Log in</button>
    </form>


</body>
</html>