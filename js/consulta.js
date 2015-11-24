$(document).ready(function(){
    
    
 $("#busqueda").click(function(){
        $(this).val("");
    }).keyup(function(e){
        
       
       if(e.keyCode != 13){
           
       $("#clave_label").html("");
       $("#nombre").html("");
       $("#apellidos").html("");
       $("#PK_paciente").val("");
        $(".form-control,#enviar").each(function() {
				            
				            if( $(this).attr("id")!="busqueda"){
				            $(this).attr("disabled","disabled");
				            $(this).val("");
				            
				            }
				        });
				        
       }
        
        var valor = $(this).val();
        if(valor.trim()!=""){
        
          $.post("recursos/services/busquedaPaciente.php",
            
            {valor:valor},
				
				function(res){
				    
				      
				        
                       if( res=="null"){
                          
				        
				        
                       }else{
                           
                           var datos = JSON.parse(res);
                        
                           $("#busqueda").autocomplete({
                                minLength: 0,
                                source: datos,
                                select: function( event, ui ) {
                                    
                            $("#nombre").html(ui.item.nombre);
                            $("#apellidos").html(ui.item.apellido_P+" "+ui.item.apellido_M);
                            $("#clave").val(ui.item.value);
                            $("#clave_label").html(ui.item.value);
                            
                            $(".form-control,#enviar").each(function() {
				            $(this).removeAttr("disabled");
                            $("#cuestionriodep").val(1);    
                            });
                             $("#busqueda").val("");
                                    
                                    return false;
                                },
                             
                              
                           });
                       }
                });
                
        }else{
            
        }
         
    });
        

   //Validadciones
   
   $("#velocidad").numeric(".");
   $("#velocidad").keyup(function() {
       if(this.value.length>4){
           this.value=this.value.substr(0,4);
       }
   });
 
   $("#presion").keyup(function() {
       if(this.value.match(/[^0-9 ]/g)) {
           this.value = this.value.replace(/[^0-9 ]/g, '');
       }
       if(this.value.length>3){
           this.value=this.value.substr(0,3);
       }
   });
   
   $("#actividadfisica").keyup(function() {
       if(this.value.match(/[^0-9 ]/g)) {
           this.value = this.value.replace(/[^0-9 ]/g, '');
       }
       if(this.value.length>4){
           this.value=this.value.substr(0,4);
       }
   });
   
   $("#peso").numeric(".");
   $("#peso").keyup(function() {
       if(this.value.length>5){
           this.value=this.value.substr(0,5);
       }
   });
   

   
    

$("#enviar").click(function(event){
      var flag = true;
      var valid= true;
      $(".form-control").each(function(){
          
         var noObligados=['busqueda'];
         var value = $(this).val();
         var id= $(this).attr("id");
         
         
         
         if(value.trim()=="" && $.inArray(id,noObligados)==-1){
             
             flag = false;
             $(this).parent().addClass("has-error");
         }else{
             
             $(this).parent().removeClass("has-error");
         }
          
      });
      
     
     var p= $("#peso").val();
     
     
     if(p<40 || p>180){
         
        valid = false; 
        $("#peso").parent().addClass("has-error");
     }else{
           valid = true; 
        $("#peso").parent().removeClass("has-error");
     }

      if(flag==false){
          
          $("#error").show();
      }
      else{
          $("#error").hide();
          
          if(valid==false){
             $("#error2").show(); 
          }else{
          
          $("#error2").hide();
          
          
          var forma = $("#formaconsultas");
         
          $.post("recursos/services/agregarConsulta.php",
            
            forma.serialize(),
				
				function(res){
                       
                      
                       if(res!="0" && res!="-1" ){
                          
                          $("#mensaje").show();
                          $("#aceptar").click(function(){
                               document.getElementById("formaconsultas").reset();
                                 $("#clave_label").html("");
                                   $("#nombre").html("");
                                   $("#apellidos").html("");
                                   $("#PK_paciente").val("");
                                     $(".form-control,#enviar").each(function() {
				            
				            if( $(this).attr("id")!="busqueda"){
				            $(this).attr("disabled","disabled");
				            $(this).val("");
				            
				            }
				        });
                               $("#mensaje").hide();
                              
                          });
                          
                          $("#cancelar").click(function(){
                              window.location.assign("panel.php");
                          });
                          
                       }else{
                          alert("Lo sentimos, ha ocurrido un error.");
                       }
				
			    	});
			    	
			
                }
            }
   });
   
});