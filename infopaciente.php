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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="css/jquery-ui.css">
        <script type="text/javascript" src="js/jquery.js"></script>
         <script src="js/chartsjs/Chart.js"></script>
        <script type="text/javascript" src="js/infopaciente.js"></script>
        <title>Perfil del paciente</title>
    </head>
    <body onload="load('<?php echo $_GET['id']; ?>');">
        <header class="navbar navbar-inverse navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <a href="panel.php" class="navbar-brand">Proyecto SANA</a>
                </div>        
            </div>
        </header>
        
        <ol class="breadcrumb">
          <li><a href="panel.php">Home</a></li>
          <li><a href="listapacientes.php">Métricas</a></li>
          <li class="active"><a href="#">Información del Paciente</a></li>
         
        </ol>
        
        <h1 class="page-header" style="padding-left:30px;">Información del Pacinete</h1>
        <div class="container">
            
            <div class="col-sm-12 col-height">
                <img src="images/perfil.png" class="img-responsive center-block" width="70"/>
                <h3 class="text-center" id="nombre">Nombre</h3>
                <table class="table table-striped">
                    <tr>
                        <td><strong>Clave</strong></td>
                        <td class="glyphicon glyphicon-list-alt" id="clave"></td>
                        <td><strong>Fecha de Registro</strong></td>
                        <td class="glyphicon glyphicon-calendar" id="fecha"></td>
                    </tr>
                    <tr>
                        <td><strong>Edad</strong></td>
                        <td class="glyphicon glyphicon-time" id="edad"></td>
                        <td><strong>Sexo</strong></td>
                        <td class="glyphicon glyphicon-user" id="sexo"></td>
                    </tr>
                    <tr>
                        <td><strong>Escolaridad</strong></td>
                        <td class="glyphicon glyphicon-education" id="escolaridad"></td>
                        <td><strong>Delegación</strong></td>
                        <td class="glyphicon glyphicon-map-marker" id="delegacion"></td>
                    </tr>
                    <tr>
                        <td><strong>Teléfono</strong></td>
                        <td class="glyphicon glyphicon-phone-alt" id="telefono"></td>
                        <td><strong>E-mail</strong></td>
                        <td class="glyphicon glyphicon-inbox" id="mail"></td>
                    </tr>
                </table>    
            </div>
            
            <br><br>
            <h3>Promedio de Criterios de fragiliad</h3>
            <table class="table table-condensed">
               <thead>
                    <tr>
                        <th class="text-center">Cuest. Depresión</th>
                        <th class="text-center">Velocidad</th>
                        <th class="text-center">Presión</th>
                        <th class="text-center">Act. Física</th>
                        <th class="text-center">Peso</th>
                    </tr>
                </thead>
                <tbody id="promedios" class="text-center">
                    <tr>
                        <td id="cuestionariop"></td>
                        <td id="velocidadp"></td>
                        <td id="presionp"></td>
                        <td id="fisicap"></td>
                        <td id="pesop"></td>
                    </tr>
                </tbody>
            </table>
            
            <br>
            <h3>Historial de consultas</h3>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Cuest. Depresión</th>
                        <th class="text-center">Velocidad</th>
                        <th class="text-center">Presión</th>
                        <th class="text-center">Act. Física</th>
                        <th class="text-center">Peso</th>
                    </tr>
                </thead>
                <tbody id="historial"  >
                   
                </tbody>
            </table>

            <br>
            <h3>Gráficas de Desempeño</h3>
            <div class="container">
                <div class="row  row-eq-height">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h4>Cuestionarios vs Tiempo</h4>
                        <hr>
                        <canvas id="grafica1" width="300" height="300"></canvas>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h4>Velocidad vs Tiempo</h4>
                        <hr>
                        <canvas id="grafica2" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row  row-eq-height">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h4>Presión vs Tiempo</h4>
                        <hr>
                        <canvas id="grafica3" width="300" height="300"></canvas>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h4>Actividad Física vs Tiempo</h4>
                        <hr>
                        <canvas id="grafica4" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row  row-eq-height">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h4>Peso vs Tiempo</h4>
                        <hr>
                        <canvas id="grafica5" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>