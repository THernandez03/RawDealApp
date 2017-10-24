

tablaAgregados = document.getElementById("cmbAgregados_id");
hiddenColaboradores = document.getElementById('ActividadeColaboradoresArray');
hiddenFechas = document.getElementById('ActividadeFechasArray');
inputFechas = document.getElementById('ActividadeFecResponsable');
hiddenEscaner = document.getElementById('ActividadeFechasEscaner');
inputEscaner = document.getElementById('ActividadeFecEscaner');
mensajesError = document.getElementById("mensajesError");
comboTipoTarea = document.getElementById("ActividadeTipoTareaId");
comboTipoCliente = document.getElementById("ActividadeClienteId");
comboTipoEquipo = document.getElementById("ActividadeEquipoId");
comboTipoResponsable = document.getElementById("ActividadeUserId");
comboTipoStatus = document.getElementById("ActividadeTipoEstadoId");

arrayFeriados = new Array();

function feriado(id, fecha){
	this.id = id;
	this.fecha = fecha;
}


$j(document).ready(function(){
   
   var feriadosHidden = document.getElementsByName("hdnFeriados");
   var today = new Date();	
   
   for (i=0;i <feriadosHidden.length;i++){

      var getFeriados  = new feriado(i,feriadosHidden[i].value);
	  arrayFeriados.push(getFeriados);
   }
   
   var fechasTrabajo = document.getElementsByName("hdnFecTrabajo");
   
   
   for (i=0;i <fechasTrabajo.length;i++){
      
      $j('#simpliest-usage').multiDatesPicker({
					addDates: [fechasTrabajo[i].value]					
					});			
      if(inputFechas.value == ""){
	     inputFechas.value = fechasTrabajo[i].value; 
	  }
	  else{
	     inputFechas.value = inputFechas.value +','+fechasTrabajo[i].value; 
	  }
	  
	  hiddenFechas.value = $j('#simpliest-usage').multiDatesPicker('getDates');   

	  	 
	  $j('#simpliest-usage').multiDatesPicker('removeDates', today);				
   }
   
   var fechasEscaner = document.getElementsByName("hdnFecEscaner");
   lengthEscaner = fechasEscaner.length;
   
   if (lengthEscaner > 0){
   
      for (i=0;i <lengthEscaner;i++){
      
		  $j('#calendarioEscaner').multiDatesPicker({
						addDates: [fechasEscaner[i].value]					
						});			
		  if(inputEscaner.value == ""){
			 inputEscaner.value = fechasEscaner[i].value; 
		  }
		  else{
			 inputEscaner.value = inputEscaner.value +','+fechasEscaner[i].value; 
		  }
	 
					
      }
       
	   
	   $j('#calendarioEscaner').multiDatesPicker('removeDates', today);
	   document.getElementById("inputFecEscaner").style.display = "block";
   }
   
   var colaboradores = document.getElementsByName("hdnColaboradores");
   
   lengthColaboradores = colaboradores.length;
   
	  if (lengthColaboradores > 0){

		  for (i=0;i <lengthColaboradores;i++){
		        
				colaborador = $j("#cmbcolaboradores_id option[value="+colaboradores[i].value+"]").text();
				$j("#cmbcolaboradores_id option[value="+colaboradores[i].value+"]").hide();
			
				tablaAgregados.innerHTML = tablaAgregados.innerHTML + "<tr id=span_"+colaboradores[i].value+"> <td class='tdformadd azulclaro'>"+ colaborador+"<img src='/talleres/img/remove.png' onclick='removerColaborador(this.id)' class='removerButton' id = "+ colaboradores[i].value+"></td></tr>";	
				hiddenColaboradores.value = hiddenColaboradores.value+colaboradores[i].value+'#';  						
		  }
		  
		  $j("#trMuestraColaboradores").show();	
	   
	  }
   
   
  
  
});




function validaGuardaTarea(){
  
   
   
   if( !$j('#ActividadeTipoTareaId').val() ) { 
      
	   printError(1);
	   $j('#ActividadeTipoTareaId').focus();
	   return false;   
   }
   
   if( !$j('#ActividadeClienteId').val() ) { 
      
	   printError(2);
	   $j('#ActividadeClienteId').focus();
	   return false;
   }   
   
   if( !$j('#ActividadeEquipoId').val() ) { 
      
	   printError(3);
	   $j('#ActividadeEquipoId').focus();
	   return false;
   } 
   
   if( !$j('#ActividadeUserId').val() ) { 
      
	   printError(4);
	   $j('#ActividadeUserId').focus();
	   return false;
   } 
   
   if( !$j('#ActividadeTipoEstadoId').val() ) { 
      
	   printError(5);
	   $j('#ActividadeTipoEstadoId').focus();
	   return false;
   } 
 
   if($j('#ActividadeFechasArray').val() == '#'){
       
	   printError(6);	   
	   return false;
       
   }
   
   var isEscaner = $j('#hdnIsEscaner').val();
   
   if (isEscaner == 1){
   
	   if($j('#ActividadeFechasEscaner').val() == '#'){
		   
		   printError(7);	   
		   return false;
		   
	   }
   }  
   
}


