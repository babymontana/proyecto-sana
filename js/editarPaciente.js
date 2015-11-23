$(document).ready(function(){
    

    
    $("#busqueda").click(function(){
        $(this).val("");
    }).keyup(function(e){
       if(e.keyCode != 13){
                            $("#nombre").html("");
                            $("#apellidos").html("");
                            $("#mensaje").hide();
                            $("#clave_label").html("");
           
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
                          $("#mensaje").show();
				        
				        
                       }else{
                           
                           var datos = JSON.parse(res);
                        
                           $("#busqueda").autocomplete({
                                minLength: 0,
                                source: datos,
                                select: function( event, ui ) {
                            $("#email").val(ui.item.email);
                            $("#celular").val(ui.item.celular);
                            $("#clave_label").html(ui.item.value);
                            $("#telefono").val(ui.item.telefono);
                            $("#FK_escolaridad").val(ui.item.FK_escolaridad);
                            $("#FK_situaciones").val(ui.item.FK_situaciones);
                            $("#delegacion").val(ui.item.delegacion);
                            $("#nombre").html(ui.item.nombre);
                            $("#apellidos").html(ui.item.apellido_P+" "+ui.item.apellido_M);
                            $("#PK_paciente").val(ui.item.PK_paciente);
                            $(".form-control,#enviar").each(function() {
				            $(this).removeAttr("disabled");
                                
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
    
    
    $("#enviar").click(function(){
      if(confirm("¿Esta seguro de querer realizar estos cambios?")){
      var flag = true;
      $(".form-control").each(function(){
          
         var noObligados=['busqueda','telefono','email','celular'];
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
        
        $("#telefono").keyup(function() {
            if(this.value.match(/[^0-9 ]/g)) {
                this.value = this.value.replace(/[^0-9 ]/g, '');
            }
            if(this.value.length>10){
                this.value=this.value.substr(0,10);
            }
        });
        $("#celular").keyup(function() {
           if(this.value.match(/[^0-9 ]/g)) {
               this.value = this.value.replace(/[^0-9 ]/g, '');
           }
           if(this.value.length>10){
               this.value=this.value.substr(0,10);
           }
        });
        $("#email").keyup(function(){
            if(this.value.length>50){
                this.value=this.value.substr(0,50);
            }
        });
});