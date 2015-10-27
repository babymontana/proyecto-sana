var grafica = null;

$(document).ready(function(){
   genero();
   
   
   
   
   $("#genero").click(function(){
       $("#metricas").show().html(" <h3> Promedio de edad</h3><hr><ul class='nav nav-stacked'><li><a class='sexo' id='edadHombre' href='#'>Hombre</a></li><li><a class='sexo' id='edadMujer' href='#'>Mujer</a></li><li><a  class='sexo' id='edadAmbos' href='#'>Ambos</a></li> </ul><h3> Género</h3><hr><ul class='nav nav-stacked'><li><a id='comparativaGenero' href='#'>Comparativa</a></li></ul><h3> Leyenda</h3><hr><ul id='leyenda' class='list-group'><li class='list-group-item'><canvas width='10' height='10' style='background: #F7464A;'></canvas> Hombre</li><li class='list-group-item'><canvas width='10' height='10' style='background:#46BFBD;'></canvas> Mujer</li></ul>");
       $("#titleGrafica").html("Gráfica de Género");
       genero();
       
   });
   
   $("#consultas").click(function(){
       $("#metricas").show().html("<h3> Años</h3><hr><ul class='nav nav-stacked'><li><a  class='edad' id='2015-2014' href='#'>2015-2014</a></li><li><a class='edad' id='2014-2013' href='#'>2014-2013</a></li><li ><a class='edad'  id='2013-2012' href='#'>2013-2012</a></li> <li><a class='edad'  id='2012-2011' href='#'>2012-2011</a></li> <li><a class='edad'  id='2011-2010' href='#'>2011-2010</a></li> </ul><h3> Leyenda</h3><hr><ul id='leyenda' class='list-group'><li class='list-group-item'><canvas width='10' height='10' style='background: #dcdcdc;'></canvas> 2015</li><li class='list-group-item'><canvas width='10' height='10' style='background:#97bbcd;'></canvas> 2014</li></ul>");
       $("#titleGrafica").html("Consultas 2015-2014");
       consultas('2015','2014');
       
       
   });
   
   $("#region").click(function(){
       $("#metricas").hide().html("");
       $("#titleGrafica").html("Numero de pacientes por Región");
       regiones();
   });
   
 

});

