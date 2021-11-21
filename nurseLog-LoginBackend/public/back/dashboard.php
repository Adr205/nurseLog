<?php

    session_start();
    include('conexionDB.php');


    //TO-DO: aquí se checa quien es la persona que hizo login y se busca su enfermera_id
    $user = $_SESSION['usuario'];

    //Obtener el departamento de la enfermera que hizo login
    $query = "SELECT departamento FROM usuarios WHERE enfermera_id = '$user'";
    $resultado = hacerQuery($query);
    $row = mysqli_fetch_array($resultado);
    $departamento = $row["departamento"];
    

    $return_arr = array(); /* Guardará la info de cada entrada */


    $query = "SELECT * FROM usuarios u JOIN entradas e ON u.enfermera_id = e.enfermera_id WHERE u.departamento = '$departamento' ORDER BY e.fecha desc";
    $res = hacerQuery($query);
    
    
    if($res == false){
        echo "fail";
        die(mysqli_error);
    } else {
        while($row = mysqli_fetch_array($res)){
            $return_arr[] = array(
                "nombres" => $row['nombres'],
                "apellidos" => $row['apellidos'],
                "fecha" => $row['fecha'],
                "cuerpo" => $row['cuerpo'],
                "departamento" => $row['departamento'],
            );
        }
        echo json_encode($return_arr);
    }
    

?>