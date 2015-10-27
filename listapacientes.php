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
        <h1 class="page-header" style="padding-left:30px;">Mis pacientes</h1>
        
        <div class="table-responsive" id="tablapacientes"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Clave Paciente</th>
                        <th>Nombre Paciente</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha de Consulta</th>
                        <th>Cuestionario de Depresión</th>
                        <th>Velocidad</th>
                        <th>Presión</th>
                        <th>Actividad Física</th>
                        <th>Peso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A01001</td>
                        <td>Cuchus</td>
                        <td>Díaz</td>
                        <td>Hernández</td>
                        <td>2014-08-09</td>
                        <td>4</td>
                        <td>0.22</td>
                        <td>122</td>
                        <td>2231</td>
                        <td>63.3</td>
                    </tr>
                </tbody>
            </table>
        
        </div>
        
        
    </body>
</html>