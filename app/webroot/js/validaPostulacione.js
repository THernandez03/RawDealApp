


mensajesError = document.getElementById("mensajesError");
inputNombreIniciativa = document.getElementById("PostulacioneName");
inputEstablecimiento  = document.getElementById("PostulacioneEstablecimiento");
inputAreaDptoUnidad   = document.getElementById("PostulacioneAreaDptoUnidad");
inputLiderName        = document.getElementById("PostulacioneLiderName");
inputLiderCargo       = document.getElementById("PostulacioneLiderCargo");
inputLiderAntiguedad  = document.getElementById("PostulacioneLiderAntiguedad");
inputMiembro1Name          = document.getElementById("PostulacioneMiembro1Name");
inputMiembro1Cargo         = document.getElementById("PostulacioneMiembro1Cargo");
inputMiembro1Antiguedad    = document.getElementById("PostulacioneMiembro1Antiguedad");
inputMiembro2Name          = document.getElementById("PostulacioneMiembro2Name");
inputMiembro2Cargo         = document.getElementById("PostulacioneMiembro2Cargo");
inputMiembro2Antiguedad    = document.getElementById("PostulacioneMiembro2Antiguedad");
inputMiembro3Name          = document.getElementById("PostulacioneMiembro3Name");
inputMiembro3Cargo         = document.getElementById("PostulacioneMiembro3Cargo");
inputMiembro3Antiguedad    = document.getElementById("PostulacioneMiembro3Antiguedad");
inputReservaName           = document.getElementById("PostulacioneReservaName");
inputReservaCargo          = document.getElementById("PostulacioneReservaCargo");
inputReservaAntiguedad     = document.getElementById("PostulacioneReservaAntiguedad");
inputCoordinadorName       = document.getElementById("PostulacioneCoordinadorName");
inputCoordinadorCargo      = document.getElementById("PostulacioneCoordinadorCargo");
inputCoordinadorAntiguedad = document.getElementById("PostulacioneCoordinadorAntiguedad");



inputFecIni = document.getElementById("fecInicio");
inputFecFin = document.getElementById("fecFin");

inputProblematica = document.getElementById("PostulacioneProblematica");
inputObjetivos    = document.getElementById("PostulacioneObjetivos");
inputDescripcion    = document.getElementById("PostulacioneDescripcion");
inputBeneficios    = document.getElementById("PostulacioneBeneficios");
inputMecanismoMedicion    = document.getElementById("PostulacioneMecanismoMedicion");
inputResultadosIndicador    = document.getElementById("PostulacioneResultadosIndicador");
inputCostos    = document.getElementById("PostulacioneCostos");
inputHallazgos    = document.getElementById("PostulacioneHallazgos");
inputExito    = document.getElementById("PostulacioneExito");

inputMotivoNoVigente = document.getElementById("PostulacioneMotivoNoVigente");

hiddenEstPostulacion = document.getElementById("PostulacioneEstPostulacion");

inputUploadFile = document.getElementById("DocumentSubmittedfile");


