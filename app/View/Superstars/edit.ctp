<?php echo $this->element('cabecera');?>
<div class="superstars form">
<?php echo $this->Form->create('Superstar',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Superstar'); ?></legend>
<table>	
   <tr>
     <td>			
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('hand_size');
		echo $this->Form->input('superstar_value');
		echo $this->Form->input('superstar_ability');
		echo $this->Form->input('trait');		
	?>
	</td>
	<td>
	   <?php
	     echo $this->Form->file('Document.submittedfile');
		 $this->Html->image('image_url');
		?> 
	</td>
</tr>
</table>	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Superstar.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Superstar.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Superstars'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
	</ul>
</div>
