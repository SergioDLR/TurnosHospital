<?php
include "dbUsers.php";
session_start();


if(isset($_POST['registrar'])){

    $mail = $_POST['email'];

    $query = "SELECT * FROM users WHERE email ='$mail'";

    $result = mysqli_query($conn, $query);
    

    if(mysqli_num_rows($result) == 1 ){
        header("location:registrar.php");
    }else{
        $mail = $_POST['email'];
        $password = $_POST['password'];
        $dni = $_POST['Dni'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $queryacc = "INSERT INTO users (email,password,dni,nombre,apellido) values('$mail','$password','$dni','$nombre','$apellido')";


        $result = mysqli_query($conn, $queryacc);

        if(isset($result)){
           
            $_SESSION['email'] = $mail;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellido'] = $apellido;
            $_SESSION['dni'] = $dni;


            header("location:userLoged.php");
        }
    }

}


?>