function asignaValueBorrador(){

     hiddenEstPostulacion.value = 0;
}

 
function validaGuardaTarea(){
  
   
   if( !$j(inputNombreIniciativa).val() ) { 
      
	   printError(1);
	   $j(inputNombreIniciativa).focus();
	   return false;   
   }
   
   if( !$j(inputEstablecimiento).val() ) { 
      
	   printError(2);
	   $j(inputEstablecimiento).focus();
	   return false;
   }   
   
   if( !$j(inputAreaDptoUnidad).val() ) { 
      
	   printError(3);
	   $j(inputAreaDptoUnidad).focus();
	   return false;
   } 
   
   if( !$j(inputLiderName).val() ) { 
      
	   printError(4);
	   $j(inputLiderName).focus();
	   return false;
   } 
   
   if( !$j(inputLiderCargo).val() ) { 
      
	   printError(5);
	   $j(inputLiderCargo).focus();
	   return false;
   } 
 
   if( !$j(inputLiderAntiguedad).val() ){
       
	   printError(6);	   
	   return false;
       
   }
   
   if( !$j(inputMiembro1Name).val() ){
       
	   printError(7);	   
	   return false;
       
   }
   
   if( !$j(inputMiembro1Cargo).val() ){
       
	   printError(8);	   
	   return false;
       
   }
  
   if( !$j(inputMiembro1Antiguedad).val() ){
       
	   printError(9);	   
	   return false;
       
   }
   
   if( !$j(inputMiembro2Name).val() ){
       
	   printError(10);	   
	   return false;
       
   }
   
   if( !$j(inputMiembro2Cargo).val() ){
       
	   printError(11);	   
	   return false;
       
   }
  
   if( !$j(inputMiembro2Antiguedad).val() ){
       
	   printError(12);	   
	   return false;
       
   }
   
   if( !$j(inputMiembro3Name).val() ){
       
	   printError(13);	   
	   return false;
       
   }
   
   if( !$j(inputMiembro3Cargo).val() ){
       
	   printError(14);	   
	   return false;
       
   }
  
   if( !$j(inputMiembro3Antiguedad).val() ){       
	   printError(15);	   
	   return false;       
   }
   
   if( !$j(inputReservaName).val() ){       
	   printError(16);	   
	   return false;       
   }
   
   if( !$j(inputReservaCargo).val() ){       
	   printError(17);	   
	   return false;       
   }
   
    if( !$j(inputReservaAntiguedad).val() ){       
	   printError(18);	   
	   return false;       
   }
   
      if( !$j(inputCoordinadorName).val() ){       
	   printError(19);	   
	   return false;       
   }
   
   if( !$j(inputCoordinadorCargo).val() ){       
	   printError(20);	   
	   return false;       
   }
   
   if( !$j(inputCoordinadorAntiguedad).val() ){       
	   printError(21);	   
	   return false;       
   }
   
   if( !$j(inputFecIni).val() ){       
	   printError(22);	   
	   return false;       
   }
   
   if( !$j(inputFecFin).val() ){       
	   printError(23);	   
	   return false;       
   }
   
   if( !$j(inputProblematica).val() ){       
	   printError(24);	   
	   return false;       
   }
   
   if( !$j(inputObjetivos).val() ){       
	   printError(25);	   
	   return false;       
   }
   
   if( !$j(inputDescripcion).val() ){       
	   printError(26);	   
	   return false;       
   }
   
   if( !$j(inputBeneficios).val() ){       
	   printError(27);	   
	   return false;       
   }
   
   if( !$j(inputMecanismoMedicion).val() ){       
	   printError(28);	   
	   return false;       
   }
   
   if( !$j(inputResultadosIndicador).val() ){       
	   printError(29);	   
	   return false;       
   }
   
   if( !$j(inputCostos).val() ){       
	   printError(30);	   
	   return false;       
   }
   
   if( !$j(inputHallazgos).val() ){       
	   printError(31);	   
	   return false;       
   }
   
   if( !$j(inputExito).val() ){       
	   printError(32);	   
	   return false;       
   }
   
   var radiochecked = 0;
   
   if(document.getElementById('PostulacioneIsPatrocinada1').checked) {
      radiochecked = 1;
	}else if(document.getElementById('PostulacioneIsPatrocinada0').checked) {
	  radiochecked = 1;
	}
   
   if( radiochecked == 0){       
	   printError(33);	   
	   return false;       
   }
   
   radiochecked = 0;
   
   if(document.getElementById('PostulacioneIsAsociacionFunc1').checked) {
      radiochecked = 1;
	  
	}else if(document.getElementById('PostulacioneIsAsociacionFunc0').checked) {
	  radiochecked = 1;
	}
   
   if( radiochecked == 0){       
	   printError(34);	   
	   return false;       
   }
   
    radiochecked = 0;
   
   if(document.getElementById('PostulacioneIsVigente1').checked) {
      radiochecked = 1;
	}else if(document.getElementById('PostulacioneIsVigente0').checked) {
	   
       if( !$j(inputMotivoNoVigente).val() ){       
	   printError(38);	   
	   return false;       
       } 	   
	   
	   radiochecked = 1;
	}
   
   if( radiochecked == 0){       
	   printError(35);	   
	   return false;       
   }
   
    radiochecked = 0;
   
   if(document.getElementById('PostulacioneIsMejoraCalidad1').checked) {
      radiochecked = 1;
	}else if(document.getElementById('PostulacioneIsMejoraCalidad0').checked) {
	  radiochecked = 1;
	}
   
   if( radiochecked == 0){       
	   printError(36);	   
	   return false;       
   }
   
    radiochecked = 0;
   
   if(document.getElementById('PostulacioneIsMejoraEficiencia1').checked) {
      radiochecked = 1;
	}else if(document.getElementById('PostulacioneIsMejoraEficiencia0').checked) {
	  radiochecked = 1;
	}
   
   if( radiochecked == 0){       
	   printError(37);	   
	   return false;       
   }
   
   hiddenEstPostulacion.value = 1;
   
}


