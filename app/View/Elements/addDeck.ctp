	<div id="selectDeck" style="display:none">
	<?php echo $this->Form->create('Deck', array('type' => 'post','action'=>'addCardsToDeck')); ?>
	<?php echo $this->Form->hidden('cardId', array('id'=>'hiddenCardId')); ?> 
	<?php echo $this->Form->hidden('keywordValue', array('id'=>'hiddenKeyword')); ?>
		
	<?php 
	    if($from == "index"){
			 echo $this->Form->hidden('pageValue', array('id'=>'pageValue','value'=>$this->Paginator->counter(array(
			'format' => __('{:page}'))))); 
		}	
	?>  
	
		<table>
		<tr>
		   <td colspan="2" class="tdheader">
		       Agregar Cartas al Mazo
		   </td>
		</tr>   
		   <tr>
			  <td>
				 Mazo:
			  </td>
			  <td>
				<select class="spanForm" name="data[Deck][id]">
				<?php
				   foreach ($decks as $deck): 
					  echo "<option value='".$deck['Deck']['id']."'>".$deck['Deck']['name']."</option>";        
				   endforeach;				   
				?>
				</select>
			  </td>			 
			</tr>
			<tr>
			   <td>
			       Cantidad: 
			   </td>
			   <td>
			       <?php echo $this->Form->input('cantidadCards', array('label'=>'','type' => 'text','id' => 'cantidadCards', 'value'=>'1'));?>
			   </td>
			</tr>
			<tr>
				 <td>					
					<?php echo $this->Form->end('Agregar'); ?>
				 </td>
                 <td>				 
			    	<input type = "button" style="width: 50%;margin-top: 17px;" id = "cancelAddDeck" class = "divButtonStyle" onclick= "cancelAddCards()" value="Cancelar">
				 </td>
			</tr>				
		</table>	
	</div>