

var timer, delay = 30000;

timer = setInterval(function(){
    $j.ajax({
      type    : 'POST',
      url     : '/rawdealApp/gameplays/refreshGameplay',
      success : function(data){                  
				  if(data.indexOf('solicitud') != -1){				  
					  $j('.ajax_gameplay_div').html(data);
					  document.getElementById("divGameplayNotice").style.display = "block";
					  document.getElementById("linkTopPage").click();					  
					  clearInterval(timer);					  
					  headerInterval = setInterval(function(){
					                                             var msg1 = "WWE RAW DEAL TCG";
																 var msg2 = "(1) Mensaje Nuevo";
																 
																 if(document.title == msg1){
																	$j("title").text(msg2);
																 } else {
																	$j("title").text(msg1);
																 }	 													
															},1000); 					  
					  $j(window).focus();
				  }
				}
    });
}, delay);

