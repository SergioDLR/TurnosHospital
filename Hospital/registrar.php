<?php  include "partials/header.php" ?>


<div class="container">
<div class= "row mt-5">
    <div class=col-md-8>
        <div class="card">
         <div class="card-body">
         <div class="card-title">
         <h3><strong>Registro</strong></h3>
         </div>
        <form action="register.php"method="POST">
         <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email" autofocus >
         </div>

         <div class="form-group">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre" >
         </div>

         <div class="form-group">
            <input type="text" class="form-control" name="apellido" placeholder="Apellido" >
         </div>

         <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Contraseña" >
         </div>

         <div class="form-group">
            <input type="text" class="form-control" name="Dni" placeholder="Dni" >
         </div>

         <input type="submit" class="btn btn-success" name="registrar" value="Registrar">
        </form>
        </div>
        </div>
    
    </div>
<div class="col-sm">
   <a href="index.php"><i class="fas fa-arrow-left h4"></i></a>
   </div>
</div>

</div>



<?php include "partials/footer.php" ?>