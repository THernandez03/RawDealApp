<?php echo $this->element('cabecera');?>
<style>
div.form, div.index, div.view {    
    width: 98%;
}
</style>
<div class="gameplays index">
	<h2><?php echo __('Jugar'); ?></h2>
<?php echo $this->Form->create('Gameplay', array('type' => 'post','action'=>'index'));	 ?>
	<table>
		<tr>
		    <td>
			   Escoge uno de tus mazos:
			</td>
            <td>
			   Elige a tu oponente:
			</td>			
		</tr>
		<tr>
            <td>		
				<select class="spanForm" name="data[Gameplay][deck1_id]">
				<?php
				   foreach ($decks as $deck): 
					  echo "<option value='".$deck['Deck']['id']."'>".$deck['Deck']['name']."</option>";        
				   endforeach; 
				?>			
				</select>	
			</td>	
			<td>	
				<select class="spanForm" name="data[Gameplay][user2_id]">
				<?php
				   foreach ($users as $user):  
					  echo "<option value='".$user['User']['id']."'>".$user['User']['name']."</option>";        
				   endforeach; 
				?>
				</select>
			</td>	
		<tr>
		    <td colspan="2">
			    <?php echo $this->Form->submit('Enviar Solicitud', array('id'=>'searchButton')); ?>
			</td>
		</tr>		
        </tr>			
    </table>	
<?php echo $this->Form->end(); ?>
</div>	
