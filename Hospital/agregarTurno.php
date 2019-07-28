<?php include "partials/header.php"?>

<div class="container">
<div class = "row">
    <div class="col-lg-6 mt-5">
        <form >

        <div class="form-group">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Especialidad</label>
                </div>
                <select class="custom-select especialidad" id="inputGroupSelect01">
                    <option value="none" selected>Selecciona...</option>
                    <option value="traumatologia">Traumatología</option>
                    <option value="Urologia">Urología</option>
                    <option value="Oftalmologia">Oftalmología</option>
                    <option value="Ginecologia">Ginecología</option>
                    <option value="Dermatología">Dermatología </option>
                </select>
                </div>
        </div>
        <div id="medicos"></div>
            <div class="form-group">
              <input type='text' value = "Fecha" class="form-control w-50" id="disabled-days" data-position="right top" placeholder="Fecha del turno" /> 
            </div>
          <div id="horarios"></div>
          <input class="btn btn-primary" type="submit" id="subirTurno" value="Crear turno">
        </form>
    </div>
    <div class="col-lg-6 mt-5">
   <a href="userLoged.php"> <i class="fas fa-arrow-left"></i></a>
    </div>
</div>
</div>

<script src="assets/js/especialistas.js"></script>
<script src="assets/js/datepicker.js"></script>
<?php include "partials/footer.php"  ?>

