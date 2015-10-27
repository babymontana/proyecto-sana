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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/chartsjs/Chart.js"></script>
        <script type="text/javascript" src="js/estadisticas.js"></script>
        <title>Estadísticas</title>
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
                        <li><a id="genero" href="#">Edad/Género </a></li>
                        <li><a id="region" href="#">Región</a></li>
                        <li><a id="consultas" href="#">Consultas</a></li>
                        <li><a href="panel.php">Regresar</a></li>
                    </ul>
                </nav>         
            </div>
            
            
        </header>
        <div class="container">
                <div class="row">
                    <div class="col-sm-3" id="metricas">
                        <h3> Promedio de edad</h3>
                        <hr>
                        <ul class="nav nav-stacked">
                            <li><a id="edadHombre" href="#">Hombre</a></li>
                            <li><a id="edadMujer" href="#">Mujer</a></li>
                            <li><a id="edadAmbos" href="#">Ambos</a></li>
                            
                        </ul>
                        <h3> Género</h3>
                        <hr>
                        <ul class="nav nav-stacked">
                            <li><a id="comparativaGenero" href="#">Comparativa</a></li>
                            
                        </ul>
                        
                        <h3> Leyenda</h3>
                        <hr>
                      <ul class="list-group" id="leyenda">
                        <li class="list-group-item"><canvas width="10" height="10" style="background: #F7464A;"></canvas> Hombre</li>
                        <li class="list-group-item"><canvas width="10" height="10" style="background:#46BFBD;"></canvas> Mujer</li>
                      </ul>
                        
                    </div>
                    <div class = "col-sm-9" id="graficas">
                        <h3 id="titleGrafica"> Gráfica de Género</h3>
                        <hr>
                        <canvas id="grafica" width="600" height="500"></canvas>
                    </div>
                </div>
                <hr>
        </div>

       
    </body>
</html>