function genero(){
$.post("recursos/services/genero.php",
				
				function(res){

					var datos = JSON.parse(res);
				
	                
                    
                    var data = [
                                {
                                    value: datos[0].Total,
                                    color:"#F7464A",
                                    highlight: "#FF5A5E",
                                    label: datos[0].Genero
                                },
                                {
                                    value: datos[1].Total,
                                    color: "#46BFBD",
                                    highlight: "#5AD3D1",
                                    label: datos[1].Genero
                                }
                            ];
                                 
                        if(grafica != null){
                            grafica.destroy();
                        }                   
                	var ctx = $("#grafica").get(0).getContext("2d");
                    grafica = new Chart(ctx).Pie(data);
                   
                     $("#edadHombre").click(function() {
                       $("#titleGrafica").html("Promedio de edad Hombres");
                       $("#leyenda").html("<li class='list-group-item'><canvas width='10' height='10' style='background: #3333FF;'></canvas> 60 a 69</li><li class='list-group-item'><canvas width='10' height='10' style='background:#00ccFF;'></canvas> 70-79</li><li class='list-group-item'><canvas width='10' height='10' style='background:#cc0000;'></canvas> 80 ó más</li>");
                       edad('H');
                   });
                   
                    $("#edadMujer").click(function() {
                       $("#titleGrafica").html("Promedio de edad Mujeres");
                       $("#leyenda").html("<li class='list-group-item'><canvas width='10' height='10' style='background: #6600cc;'></canvas> 60 a 69</li><li class='list-group-item'><canvas width='10' height='10' style='background:#FF007F;'></canvas> 70-79</li><li class='list-group-item'><canvas width='10' height='10' style='background:#99CCFF;'></canvas> 80 ó más</li>");

                       edad('M');
                   });
                   
                    $("#edadAmbos").click(function() {
                       $("#titleGrafica").html("Promedio de edad ");
                       $("#leyenda").html("<li class='list-group-item'><canvas width='10' height='10' style='background: #F7464A;'></canvas> 60 a 69</li><li class='list-group-item'><canvas width='10' height='10' style='background:#46BFBD;'></canvas> 70-79</li><li class='list-group-item'><canvas width='10' height='10' style='background:#FDB45C;'></canvas> 80 ó más</li>");

                       edad('A');
                   });
                   
                   $("#comparativaGenero").click(function(){
       $("#metricas").show().html(" <h3> Promedio de edad</h3><hr><ul class='nav nav-stacked'><li><a class='sexo' id='edadHombre' href='#'>Hombre</a></li><li><a class='sexo' id='edadMujer' href='#'>Mujer</a></li><li><a  class='sexo' id='edadAmbos' href='#'>Ambos</a></li> </ul><h3> Género</h3><hr><ul class='nav nav-stacked'><li><a id='comparativaGenero' href='#'>Comparativa</a></li></ul><h3> Leyenda</h3><hr><ul id='leyenda' class='list-group'><li class='list-group-item'><canvas width='10' height='10' style='background: #F7464A;'></canvas> Hombre</li><li class='list-group-item'><canvas width='10' height='10' style='background:#46BFBD;'></canvas> Mujer</li></ul>");
       $("#titleGrafica").html("Gráfica de Género");
       genero();
       
       
   });
					 
				
				});
        }
        
   function edad(sexo){
       
       switch(sexo){
           case "H":
              var color=["#3333FF","#00ccFF","#cc0000"];
            
            break;
            
            case "M":
             color=["#6600cc","#FF007F","#99CCFF"];
            break;
            
            default:
              color=["#F7464A","#46BFBD","#FDB45C"];
            break;
       }
        
       
       $.post("recursos/services/generoEdad.php",
               {sexo:sexo},
				
				function(res){

					var datos = JSON.parse(res);
				
		              		
				
                              var data = [
                                    {
                                        value: datos[0].Totales,
                                        color:color[0],
                                        highlight: color[0],
                                        label: datos[0].Rango
                                    },
                                    {
                                        value: datos[1].Totales,
                                        color: color[1],
                                        highlight: color[1],
                                        label: datos[1].Rango
                                    },
                                    {
                                        value: datos[2].Totales,
                                        color: color[2],
                                        highlight: color[2],
                                        label: datos[2].Rango
                                    }
                                ]
 
                        if(grafica != null){
                            grafica.destroy();
                        }                   
                	var ctx = $("#grafica").get(0).getContext("2d");
                    grafica = new Chart(ctx).Doughnut(data);
                   
                    
                   
                 
					 
				
				});
       
   }
   

   
   function regiones(){
       $.post("recursos/services/regiones.php",
				
				function(res){

					var datos = JSON.parse(res);
					var delegaciones=Array();
					var numeros=Array();
				          for(var i=0;i<datos.length;i++){
				              
				              delegaciones.push(datos[i].Delegacion);
				              numeros.push(datos[i].Numero);
				          }
                        
                        
                        var data = {
                            labels: delegaciones,
                            datasets: [
                                {
                                    label: "Numero de personas por delegación",
                                    fillColor: "rgba(140,207,252,0.5)",
                                    strokeColor: "rgba(140,207,252,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: numeros
                                }
                            ]
                        };
                                                if(grafica != null){
                            grafica.destroy();
                        }                   
                	var ctx = $("#grafica").get(0).getContext("2d");
                    grafica = new Chart(ctx).Bar(data);
                   
                    
                   
                 
					 
				
				});
             }
             
             
    function consultas(anioA, anioB){
        
         $(".edad").click(function() {
                          var rango = $(this).attr("id");
                          $("#titleGrafica").html("Consultas "+rango);
                          switch (rango){
                              case "2015-2014":
                                  consultas("2015","2014");
                              break;
                              case "2014-2013":
                                  consultas("2014","2013");
                              break;
                              case "2013-2012":
                                  consultas("2013","2012");
                              break;
                              case "2012-2011":
                                  consultas("2012","2011");
                              break;
                              case "2011-2010":
                                  consultas("2011","2010");
                              break;
                          }
                          
                          
                          
                     });
        $("#leyenda").html("<li class='list-group-item'><canvas width='10' height='10' style='background: #dcdcdc;'></canvas> "+anioA+"</li><li class='list-group-item'><canvas width='10' height='10' style='background:#97bbcd;'></canvas> "+anioB+"</li>");            
        
        $.post("recursos/services/graficaConsultas.php",
               {anio1:anioA, anio2:anioB},
				
				function(res){
				    
                    
					var datos = JSON.parse(res);
					var data1=datos[0];
					var data2=datos[1];
					
					var Consultas1=Array();
					var Consultas2=Array();
					
					for(var i=0; i<data1.length; i++){
					    
					    Consultas1.push(data1[i].TOTAL);
					    Consultas2.push(data2[i].TOTAL);
					}
					
					var data = {
                    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto","Semptiembre","Octubre","Noviembre","Diciembre"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: Consultas1
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: Consultas2
                        }
                    ]
                };
				
                                
                        if(grafica != null){
                            grafica.destroy();
                        }                   
                	var ctx = $("#grafica").get(0).getContext("2d");
                    grafica = new Chart(ctx).Line(data);
                   
                 
					 
				
				});
        
    }