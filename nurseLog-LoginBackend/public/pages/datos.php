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

    include('../public/back/conexionBD.php');
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$department=$_POST['department'];
	$shift=$_POST['shift'];
    $id=$_POST['id'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
	
	$consulta = "INSERT INTO usuarios (nombres, apellidos, departamento, turno, enfermera_id, contrasena) VALUES ('$firstname','$lastname','$department','$shift','$id', '$password')";
    
	if(ConsultaBD($consulta)){
        echo "Su cuenta ha sido registrada correctamente<br>";
	}
	else
		echo "Error al guardar los datos<br>";

?>

    <br><br>
    <form action="../index.html" method="post">
        <button id='login' type='submit' class='btn'>Log in</button>
    </form>


</body>
</html>