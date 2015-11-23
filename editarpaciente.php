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
        <script type="text/javascript" src="js/editarPaciente.js"></script>
        <title>Editar Paciente</title>
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
            
            <div class="container">
                
            </div>
        </header>
        
        <ol class="breadcrumb">
          <li><a href="panel.php">Home</a></li>
          <li class="active"><a href="#">Editar Paciente</a></li>
         
        </ol>
        
         <h1 class="page-header" style="padding-left:30px;">Editar Paciente</h1>
        <p style="display:none;" id="error" class="bg-danger">Porfavor llene los campos obligatorios *</p>

        
            
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12">
                        <label class="control-label">Busqueda</label>
                        <input placeholder="Clave / Nombre / Apellidos" type="text" class="form-control in" name="busqueda" id="busqueda"/>
                    </div>
                    <p id="mensaje" style="color:red; display:none;">No se encontro ninguna clave que coincida</p>
                </div>
            </div>
            <form id="forma">
            <div class="form-group">
                 <p>Clave: <span id="clave_label"></span><br><br
                <p>Nombre: <span id="nombre"></span>
            <br><br>Apellidos: <span id="apellidos"></span></p>
            <input type="text" name="PK_paciente" id="PK_paciente" style="display:none;"/>
                <div class="row">
                    <div class="col-xs-4">
                        <label class="control-label">E-Mail</label>
                        <input disabled="disabled" type="text" class="form-control" name="email" id="email" />
                    </div>
                    <div class="col-xs-4">
                        <label class="control-label">Delegación *</label>
                        <select disabled="disabled" class="form-control" name="delegacion" id="delegacion">

                        <option value="Álvaro Obregón">Alvaro Obregon</option>
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
                        <input disabled="disabled" type="text" class="form-control" name="telefono" id="telefono" />
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
               
                    <div class="col-xs-4">
                        <label class="control-label">Celular</label>
                        <input disabled="disabled" type="text" class="form-control" name="celular" id="celular" />
                    </div>
             
                    <div class="col-xs-4 selectContainer">
                        <label class="control-label">Escolaridad *</label>
                        <select disabled="disabled" class="form-control" name="FK_escolaridad" id="FK_escolaridad">
                            <option value="1">Primaria</option>
                            <option value="2">Secundaria</option>
                            <option value="3">Técnico Medio</option>
                            <option value="4">Universitario</option>
                            <option value="5">Pre-Universitario</option>
                        </select>
                    </div>
                    
                    <div class="col-xs-4 selectContainer">
                        <label class="control-label">Situaciones *</label>
                        <select  disabled="disabled" class="form-control" name="FK_situaciones" id="FK_situaciones">
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
<button disabled="disabled" id="enviar" class="btn btn-primary">Enviar</button>

        
    </body>
</html>