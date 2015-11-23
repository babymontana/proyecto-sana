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
   
   $("#nombre").keyup(function(){
       if(this.value.length>15){
           this.value=this.value.substr(0,15);
       }
   });
   
    $("#email").keyup(function(){
       if(this.value.length>40){
           this.value=this.value.substr(0,40);
       }
   });
   
   $("#apellido_P").keydown(function(){
       if(this.value.length>15){
           this.value=this.value.substr(0,15);
       }
   });
   
   $("#apellido_M").keyup(function(){
       if(this.value.length>15){
           this.value=this.value.substr(0,15);
       }
   });
   
    $("#email").keyup(function(){
       if(this.value.length>50){
           this.value=this.value.substr(0,50);
       }
   });
   
    $("#fecha_nacimiento").keyup(function(){
       if(this.value.length>0){
           this.value=this.value.substr(0,0);
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
   
   
   
    
});