function printError(error){
   
   $j(comboTipoTarea).removeClass( "invalido" );
   $j(comboTipoCliente).removeClass( "invalido" );
   $j(comboTipoEquipo).removeClass( "invalido" );
   $j(comboTipoResponsable).removeClass( "invalido" );
   $j(comboTipoStatus).removeClass( "invalido" );
   $j(inputFechas).removeClass( "invalido" );
   $j(inputEscaner).removeClass( "invalido" );
   
   switch(error) {
    case 1:
        mensajesError.innerHTML = "Por favor seleccione el Tipo de Tarea<p>";
	    //comboTipoTarea.className = "invalido";
		$j(comboTipoTarea).addClass( "invalido" )
        break;
    case 2:
        mensajesError.innerHTML = "Por favor seleccione un Cliente<p>";
	    //comboTipoCliente.className = "invalido";
		  $j(comboTipoCliente).addClass( "invalido" );
        break;
	case 3:
        mensajesError.innerHTML = "Por favor seleccione un Equipo<p>";	    
	    //comboTipoEquipo.className = "invalido";
		$j(comboTipoEquipo).addClass( "invalido" );
        break;	
    case 4:
        mensajesError.innerHTML = "Por favor seleccione un Responsable<p>";	    
	    //comboTipoResponsable.className = "invalido";    
		$j(comboTipoResponsable).addClass( "invalido" );
        break;
	case 5:
        mensajesError.innerHTML = "Por favor seleccione un Status de la Tarea<p>";	    
	    //comboTipoStatus.className = "invalido";    
		$j(comboTipoStatus).addClass( "invalido" );
        break;	
	case 6:
        mensajesError.innerHTML = "Por favor ingrese una fecha para el Desarrollo de la Tarea<p>";	    
	    //inputFechas.className = "invalido";   
        $j(inputFechas).addClass( "invalido" );		
        break;		
	case 7:
        mensajesError.innerHTML = "Por favor ingrese una fecha de Escaner<p>";	    
	    //inputEscaner.className = "invalido";   
		$j(inputEscaner).addClass( "invalido" );
        break;		
		
}
    $j('html, body').animate({'scrollTop' : 0}, 1000);

}


$j("#cmbcolaboradores_id").change(function() {
    
	
	$j("#cmbcolaboradores_id option[value="+$j("#cmbcolaboradores_id").val()+"]").hide();
	
	$j("#trMuestraColaboradores").show();	
	
	tablaAgregados.innerHTML = tablaAgregados.innerHTML + "<tr id=span_"+$j("#cmbcolaboradores_id").val()+"> <td class='tdformadd azulclaro'>"+ $j("#cmbcolaboradores_id option:selected").text()+"<img src='/talleres/img/remove.png' onclick='removerColaborador(this.id)' class='removerButton' id = "+ $j("#cmbcolaboradores_id").val()+"></td></tr>";	
	hiddenColaboradores.value = hiddenColaboradores.value+$j("#cmbcolaboradores_id").val()+'#';  
});


function removerColaborador(id){

    $j("#cmbcolaboradores_id option[value="+id+"]").show();
	//$j("#span_"+id).hide();
	
	spanColaborador = document.getElementById("span_"+id);
	tablaAgregados.removeChild(spanColaborador);
	colaboradoresValue = hiddenColaboradores.value;
    hiddenColaboradores.value = colaboradoresValue.replace(id+'#','');
     
}


// add page form
$j('.ajax_page #ActividadeClienteId').change(function(){

	var selected = $j(this).val();
	
	$j.ajax({
		type: "POST",
		url: '/talleres/actividades/comboajax',
		data: "ajax=true&id="+selected,
		success: function(msg){
		
			$j('.ajax_page_id').html(msg);
			
		}
	});
});


