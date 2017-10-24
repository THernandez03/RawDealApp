<div id="gameplayNotification">
    <p class="tdheader"> Solicitud de juego</p>
	<?php
		echo $this->Form->create('Gameplay', array('type' => 'post','action'=>'responseGameplay'));
		echo $this->Form->hidden('hiddenGameplayId', array('value'=>$gameplayId)); 
		
	    if($countReceived > 0 || $countSent > 0 ){
		   if ($countReceived > 0 ){ 
		   ?>
		   <table>
		       <tr>
			       <td colspan="2">
				   <?php
					  echo "Has recibido una solicitud de juego de ".$userReceived; 
				   ?>
				   </td>
			   </tr>
			   <tr>
                   <td>
                   <?php				   
					  echo $this->Form->submit('Aceptar', array('id'=>'searchButton')); 			  
				   ?>
                   </td>
                   <td>
                   <input type = "button" style="width: 70%;margin-top: 17px;" id = "cancelAddDeck" class = "divButtonStyle" onclick= "rejectGameplay()" value="Rechazar">
			   </tr>
		  </table>   
   <?php }
		   
			if ($countSent > 0 ){ 
			  echo $countSent." ha respondido tu solicitud de juego";   
			  echo $this->Form->submit('Aceptar', array('id'=>'searchButton'));
		   }
		}   
	   echo $this->Form->end();
	   $this->layout = 'ajax'; 
	   $this->render(false);
	?>
</div>	
<script>
   function rejectGameplay(){
   
      var hiddenGamePlayId = document.getElementById("GameplayHiddenGameplayId");
  
      $j.ajax({
      type    : 'POST',
      url     : '/rawdealApp/gameplays/rejectGameplay',
	  data: "id="+hiddenGamePlayId,
      success : function(data){                  
				     document.getElementById("gameplayNotification").style.display = "none";
				}
    }); 
   }
</script>