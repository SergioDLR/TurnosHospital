<?php
include "dbUsers.php";
session_start();

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$hora = $_POST['hora'];
$ano = $_POST['ano'];
$medico = $_POST['medico'];
$especialidad = $_POST['especialidades'];
$email = $_SESSION['email'];

if(isset($dia)){
    $query = "INSERT INTO turnos (dia,mes,hora,especialidad,medico,email,ano) values ('$dia','$mes','$hora','$especialidad','$medico','$email','$ano')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "aded";
    }
}



?>