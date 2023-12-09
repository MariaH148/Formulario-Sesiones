<?php  

include_once('../config/config.php');
include('registropacientes.php');

if(isset($_POST) && !empty($_POST)){
    $p = new registropacientes();

    $save=$p-> save($_POST);
    if ($save){
        $mensaje = '<div class="alert alert-success">Sesión agendada</div>';
    }else{
        $mensaje = '<div class="alert alert-danger">Error al registar</div>';

}

}

?>  

<DOCTYPE html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendar sesión</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <?php include('../menu.php') ?>
        <div class="container">
        <?php 
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>  
        <h2 class="text-center mb-2">Agendar sesión</h2>
        <form method="POST" enctype="multipart/form-data">

        <div class=" row mb-2">
            <div class=" col">
                <input type="text" name="edad" id="edad" placeholder=" Edad del paciente" class="form-control"> 
            </div>
            <div class=" col">
            <input type="text" name="nombre" id="nombre" placeholder=" Nombre del paciente" class="form-control"> 
            </div>
        </div>
        <div class=" row mb-2">
            <div class=" col">
                <input type="text" name="correo" id="correo" placeholder="Correo del paciente" class="form-control"> 
            </div>
            <div class=" col">
            <input type="text" name="celular" id="celular" placeholder=" Celular del paciente" class="form-control"> 
            </div>
        </div>

        <div class=" row mb-2">
            <div class=" col">
                <textarea name="motivodeconsulta" id="motivodeconsulta" placeholder=" Motivo de consulta del paciente" class="form-control"></textarea>
            </div>
            <button class="btn btn-success">Agendar</button>

        </form>

        </div> 
    </body>
    </html>