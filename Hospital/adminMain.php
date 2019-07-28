<?php
include "partials/header.php";
include "dbUsers.php"
?>





<div class="col-sm-12 mt-3">
    
        <h4 class="text-center"><a href="logout.php"> <i class="fas fa-arrow-left"></i></a>Turnos Creados </h4>
        <div class="card">
        <div class="card-body">
            <div class="card-title"> 
             <table class="table table-bordered">
              <thead>
                <tr>
                    <th>Dia</th>
                    <th>Mes</th>
                    <th>Hora</th>
                    <th>Año</th>
                    <th>Especialidad</th>
                    <th>Medico</th>
                    <th>Email del parciente</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $query ="SELECT * FROM turnos ";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td> <?php echo $row['dia']; ?> </td>
                            <td> <?php echo $row['mes']; ?> </td>
                            <td> <?php echo $row['hora']; ?> </td>
                            <td> <?php echo $row['ano']; ?> </td>
                            <td> <?php echo $row['especialidad']; ?> </td>
                            <td> <?php echo $row['medico']; ?> </td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                    <?php } ?>
              
              </tbody>
             </table>
            </div>
        </div>
        </div>
        
    </div>

    <?php include "partials/footer.php"; ?>
    