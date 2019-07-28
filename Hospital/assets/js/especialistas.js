var isReady = false;
var especialidades = "empty";;
var medico = "empty";
var dia = "empty";
var mes = "empty";
var ano = "empty";
var hora;
var horarios;
var horariosjq;

horarios = document.getElementById("horarios");
horariosjq = $("#horarios");
    $(".especialidad").change(function(){
        var medicos =$("#medicos");
        especialidades = $(".especialidad").val();

        document.getElementById("medicos").innerHTML  = " ";
        

        if(especialidades === "traumatologia"){
            medicos.append(`<div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Medicos</label>
            </div>
            <select class="custom-select Medicos" id="inputGroupSelect01">
                <option value="none" selected>Selecciona...</option>
                <option value="Juanito">Juanito Correa</option>
                <option value="Juarez">Juarez Celman</option>
                <option value="Sergio">Sergio Lopez</option>
            </select>
            </div>
    </div>`);
            
        }

        if(especialidades === "Urologia"){
            medicos.append(`<div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Medicos</label>
            </div>
            <select class="custom-select Medicos" id="inputGroupSelect01">
                <option value="none" selected>Selecciona...</option>
                <option value="perez">Enzo Perez</option>
                <option value="Francesco">Francesco Totti</option>
                <option value="Angelez">Angelez Lopez</option>
            </select>
            </div>
    </div>`);
            
        }


        if(especialidades === "Ginecologia"){
            medicos.append(`<div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Medicos</label>
            </div>
            <select class="custom-select Medicos" id="inputGroupSelect01">
                <option value="none" selected>Selecciona...</option>
                <option value="Maria">Maria Daniela </option>
                <option value="Ana">Ana Frank</option>
                <option value="Lorena">Lorena Ipsun</option>
            </select>
            </div>
    </div>`);
            
        }

        if(especialidades === "Oftalmologia"){
            medicos.append(`<div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Medicos</label>
            </div>
            <select class="custom-select Medicos" id="inputGroupSelect01">
                <option value="none" selected>Selecciona...</option>
                <option value="Ariel">Ariel Didi </option>
                <option value="Bruno">Bruno Massa</option>
                <option value="Casandra">Casandra Lopez</option>
            </select>
            </div>
    </div>`);
            
        }

        if(especialidades === "Dermatología"){
            medicos.append(`<div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Medicos</label>
            </div>
            <select class="custom-select Medicos" id="inputGroupSelect01">
                <option value="none" selected>Selecciona...</option>
                <option value="peruzi">Andrez Peruzi</option>
                <option value="Mauricio">Mauricio Massa</option>
                <option value="Andres">Andres Guardado</option>
            </select>
            </div>
    </div>`);
            
        }

        $(".Medicos").change(function(){
            medico = $(".Medicos").val();
            enviar();
        });
        enviar();

    });


    

$('#disabled-days').datepicker({
    onSelect(formattedDate, date, inst){
        var mytxt = date.toString();
        var splited = mytxt.split(' ');
        console.log(splited);
        dia = splited[2];
        mes = splited[1];
        ano = splited[3];
        enviar();
    }
    
});



function enviar(){
    if(especialidades != "empty" && dia != "empty" && mes != "empty" && ano != "empty" && medico != "empty" ){
        horarios.innerHTML =" ";
        horariosjq.append(`<div class="input-group-prepend">
        <label class="input-group-text"  for="inputGroupSelect02">Horarios Disponibles</label>
      </div> 
  <select class="custom-select Disponibles mb-3" id="inputGroupSelect02">
  <option value="empty" class="dentro">Selecciona un horario...</option>
  </select>`);
        console.log("fecheando");
        $.ajax({
            url: 'agregarTurnito.php',
            type: 'POST',
            data: {dia,mes,ano,medico,especialidades},
            success:function(response){
                var horariosDisponibles = $("#inputGroupSelect02");
                console.log(response.length);    
                var respuesta2= JSON.parse(response);
                var arregloHoras = [];
                    respuesta2.forEach(respuesta2 => {
                    arregloHoras = respuesta2.hora;
                });
                    if(arregloHoras.length == 0){
                        console.log(arregloHoras.length);
                    for(i=8;i<18;i++){
                            horariosDisponibles.append(`<option value="${i}">${i}</option>`);
                     }
                    }else{
                        for(i=8;i<18;i++){
                            if(arregloHoras != i){
                                horariosDisponibles.append(`<option value="${i}">${i}</option>`);
                            }
                         } 
                    }
            },
          });
          isReady = true;
    }else{
        console.log("non fetching");
    }
}

function ready(){
  
    if(isReady){
        hora = $("#inputGroupSelect02").val();
        console.log(hora);
        if(hora != "empty"){  
        $.ajax({
            url: 'addTurno.php',
            type: 'POST',
            data: {dia,mes,ano,medico,especialidades,hora},
            success:function(response){
             console.log(response);
             if(response == "aded"){
                 alert("Turno Agregado Correctamente");
                window.location.replace("userLoged.php");
             }
            }

        });
    }
}
}

$("#subirTurno").click(function(e){
    e.preventDefault();
    ready();
});