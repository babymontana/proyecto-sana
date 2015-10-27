$(document).ready(function(){
   
   $( "#fecha_nacimiento" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: '1900:+0',
	  showOn: "button",
      buttonImage: "calendar.png",
      buttonImageOnly: true,
	   dateFormat: 'yy-mm-dd'
    });
   
   
   $("#enviar").click(function(){
      
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
         
          $.post("recursos/services/agregarPaciente.php",
            
            forma.serialize(),
				
				function(res){
                       
                       
                       if(res!="0" && res!="-1" ){
                          $("#matriculaSpan").html(res);
                         $("#mensaje").show();
                          
                       }else{
                          alert("Lo sentimos, ha ocurrido un error.");
                       }
				
			    	});
			    	
			
                }
   });
   
   
   $("#cancelar").click(function(){
           window.location.assign("panel.php");
   });
   
    $("#aceptar").click(function(){
           document.getElementById("forma").reset();
           $("#mensaje").hide();
   });
   
    
});