// add page form
$j('.ajax_page #ActividadeTipoTareaId').change(function(){

	var selected = $j(this).val();
	
	$j.ajax({
		type: "POST",
		url: '/talleres/actividades/combotareas',
		data: "ajax=true&id="+selected,
		success: function(msg){
		     
			 $j('.divHiddenFields').html(msg);
			 
			 var duracion = $j('#hdnDuracion').val();
			 
			 var isEscaner = $j('#hdnIsEscaner').val();
			 
			 var today = new Date();			
			 	 
			 $j('#simpliest-usage').multiDatesPicker('resetDates');
			 
			 
			for (i=0;i<duracion;i++){
				
			//Aqui comparar fechas
			     diasDelta = 1;
			     sumaDias = today.getDate()+diasDelta+i; 
				  
				 f2 = new Date().setDate(sumaDias);
				 
				 fecFds = isFds(today,diasDelta,i);
				 fecFeriado = isFeriado(f2);	 				 
											 
				 if( fecFeriado == false && fecFds==false){
					$j('#simpliest-usage').multiDatesPicker({
					addDates: [f2]					
					});								   
				 }	
				 else{
                    duracion++;
				 }				 
                      									
			 }
			 
			 $j('#simpliest-usage').multiDatesPicker('removeDates', today);
				
			 if(isEscaner == 1){
                 
				$j('#inputFecEscaner').fadeIn(); 
				$j('#divCalendarioEscaner').fadeIn();
				document.getElementById("ActividadeIsEscanerValue").value = 1;
				
				 
             }else{
                
				$j('#inputFecEscaner').hide();				
                $j('#divCalendarioEscaner').hide();		
				document.getElementById("ActividadeIsEscanerValue").value = 0;				
             }			 
			
			  
		}
	});
});


function isFeriado(fecha){

    for (y = 0; y < arrayFeriados.length; y++){
                             
							 fecFeriado = arrayFeriados[y].fecha;
                             from = fecFeriado.split("-");						     
							 f1 = new Date(from[2], from[1] - 1, from[0]);
							 f3 = new Date().setDate(f1.getDate());
														 
							 comparacion = $j('#simpliest-usage').multiDatesPicker('compareDates',f3,fecha);
						     
							 if( comparacion == 0){
							   return true;						   
							 }							 							 					
							 
   }		
   
   return false;

}



function isFds(fecha,diasDelta,diaCurrent){
    
	deltaParse = parseInt(diasDelta);
	currentParse = parseInt(diaCurrent);
	
	var dd = fecha.getDate()+deltaParse+currentParse;
	
    var mm = fecha.getMonth()+1; //January is 0!

    var yyyy = fecha.getFullYear();
    
	
	if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 
    
	dia = new Date(yyyy, mm-1 ,dd);
	
	semanal = dia.getDay();
   // alert(semanal);
   if(semanal == 0 || semanal == 6)
      return true;
   else
      return false;

}

$j('#tableSeleccioneFecha').click(function(){  
     $j("#divCalendarioResponsable").show();	    
});


$j('#ActividadeFecResponsable').click(function(){  
     $j("#divCalendarioResponsable").show();	    
});


$j('#ActividadeFecEscaner').click(function(){  
     $j("#divCalendarioEscaner").show();	    
});


$j('#btnCalendarListo').click(function(){  
     $j("#divCalendarioResponsable").hide();	    
});


$j('#setFecTrabajo').click(function(){  
    hiddenFechas.value = $j('#simpliest-usage').multiDatesPicker('getDates');   
    inputFechas.value = hiddenFechas.value; 
	if(hiddenFechas.value == ""){
       hiddenFechas.value = "#"; 
    } 	
         
  	$j("#divCalendarioResponsable").hide();	    
});


$j('#cleanFecTrabajo').click(function(){ 
    inputFechas.value = ""; 
    hiddenFechas.value = "#";       
  	$j('#simpliest-usage').multiDatesPicker('resetDates');
});


$j('#setFecEscaner').click(function(){  
    hiddenEscaner.value = $j('#calendarioEscaner').multiDatesPicker('getDates'); 
    inputEscaner.value = hiddenEscaner.value;  
    if(hiddenEscaner.value == ""){
       hiddenEscaner.value = "#"; 
    } 	
    
  	$j("#divCalendarioEscaner").hide();	    
});


$j('#cleanFecEscaner').click(function(){ 
    inputEscaner.value = ""; 
    hiddenEscaner.value = "#";       
  	$j('#calendarioEscaner').multiDatesPicker('resetDates');
});


// set a loading image
function ajax_loading_image(div) {
	$j(div).html('<img src="/img/ajax_loading.gif" alt="Ajax Loading Image"/>');
}

// remove loading image
function ajax_remove_loading_image(div) {
	$j(div).html('');
}