function printError(error){
   
   $j(inputNombreIniciativa).removeClass( "invalido" );
   $j(inputEstablecimiento).removeClass( "invalido" );
   $j(inputAreaDptoUnidad).removeClass( "invalido" );
   $j(inputLiderName).removeClass( "invalido" );
   $j(inputLiderCargo).removeClass( "invalido" );
   $j(inputLiderAntiguedad).removeClass( "invalido" );
   $j(inputMiembro1Name).removeClass( "invalido" );     
   $j(inputMiembro1Cargo).removeClass( "invalido" );
   $j(inputMiembro1Antiguedad).removeClass( "invalido" );
   $j(inputMiembro2Name).removeClass( "invalido" );     
   $j(inputMiembro2Cargo).removeClass( "invalido" );
   $j(inputMiembro2Antiguedad).removeClass( "invalido" );
   $j(inputMiembro3Name).removeClass( "invalido" );     
   $j(inputMiembro3Cargo).removeClass( "invalido" );
   $j(inputMiembro3Antiguedad).removeClass( "invalido" );
   $j(inputReservaName).removeClass( "invalido" );
   $j(inputReservaCargo).removeClass( "invalido" );
   $j(inputReservaAntiguedad).removeClass( "invalido" );
   $j(inputCoordinadorName).removeClass( "invalido" );
   $j(inputCoordinadorCargo).removeClass( "invalido" );
   $j(inputCoordinadorAntiguedad).removeClass( "invalido" );
   $j(inputFecIni).removeClass( "invalido" );
   $j(inputFecFin).removeClass( "invalido" );     
   $j(inputProblematica).removeClass( "invalido" );
   $j(inputObjetivos).removeClass( "invalido" );
   $j(inputDescripcion).removeClass( "invalido" );
   $j(inputBeneficios).removeClass( "invalido" );
   $j(inputMecanismoMedicion).removeClass( "invalido" );
   $j(inputResultadosIndicador).removeClass( "invalido" );
   $j(inputCostos).removeClass( "invalido" );
   $j(inputHallazgos).removeClass( "invalido" );
   $j(inputExito).removeClass( "invalido" );




   
   switch(error) {
    case 1:
        mensajesError.innerHTML = "Por favor Indique un Nombre de Iniciativa<p>";
		$j(inputNombreIniciativa).addClass( "invalido" )
        break;
    case 2:
        mensajesError.innerHTML = "Por favor Indique un Establecimiento<p>";
		  $j(inputEstablecimiento).addClass( "invalido" );
        break;
	case 3:
        mensajesError.innerHTML = "Por favor Indique Area/Dpto/Unidad<p>";	
		$j(inputAreaDptoUnidad).addClass( "invalido" );
        break;	
    case 4:
        mensajesError.innerHTML = "Por favor Indique Nombre del Líder del Equipo<p>";	     
		$j(inputLiderName).addClass( "invalido" );
        break;
	case 5:
        mensajesError.innerHTML = "Por favor Indique Cargo del Líder del Equipo<p>";   
		$j(inputLiderCargo).addClass( "invalido" );
        break;	
	case 6:
        mensajesError.innerHTML = "Por favor Indique Antiguedad del Líder del Equipo<p>";  	       
        $j(inputLiderAntiguedad).addClass( "invalido" );		
        break;		
	case 7:
        mensajesError.innerHTML = "Por favor Indique Nombre del Primer Miembro del Equipo<p>";	    	    
		$j(inputMiembro1Name).addClass( "invalido" );
        break;		
	case 8:
        mensajesError.innerHTML = "Por favor Indique Cargo del Primer Miembro del Equipo<p>";	    	    
		$j(inputMiembro1Cargo).addClass( "invalido" );
        break;	
    case 9:
        mensajesError.innerHTML = "Por favor Indique Antiguedad del Primer Miembro del Equipo<p>";	    	    
		$j(inputMiembro1Antiguedad).addClass( "invalido" );
        break;		
    case 10:
        mensajesError.innerHTML = "Por favor Indique Nombre del Segundo Miembro del Equipo<p>";	    	    
		$j(inputMiembro2Name).addClass( "invalido" );
        break;		
	case 11:
        mensajesError.innerHTML = "Por favor Indique Cargo del Segundo Miembro del Equipo<p>";	    	    
		$j(inputMiembro2Cargo).addClass( "invalido" );
        break;	
    case 12:
        mensajesError.innerHTML = "Por favor Indique Antiguedad del Segundo Miembro del Equipo<p>";	    	    
		$j(inputMiembro2Antiguedad).addClass( "invalido" );
        break;	
    case 13:
        mensajesError.innerHTML = "Por favor Indique Nombre del Tercer Miembro del Equipo<p>";	    	    
		$j(inputMiembro3Name).addClass( "invalido" );
        break;		
	case 14:
        mensajesError.innerHTML = "Por favor Indique Cargo del Tercer Miembro del Equipo<p>";	    	    
		$j(inputMiembro3Cargo).addClass( "invalido" );
        break;	
    case 15:
        mensajesError.innerHTML = "Por favor Indique Antiguedad del Tercer Miembro del Equipo<p>";	    	    
		$j(inputMiembro3Antiguedad).addClass( "invalido" );
        break;		
    case 16:
        mensajesError.innerHTML = "Por favor Indique Nombre del Miembro de Reserva<p>";	    	    
		$j(inputReservaName).addClass( "invalido" );
        break;	
    case 17:
        mensajesError.innerHTML = "Por favor Indique Cargo del Miembro de Reserva<p>";	    	    
		$j(inputReservaCargo).addClass( "invalido" );
        break;	
	case 18:
        mensajesError.innerHTML = "Por favor Indique Antiguedad del Miembro de Reserva<p>";	    	    
		$j(inputReservaAntiguedad).addClass( "invalido" );
        break;	
	case 19:
        mensajesError.innerHTML = "Por favor Indique Nombre del Coordinador<p>";	    	    
		$j(inputCoordinadorName).addClass( "invalido" );
        break;	
    case 20:
        mensajesError.innerHTML = "Por favor Indique Cargo del Coordinador<p>";	    	    
		$j(inputCoordinadorCargo).addClass( "invalido" );
        break;	
	case 21:
        mensajesError.innerHTML = "Por favor Indique Antiguedad del Coordinador<p>";	    	    
		$j(inputCoordinadorAntiguedad).addClass( "invalido" );
        break;	
    case 22:
        mensajesError.innerHTML = "Por favor Indique Fecha de Inicio<p>";	    	    
		$j(inputFecIni).addClass( "invalido" );
        break;
    case 23:
        mensajesError.innerHTML = "Por favor Indique Fecha de Fin<p>";	    	    
		$j(inputFecFin).addClass( "invalido" );
        break;			
	case 24:
        mensajesError.innerHTML = "Por favor Indique Descripción de la problemática<p>";	    	    
		$j(inputProblematica).addClass( "invalido" );
        break;		
	case 25:
        mensajesError.innerHTML = "Por favor Indique Objetivos<p>";	    	    
		$j(inputObjetivos).addClass( "invalido" );
        break;		
	case 26:
        mensajesError.innerHTML = "Por favor Indique Descripción Detallada<p>";	    	    
		$j(inputDescripcion).addClass( "invalido" );
        break;		
	case 27:
        mensajesError.innerHTML = "Por favor Indique Beneficios Obtenidos<p>";	    	    
		$j(inputBeneficios).addClass( "invalido" );
        break;		
	case 28:
        mensajesError.innerHTML = "Por favor Indique Mecanismos de Evaluación<p>";	    	    
		$j(inputMecanismoMedicion).addClass( "invalido" );
        break;		
    case 29:
        mensajesError.innerHTML = "Por favor Indique Resultados de los Indicadores<p>";	    	    
		$j(inputResultadosIndicador).addClass( "invalido" );
        break;		
    case 30:
        mensajesError.innerHTML = "Por favor Indique Costos de Implementación<p>";	    	    
		$j(inputCostos).addClass( "invalido" );
        break;	
	case 31:
        mensajesError.innerHTML = "Por favor Indique Razones para replicar iniciativa en otros establecimientos<p>";	    	    
		$j(inputHallazgos).addClass( "invalido" );
        break;	
    case 32:
        mensajesError.innerHTML = "Por favor Indique Factores Críticos para el éxito<p>";	    	    
		$j(inputExito).addClass( "invalido" );
        break;			
    case 33:
        mensajesError.innerHTML = "Por favor Indique si la iniciativa cuenta con patrocinio<p>";	    	    
        break;			
	case 34:
        mensajesError.innerHTML = "Por favor Indique si la iniciativa cuenta con el conocimiento de la asociación de funcionarios <p>";	    	    
		break;		
	case 35:
        mensajesError.innerHTML = "Por favor Indique si la iniciativa se encuentra vigente <p>";	    	    
		break;		
	case 36:
        mensajesError.innerHTML = "Por favor Indique si la iniciativa es mejora de calidad <p>";	    	    
		break;		
	case 37:
        mensajesError.innerHTML = "Por favor Indique si la iniciativa es mejora de eficiencia de procesos <p>";	    	    
		break;	
	case 38:
        mensajesError.innerHTML = "Por favor Indique Motivo por el que la iniciativa no se encuentra vigente <p>";	   
        $j(inputMotivoNoVigente).addClass( "invalido" ); 	    
		break;		

		
		
		
}
    $j('html, body').animate({'scrollTop' : 0}, 1000);

}







