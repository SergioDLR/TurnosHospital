<?php
include "dbUsers.php";
session_start();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email ='$email' and password = '$password'";

    $result = mysqli_query($conn, $query);
   
    if(mysqli_num_rows($result) == 1 ){
       
        
       $user = mysqli_fetch_array($result);
       $mail = $user['email'];
       $contra = $user['password'];
       $id = $user['id'];
       $nombre = $user['nombre'];
       $apellido =$user['apellido'];
       $dni =$user['dni'];

       $_SESSION['email'] = $mail;
       $_SESSION['nombre'] = $nombre;
       $_SESSION['apellido'] = $apellido;
       $_SESSION['dni'] = $dni;


       if($mail == "admin" && $contra == "admin"){
           header("location:adminMain.php");
       }else{
           header("location:userLoged.php");
       }
    } else{
       header("location: index.php");
    }
}
?>