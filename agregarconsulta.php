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
        <link rel="stylesheet" href="css/consultas.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.numeric.js"></script>
        <script type="text/javascript" src="js/consulta.js"></script>
        <script type="text/javascript" src="js/dates.js"></script>
        <title>Nueva Consulta</title>
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
          <li class="active"><a href="#">Agregar Consulta</a></li>
         
        </ol>
        
        <h1 class="page-header" style="padding-left:30px;">Nueva Consulta</h1>
        <p style="display:none;" id="error" class="bg-danger">Por favor llene los campos obligatorios *</p>
        <p style="display:none;" id="error2" class="bg-danger">Uno o mas campos estan fuera de rango</p>
        <form id="formaconsultas" >
            <div class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-6">
                        <label class="control-label">Búsqueda</label>
                        <input placeholder="Clave / Nombre / Apellidos" type="text" class="form-control in" name="busqueda" id="busqueda"/>
                            </select>
                        <br> 
                        <br>
                        <p>Clave: <span id="clave_label"></span></p>
                        <br>
                        <p>Nombre: <span id="nombre"></span></p>
                        <br>
                        <p>Apellidos: <span id="apellidos"></span></p>
                        <input type="text" name="clave" id="clave" style="display:none;"/>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label col-sm-4">No.Respuetas Cuestionario de Depresión*</label>
                            <div class="col-sm-4">
                                <select class="form-control" disabled="disabled" name="cuestionriodep" id="cuestionriodep">
                                    <option value="1">Una</option>
                                    <option value="2">Dos</option>
                                    <option value="3">Tres</option>
                                    <option value="4">Cuatro</option>
                                    <option value="5">Cinco</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Velocidad*</label>
                            <div class="col-sm-4">
                                 <input type="text" class="form-control" disabled="disabled"  placeholder="0.00 - 0.50" id="velocidad" name="velocidad">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Presión*</label>
                            <div class="col-sm-4">
                                 <input type="text" class="form-control" disabled="disabled"  placeholder="50 - 170" id="presion" name="presion">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Actividad Física*</label>
                            <div class="col-sm-4">
                                 <input type="text" class="form-control" disabled="disabled"  placeholder="100 - 1800" id="actividadfisica" name="actividadfisica">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Peso en Kg*</label>
                            <div class="col-sm-4">
                                 <input type="text" class="form-control" disabled="disabled"  placeholder="40 - 180" id="peso" name="peso">
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
                
                </form>
                
                 <button style="margin-left: 120;" id="enviar"  disabled="disabled"  class="btn btn-primary">Enviar</button>
        
        
       <div class="modal" id="mensaje" style="display: none;">
              
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title"> Exito</h1>
      </div>
      <div class="modal-body" style="text-align:center;">
    <h3>La consulta se agrego exitosamente</h3>
      
       <p>¿Desea agregar otra constulta?</p>
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