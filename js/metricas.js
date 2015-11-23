$(document).ready(function(){
   
    
        $( "#desde" ).datepicker({
        changeMonth: true,
        changeYear: true,
  	     yearRange: '1900:+0',
  	     dateFormat: 'yy-mm-dd'
       });
    
     $( "#hasta" ).datepicker({
      changeMonth: true,
      changeYear: true,
	     yearRange: '1900:+0',
	     dateFormat: 'yy-mm-dd'
    });
        
        $(".parametro").change(function(){
            filtro($("#desde").val(),$("#hasta").val(),$("#cuestionriodep").val(),$( "#slider-velocidad" ).slider("values"),$( "#slider-presion" ).slider("values"),$( "#slider-actividad" ).slider("values"),$( "#slider-peso" ).slider("values"));

        });
        
        
    $( "#slider-velocidad" ).slider({
      range: true,
      min: 0,
      max: 5,
      values: [ 0, 5 ],

      slide: function( event, ui ) {
       $( "#velocidad" ).val( "velocidad: " + (ui.values[ 0 ]/10) + " - " + (ui.values[ 1 ]/10) );
       
       filtro($("#desde").val(),$("#hasta").val(),$("#cuestionriodep").val(),ui.values,$( "#slider-presion" ).slider("values"),$( "#slider-actividad" ).slider("values"),$( "#slider-peso" ).slider("values"));

      }
    });
    
     $( "#slider-presion" ).slider({
      range: true,
      min: 50,
      max: 170,
      step:10,
     values: [ 50, 170 ],
      slide: function( event, ui ) {
       $( "#presion" ).val( "presion: " + (ui.values[ 0 ]) + " - " + (ui.values[ 1 ]) );
       filtro($("#desde").val(),$("#hasta").val(),$("#cuestionriodep").val(),$( "#slider-velocidad" ).slider("values"),ui.values,$( "#slider-actividad" ).slider("values"),$( "#slider-peso" ).slider("values"));
      }
    });
    
     $( "#slider-actividad" ).slider({
      range: true,
      min: 100,
      max: 1800,
      step:100,
     values: [ 100, 1800 ],
      slide: function( event, ui ) {
       $( "#actividad" ).val( "Actividad Física: " + (ui.values[ 0 ]) + " - " + (ui.values[ 1 ]) );
          filtro($("#desde").val(),$("#hasta").val(),$("#cuestionriodep").val(),$( "#slider-velocidad" ).slider("values"),$( "#slider-presion" ).slider("values"),ui.values,$( "#slider-peso" ).slider("values"));

      }
    });
   
  
  $( "#slider-peso" ).slider({
      range: true,
      min: 40,
      max: 180,
      step:10,
     values: [ 40, 180 ],
      slide: function( event, ui ) {
       $( "#peso" ).val( "Peso en Kg: " + (ui.values[ 0 ]) + " - " + (ui.values[ 1 ]) );
         filtro($("#desde").val(),$("#hasta").val(),$("#cuestionriodep").val(),$( "#slider-velocidad" ).slider("values"),$( "#slider-presion" ).slider("values"),$( "#slider-actividad" ).slider("values"),ui.values);

      }
    });
   
  
   filtro($("#desde").val(),$("#hasta").val(),$("#cuestionriodep").val(),$( "#slider-velocidad" ).slider("values"),$( "#slider-presion" ).slider("values"),$( "#slider-actividad" ).slider("values"),$( "#slider-peso" ).slider("values"));
   
    
			
function filtro(desde, hasta, cuestionario, velocidad, presion, actividad, peso){
 
 $.post("recursos/services/metricas.php",
    {desde:desde,
     hasta: hasta, 
     cuestionario:cuestionario,
     velocidad:velocidad,
     presion:presion,
     actividad:actividad,
     peso:peso
    },
   
				function(res){
				      
                       if(res!="null"){
                      var datos = JSON.parse(res);
                      var tabla ="";
                      var clas;
                      
                      for (var i=0; i<datos.length;i++){
                          if(datos[i].RES=="1"){
                              clas="danger";
                          }else{
                              clas="success";
                          }
                          tabla += "<tr id='"+datos[i].CLAVE+"' class='"+clas+"'><td>"+datos[i].CLAVE+"</td><td>"+datos[i].NOMBRE+"</td><td>"+datos[i].APELLIDO_M+"</td><td>"+datos[i].APELLIDO_P+"</td><td>"+datos[i].FECHA+"</td><td>"+datos[i].C+"</td><td>"+datos[i].V+"</td><td>"+datos[i].P+"</td><td>"+datos[i].AF+"</td><td>"+datos[i].PE+"</td></tr>";
                      }
                      
                      $("#pacientes").html(tabla);
                      $("tr").click(function(){
                        document.location.href="infopaciente.php?id="+$(this).attr("id");
                       });
                      
				             }else{
				               $("#pacientes").html("");
				             }
                      
                      
			    	});
 
}


        
            
            
      
    
});
