function load(id){
    
   $.post("recursos/services/infopacientes.php",
    {id:id},
   
				function(res){
				
                     var datos = JSON.parse(res);
                      $("#nombre").html(datos.BASICO.NOMBRE+" "+datos.BASICO.PATERNO+" "+datos.BASICO.MATERNO);
                      $("#clave").html(" "+datos.BASICO.CLAVE);
                      $("#fecha").html(" "+datos.BASICO.REGISTRO);
                      $("#edad").html(" "+datos.BASICO.EDAD);
                      $("#sexo").html(" "+datos.BASICO.SEXO);
                      $("#escolaridad").html(" "+datos.BASICO.ESCOLARIDAD);
                      $("#delegacion").html(" "+datos.BASICO.DELEGACION);
                      $("#telefono").html(" "+datos.BASICO.TELEFONO);
                      $("#mail").html(" "+datos.BASICO.EMAIL);
                      
                      
                      $("#cuestionariop").html(" "+datos.PROMEDIO.CUESTIONARIO	);
                      $("#velocidadp").html(" "+datos.PROMEDIO.VELOCIDAD);
                      $("#presionp").html(" "+datos.PROMEDIO.PRESION);
                      $("#fisicap").html(" "+datos.PROMEDIO.ACTIVIDAD_FISICA);
                      $("#pesop").html(" "+datos.PROMEDIO.PESO);
                      
                      for (var i=0; i<datos.HISTORIAL.length;i++){
                          
                          $("#historial").append("<tr class='text-center'><td>"+datos.HISTORIAL[i].FECHA+"</td><td>"+datos.HISTORIAL[i].CUESTIONARIO+"</td><td>"+datos.HISTORIAL[i].VELOCIDAD+"</td><td>"+datos.HISTORIAL[i].PRESION+"</td><td>"+datos.HISTORIAL[i].AF+"</td><td>"+datos.HISTORIAL[i].PESO+"</td></tr>");
                          
                      }
                      
                      var labels = Array();
                      var data = Array();
                      
                      for (var i=0; i<datos.PESO.length;i++){
                           labels.push(datos.PESO[i].FECHA);
                           data.push(datos.PESO[i].PESO);
                      }
                      
                      
                      var data = {
                    labels: labels,
                    datasets: [
                        {
                            label: "Peso",
                            fillColor: "#5882FA",
                            strokeColor: "#FA5858",
                            pointColor: "#FA5858",
                            pointStrokeColor: "#9FF781",
                            pointHighlightFill: "#9FF781",
                            pointHighlightStroke: "#FA5858",
                            data: data
                        }
                    ]
                };
                      
                      
               var ctx = $("#grafica5").get(0).getContext("2d");
               grafica = new Chart(ctx).Line(data);
               
                var labels = Array();
                      var data = Array();
                      
                      for (var i=0; i<datos.PRESION.length;i++){
                           labels.push(datos.PRESION[i].FECHA);
                           data.push(datos.PRESION[i].PRESION);
                      }
                     
                      
                      var data = {
                    labels: labels,
                    datasets: [
                        {
                            label: "Presión",
                             fillColor: "#5882FA",
                            strokeColor: "#FA5858",
                            pointColor: "#FA5858",
                            pointStrokeColor: "#9FF781",
                            pointHighlightFill: "#9FF781",
                            pointHighlightStroke: "#FA5858",
                            data: data
                        }
                    ]
                };
                      
                      
               var ctx = $("#grafica3").get(0).getContext("2d");
               grafica = new Chart(ctx).Line(data);
               
                var labels = Array();
                      var data = Array();
                      
                      for (var i=0; i<datos.CUESTIONARIOS.length;i++){
                           labels.push(datos.CUESTIONARIOS[i].FECHA);
                       
                           data.push(datos.CUESTIONARIOS[i].PRESION);
                      }
                     
                      
                      var data = {
                    labels: labels,
                    datasets: [
                        {
                            label: "Cuestionarios",
                            fillColor: "#5882FA",
                            strokeColor: "#FA5858",
                            pointColor: "#FA5858",
                            pointStrokeColor: "#9FF781",
                            pointHighlightFill: "#9FF781",
                            pointHighlightStroke: "#FA5858",
                            data: data
                        }
                    ]
                };
                      
                      
               var ctx = $("#grafica1").get(0).getContext("2d");
               grafica = new Chart(ctx).Line(data);
               
                var labels = Array();
                      var data = Array();
                      
                      for (var i=0; i<datos.VELOCIDAD.length;i++){
                           labels.push(datos.VELOCIDAD[i].FECHA);
                       
                           data.push(datos.VELOCIDAD[i].PRESION);
                      }
                     
                      
                      var data = {
                    labels: labels,
                    datasets: [
                        {
                            label: "Velocidad",
                            fillColor: "#5882FA",
                            strokeColor: "#FA5858",
                            pointColor: "#FA5858",
                            pointStrokeColor: "#9FF781",
                            pointHighlightFill: "#9FF781",
                            pointHighlightStroke: "#FA5858",
                            data: data
                        }
                    ]
                };
                      
                      
               var ctx = $("#grafica2").get(0).getContext("2d");
               grafica = new Chart(ctx).Line(data);
               
               var labels = Array();
                      var data = Array();
                      
                      for (var i=0; i<datos.ACTIVIDAD_FISICA.length;i++){
                           labels.push(datos.ACTIVIDAD_FISICA[i].FECHA);
                       
                           data.push(datos.ACTIVIDAD_FISICA[i].PRESION);
                      }
                     
                      
                      var data = {
                    labels: labels,
                    datasets: [
                        {
                            label: "Actividad",
                            fillColor: "#5882FA",
                            strokeColor: "#FA5858",
                            pointColor: "#FA5858",
                            pointStrokeColor: "#9FF781",
                            pointHighlightFill: "#9FF781",
                            pointHighlightStroke: "#FA5858",
                            data: data
                        }
                    ]
                };
                      
                      
               var ctx = $("#grafica4").get(0).getContext("2d");
               grafica = new Chart(ctx).Line(data);
                      
                      
			    	});
}