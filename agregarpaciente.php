<?php
session_start();
$valido = $_SESSION['valido'];
if($valido != "1"){
    header('Location: index.php');
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/agregarPaciente.js"></script>
        <title>Agregar Paciente</title>
    </head>
    <body>
        <header class="navbar navbar-inverse navbar-static-top" role="banner">
           
            <div class="container">
                <div class="navbar-header">
                    <a href="panel.php" class="navbar-brand">Proyecto SANA</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <nav class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        

                    </ul>
                </nav>         
            </div>
            
        </header>
        
        <ol class="breadcrumb">
          <li><a href="panel.php">Home</a></li>
          <li class="active"><a href="#">Agregar Paciente</a></li>
         
        </ol>
         <h1 class="page-header" style="padding-left:30px;">Agregar Paciente</h1>
        <p style="display:none;" id="error" class="bg-danger">Porfavor llene los campos obligatorios *</p>

        <form id="forma" >
            
            <div class="form-group">
                <p>* campos obligatorios</p>
                <div class="row">
                    <div class="col-xs-4">
                        <label class="control-label">Nombre *</label>
                        <input type="text" class="form-control" name="nombre" id="nombre"/>
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Apellido Paterno *</label>
                        <input type="text" class="form-control" name="apellido_P" id="apellido_P" />
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Apellido Materno *</label>
                        <input type="text" class="form-control" name="apellido_M" id="apellido_M"  />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-4">
                        <label  class="control-label">Fecha de Naciemiento *</label>
                        <input   type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" />
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Sexo *</label>
                        <select class="form-control" name="sexo" id="sexo">
                            <option value="H">Hombre</option>
                            <option value="M">Mujer</option>
                        </select>
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email" />
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="control-label">Delegación *</label>
                        <select class="form-control" name="delegacion" id="delegacion">

                        <option value="Álvaro Obregón ">Álvaro Obregón</option>
                        <option value="Azcapotzalco">Azcapotzalco</option>
                        <option value="Benito Juárez">Benito Juarez</option>
                        <option value="Coyoacán">Coyoacan</option>
                        <option value="Cuajimalpa">Cuajimalpa</option>
                        <option value="Cuauhtémoc">Cuauhtemoc</option>
                        <option value="Gustavo A. Madero">Gustavo A. Madero</option>
                        <option value="Iztacalco">Iztacalco</option>
                        <option value="Iztapalapa">Iztapalapa</option>
                        <option value="Magdalena Contreras">Magdalena Contreras</option>
                        <option value="Miguel Hidalgo">Miguel Hidalgo</option>
                        <option value="Milpa Alta">Milpa Alta</option>
                        <option value="Tláhuac">Tlahuac</option>
                        <option value="Tlalpan">Tlalpan</option>
                        <option value="Venustiano Carranza">Venustiano Carranza</option>
                        <option value="Xochimilco">Xochimilco</option>


                        </select>
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" />
                    </div>

                    <div class="col-xs-4">
                        <label class="control-label">Celular</label>
                        <input type="text" class="form-control" name="celular" id="celular" />
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-4 selectContainer">
                        <label class="control-label">Escolaridad *</label>
                        <select class="form-control" name="FK_escolaridad" id="FK_escolaridad">
                            <option value="1">Primaria</option>
                            <option value="2">Secundaria</option>
                            <option value="3">Técnico Medio</option>
                            <option value="4">Universitario</option>
                            <option value="5">Pre-Universitario</option>
                        </select>
                    </div>
                    
                    <div class="col-xs-4 selectContainer">
                        <label class="control-label">Situaciones *</label>
                        <select class="form-control" name="FK_situaciones" id="FK_situaciones">
                            <option value="1">Autonomo</option>
                            <option value="2">Depende de terceros</option>
                            <option value="3">Completamente dependiente</option>
                            <option value="4">Dependiente Ocacional</option>
                            <option value="5">Asistencia Permanente</option>
                        </select>
                    </div>
                    
                    

                </div>
            </div>

    
</form>
<button id="enviar" class="btn btn-primary">Enviar</button>


<div class="modal" id="mensaje" style="display: none;">
              
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title"> Exito</h1>
      </div>
      <div class="modal-body" style="text-align:center;">
    <h3>El paciente se agrego exitosamente</h3>
       <h3>Matricula : <span id="matriculaSpan"></span></h3>
       <p>¿Desea agregar otro paciente?</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" style="width:100px;" id="cancelar">Cancelar</button>
         <button  class="btn btn-primary" style="width:100px;" id="aceptar">Aceptar</button>
        
      </div>
    </div>
  </div>
</div>

        
    </body>
</html>