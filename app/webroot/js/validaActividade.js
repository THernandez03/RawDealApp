tablaAgregados = document.getElementById("cmbAgregados_id");
hiddenPackReversal = document.getElementById('DeckHiddenPackReversal');

$j("#cmbPackReversal_id").change(function() {
    
	
	$j("#cmbPackReversal_id option[value="+$j("#cmbPackReversal_id").val()+"]").hide();
	
	$j("#trMuestraColaboradores").show();	
	
	tablaAgregados.innerHTML = tablaAgregados.innerHTML + "<tr id=span_"+$j("#cmbPackReversal_id").val()+"> <td class='tdformadd azulclaro'>"+ $j("#cmbPackReversal_id option:selected").text()+"<img src='/rawdealApp/img/remove.png' onclick='removerColaborador(this.id)' class='removerButton' id = "+ $j("#cmbPackReversal_id").val()+"></td></tr>";	
	hiddenPackReversal.value = hiddenPackReversal.value+$j("#cmbPackReversal_id").val()+'#';  
});


function removerColaborador(id){

    $j("#cmbPackReversal_id option[value="+id+"]").show();
	//$j("#span_"+id).hide();	
	spanColaborador = document.getElementById("span_"+id);
	tablaAgregados.removeChild(spanColaborador);
	colaboradoresValue = hiddenPackReversal.value;
    hiddenPackReversal.value = colaboradoresValue.replace(id+'#','');     
}
