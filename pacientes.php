<?php
session_start();
$valido = $_SESSION['valido'];
if($valido != "1"){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <title>Paciente</title>
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
                        <li><a href="listapacientes.php">Regresar</a></li>

                    </ul>
                </nav>         
            </div>
            
            <div class="container">
                
            </div>
        </header>
        <table>
            <thead><th>Rubro</th><th>Información</th>
            <tr>
                <td>Clave del Paciente:</td>
                <td> </td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td></td>
            </tr>
            <tr>
                <td>Edad:</td>
            </tr>
            <tr>
                <td> Sexo:</td>
            </tr>
            <tr>
                <td>Delegación:</td>
            </tr>
            <tr>
                <td>E-Mail:</td>
            </tr>
            <tr>
                <td>Teléfono:</td>
            </tr>
            <tr>
                <td>Celular:</td>
            </tr>
            <tr>
                <td>Fecha de Registro:</td>
            </tr>
        </table>
    </body>
</html>