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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/panel.js"></script>
        <title>Panel de Consultas</title>
    </head>
    <body>
        <header class="navbar navbar-inverse navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand"> Proyecto SANA</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <nav class="collapse navbar-collapse navHeaderCollapse">
                    <p></p>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Bienvenido <? echo $_SESSION['nombre']; ?></a></li>
                        <li><a href="recursos/services/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>         
            </div>
        </header>
        
        <ol class="breadcrumb">
          <li class="active"><a href="panel.php">Home</a></li>
    </ol>
        
        <div  id="dashboard" class="col-xs-12 col-sm-12 col-md-12 ">
          
		  <h1 class="page-header">Panel</h1>

          <div class="row placeholders panel">
            <div class="col-xs-6 col-sm-6 col-md-2 placeholder text-center">
               <a href="agregarpaciente.php"><img src="images/agregar.png"class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail" ></a>
              <h4>Agregar Paciente</h4>
              <span class="text-muted">Nuevos Pacientes</span>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-2 placeholder text-center">
               <a href="editarpaciente.php"><img src="images/editar.png"class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail" ></a>
              <h4>Editar Paciente</h4>
              <span class="text-muted">Modificación de datos de pacientes</span>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-2 placeholder text-center">
               <a href="agregarconsulta.php"><img src="images/consulta.png" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Consulta</h4>
              <span class="text-muted">Nuevo Registro de Consulta</span>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-2 placeholder text-center">
              <a href="estadisticas.php"><img src="images/estadisticas.png" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Estadísticas</h4>
              <span class="text-muted">Gráficas</span>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-2 placeholder text-center">
              <a href="listapacientes.php"><img src="images/pacientes.png" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Métricas</h4>
              <span class="text-muted">Métricas de mis pacientes</span>
            </div>
            
          </div>
        </div>
    </body>
</html>