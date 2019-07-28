<?php
include "dbUsers.php";

    $especialista = $_POST['medico'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];


if(!empty($especialista) && !empty($dia) && !empty($mes) && !empty($ano)){
    
        $query = "SELECT * FROM turnos WHERE medico = '$especialista' and dia = '$dia' and mes = '$mes' and ano ='$ano'";
        $result = mysqli_query($conn, $query);   
        $json = array();
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'medico' => $row['medico'],
                'dia' => $row['dia'],
                'mes' => $row['mes'],
                'ano' => $row['ano'],
                'hora' => $row['hora']
            );
        };
        $jsonString = json_encode($json);
        echo $jsonString;
}






?>