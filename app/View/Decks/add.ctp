<?php echo $this->element('cabecera');?>
<div class="decks form">
<?php echo $this->Form->create('Deck'); ?>
	<fieldset>
		<legend><?php echo __('New Tech'); ?></legend>
	<?php
		echo $this->Form->input('name');		
		echo $this->Form->input('superstar_id');	
		echo $this->Form->hidden('hiddenPackReversal', array('value'=>'#')); 
	?>
	
	<table style="margin-left:-8px;width:100%">
		    <tr>
			   <td class="tdformadd">
				  <?php
					echo $this->Form->input('',array(
						'label'=>'Packs',
						'type'=>'select',
						'options'=>$templateReversals,
						'name'=> 'cmbcmbPackReversal',
						'id'=> 'cmbPackReversal_id'
					));					
				  ?>
               </td>
			</tr>
            <tr id="trMuestraColaboradores" style="display:none">         			
			   <td class="tdformadd divColaboradoresAgregados">
			        <div>	    
                       <table> 
					      <tbody id="cmbAgregados_id">
						  </tbody>
                      </table>          					   
					</div>			       
			   </td>
			</tr>
       </table>			 
	
	</fieldset>

<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Decks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Superstars'), array('controller' => 'superstars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Superstar'), array('controller' => 'superstars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deck Cards'), array('controller' => 'deck_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck Card'), array('controller' => 'deck_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php echo $this->Html->script('validaActividade.js'); ?>