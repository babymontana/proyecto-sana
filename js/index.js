$(document).ready(function(){
    
    
  $("#entrar").click(function(){
      
      var clave = $("#clave").val();
      var password = $("#password").val();
      
               if(clave.trim() !="" && password.trim() !=""){
             	$.post("recursos/services/login.php",
				{clave:clave,password:password},
				function(res){
					var datos = JSON.parse(res);
					var valido = datos.response;
					
					if(valido =="1"){
					    window.location.assign("panel.php");
					}else{
					    $("#alerta").show().html("Usuario o contraseña Incorrectos");
					}
				}
			)
			
         }else{
             $("#alerta").show().html("Todos los campos son obligatorios");
         }
      
  });
    
});