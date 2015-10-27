<?php
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){
    header('Location: panel.php');
}


?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/index.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Proyecto SANA</title>
    </head>
    <body> 
     <header class="navbar navbar-inverse navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand"> Proyecto SANA</a>
                    
                </div>
                
            </div>
             <div class="alert alert-danger" id="alerta" style="display:none"></div>
            <div class="jumbotron" style="padding-left: 30%;">
              <h1>Bienvenido</h1>
              <p>Login</p>
             
              <form style="width:30%;">
                  <div class="form-group" >
                      <label for="clave">Clave</label>
                <input type="text" class="form-control" id="clave" placeholder="Clave">
                  </div>
                  
                  <div class="form-group">
                      <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>
              </form>
              <p><a class="btn btn-primary btn-lg" href="#" id="entrar" role="button">Entrar</a></p>
              
            </div>
        </header>
        
        
    </body>
</html>