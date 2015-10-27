$(document).ready(function(){
    

    
    $("#clave_paciente").keyup(function(){
        
        $(".form-control,#enviar").each(function() {
				            
				            if( $(this).attr("id")!="clave_paciente"){
				            $(this).attr("disabled","disabled");
				            $(this).val("");
				            $("#nombre").html("");
                            $("#apellidos").html("");
				            }
				        });
        
        var matricula = $(this).val();
        
        
          $.post("recursos/services/infoPacientes.php",
            
            {matricula:matricula},
				
				function(res){
				    
				        
				        
                       if( res=="null"){
                           
				        $(".form-control,#enviar").each(function() {
				            
				             if( $(this).attr("id")!="clave_paciente"){
				           	$(this).attr("disabled","disabled");
				           	$(this).val("");
                            
                            if(matricula.trim()==""){
                                $("#mensaje").hide();
                            }else{
                                $("#mensaje").show();
                                 $("#nombre").html("");
                                 $("#apellidos").html("");
                            }
                            
				            }
				        });
				        
                       }else{
                           
                           var datos = JSON.parse(res);
                           
                            $("#email").val(datos[0].email);
                            $("#celular").val(datos[0].celular);
                            $("#telefono").val(datos[0].telefono);
                            $("#FK_escolaridad").val(datos[0].FK_escolaridad);
                            $("#FK_situaciones").val(datos[0].FK_situaciones);
                            $("#delegacion").val(datos[0].delegacion);
                            $("#nombre").html(datos[0].nombre);
                            $("#apellidos").html(datos[0].apellido_P+" "+datos[0].apellido_M);
                            $("#PK_paciente").val(datos[0].PK_paciente);
                            $(".form-control,#enviar").each(function() {
				            $(this).removeAttr("disabled");
				            $("#mensaje").hide();
                                
                            });
                         
                       }
                });
         
    });
    
    
    $("#enviar").click(function(){
      if(confirm("¿Esta seguro de querer realizar estos cambios?")){
      var flag = true;
      $(".form-control").each(function(){
          
         var noObligados=['telefono','email','celular'];
         var value = $(this).val();
         var id= $(this).attr("id");
         if(value.trim()=="" && $.inArray(id,noObligados)==-1){
             
             flag = false;
             $(this).parent().addClass("has-error");
         }else{
             
             $(this).parent().removeClass("has-error");
         }
          
      });
      
      if(flag==false){
          
          $("#error").show();
      }else{
          $("#error").hide();
          
          var forma = $("#forma");
         forma.find(':hidden').show(); 
          $.post("recursos/services/editarPaciente.php",
            
            forma.serialize(),
				
				function(res){
                       $("#PK_paciente").hide();
                       if(res=="1"){
                           alert('Los cambios se realizaron exitosamente');
                       }else{
                           alert('Ocurrio un error');
                       }
                      
				
			    	});
			    	
			
                }
            }
        });
    
    
    
});