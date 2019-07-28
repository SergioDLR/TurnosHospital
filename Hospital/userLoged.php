<?php
include "partials/header.php";
include "dbUsers.php";
session_start();

if(!isset($_SESSION['nombre'])){
    ?>
    <script>alert ("logeate para continuar");
    window.location.replace("index.php");</script>
    
    <?php
}
?>
<div class="navbar navbar-light bg-light">
    <div class="container">
        <div class="row">
        <div class="col">
         <h3>Bienvenido <?php echo $_SESSION['nombre']; ?></h3>
         </div>
         <div class="col-4-md">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
         </div>
        </div>
    </div>
</div>

<div class="container mt-4">
<div class="row">
    <div class="col-sm-3 text-center">
        <div class="card">
            <div class="card-body">
               <div class="card-title">
                  <h5>Crear Turno</h5>
               </div>
               <a href="agregarTurno.php" class="btn btn-success"><strong>Crear</strong></a> 
            </div>
        </div>
    </div>

    <div class="col-sm-9">
        <h4 class="text-center">Tus turnos</h4>
        <div class="card">
        <div class="card-body">
            <div class="card-title"> 
             <table class="table table-bordered">
              <thead>
                <tr>
                    <th>Dia</th>
                    <th>Mes</th>
                    <th>Hora</th>
                    <th>Especialidad</th>
                    <th>Medico</th>
                </tr>
              </thead>
              <tbody>
                <?php

                    $emailSesion=$_SESSION['email'];
                    $query ="SELECT * FROM turnos WHERE email = '$emailSesion'";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td> <?php echo $row['dia']; ?> </td>
                            <td> <?php echo $row['mes']; ?> </td>
                            <td> <?php echo $row['hora']; ?> </td>
                            <td> <?php echo $row['especialidad']; ?> </td>
                            <td> <?php echo $row['medico']; ?> </td>
                        </tr>
                    <?php } ?>
              
              </tbody>
             </table>
            </div>
        </div>
        </div>
        
    </div>

</div>
</div>



<?php include "partials/footer.php" ?>