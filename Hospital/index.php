<?php include "partials/header.php";?>

<div class="container">
    <div class="row mt-5 ">
        <div class="col-sm">
         <div class="card p-5">
            <div class="card-body">
              <div class="card-title h2">Aun no tienes cuenta?</div>
              <button  class="btn btn-primary"><a class="text-white" href="registrar.php">Registrate aqui!</a></button>  
              </div>
            </div>
         </div>
        <div class="col-sm">
         <div class="card p-2">
            <div class="card-body">
             <div class="card-tile">Ya tienes cuenta?</div>
              <strong>Ingresa por aqui</strong>
                <form action="login.php" method="POST">
                  <div class="form-group mt-2">
                    <input type="text" class="form-control" name="email" placeholder="Email" autofocus>
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" class="form-control" placeholder="Contraseña">
                  </div>
                  <input type="submit" class="btn btn-success" name="login" value="logear">
                </form>
            </div>
         </div>
        </div>
    </div>
</div>

<?php include "partials/footer.php" ?>