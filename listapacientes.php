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
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/metricas.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/metricas.js"></script>
        <title>Métricas</title>
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
          <li class="active"><a href="#">Métricas</a></li>
         
        </ol>
        
        <h1 class="page-header" style="padding-left:30px;">Mis pacientes</h1>
        <ul class="nav nav-pills" >
          <li><h4>Fecha: </h4></li>
          <li><input type="text" class="form-control parametro" id="desde" placeholder="Desde"></li>
          <li><input type="text" class="form-control parametro" id="hasta" placeholder="Hasta"></li>
          <li>
              <select class="form-control parametro"  name="cuestionriodep" id="cuestionriodep">
                                    <option value="0">Cuestionario Depresión</option>
                                    <option value="1">Una</option>
                                    <option value="2">Dos</option>
                                    <option value="3">Tres</option>
                                    <option value="4">Cuatro</option>
                                    <option value="5">Cinco</option>
            </select>
        
        </ul>
         <ul class="nav nav-pills">
        <li>  <input class="slide parametro" type="text" value="velocidad : 0-0.5" id="velocidad" readonly >
        <div id="slider-velocidad"></div></li>    
        </li>
        <li>  <input class="slide parametro" type="text" value="presion : 50-170" id="presion" readonly >
        <div id="slider-presion"></div></li>    
        </li>
         <li>  <input class="slide parametro" type="text" value="Actividad Física : 100-1800" id="actividad"  readonly >
        <div id="slider-actividad"></div></li>    
        </li>
         <li>  <input class="slide parametro" type="text" value="Peso en Kg : 40-180" id="peso" readonly >
        <div id="slider-peso"></div></li>    
        </li>
        
         </ul>
        <div class="table-responsive" id="tablapacientes"> 
            <table class="table table-hover" style="text-align:center;">
                <thead>
                    <tr>
                        <th>Clave Paciente</th>
                        <th>Nombre Paciente</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Úlima Consulta</th>
                        <th>Cuestionario de Depresión</th>
                        <th>Velocidad</th>
                        <th>Presión</th>
                        <th>Actividad Física</th>
                        <th>Peso</th>
                    </tr>
                </thead>
                <tbody id="pacientes">
                   
                </tbody>
            </table>
        
        </div>
        
        
    </body>
</html>