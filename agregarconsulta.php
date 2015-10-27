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
        <script src="js/jquery.js"></script>
        <script src="js/query-ui.js"></script>
        
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
                        <li><a href="panel.php">Regresar</a></li>
                    </ul>
                </nav>         
            </div>
            
            <div class="container">
                
            </div>
        </header>
        <h1 class="page-header" style="padding-left:30px;">Nueva Consulta</h1>
        
        <form id="formaconsultas" method="post" action="">
            
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2">Nombre Paciente</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="nombrepaciente" id="nombrepaciente">
                            <?php
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">Fecha</label>
                    <div class="col-sm-2 date">
                        <input type="text" name:"fecha" id="fecha">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2">No.Respuetas Cuestionario de Depresión</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="cuestionriodep" id="cuestionriodep">
                            <option value="1">Una</option>
                            <option value="2">Dos</option>
                            <option value="3">Tres</option>
                            <option value="4">Cuatro</option>
                            <option value="5">Cinco</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Velocidad</label>
                    <div class="col-sm-2">
                         <input type="text" class="form-control" id="velocidad">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Presión</label>
                    <div class="col-sm-2">
                         <input type="text" class="form-control" id="presion">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Actividad Física</label>
                    <div class="col-sm-2">
                         <input type="text" class="form-control" id="actividadfisica">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Peso</label>
                    <div class="col-sm-2">
                         <input type="text" class="form-control" id="peso">
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id="enviar" type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
        
    </body>
</html>