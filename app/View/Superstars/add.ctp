<?php echo $this->element('cabecera');?>
<div class="superstars form">
<?php echo $this->Form->create('Superstar'); ?>
	<fieldset>
		<legend><?php echo __('Add Superstar'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('hand_size');
		echo $this->Form->input('superstar_value');
		echo $this->Form->input('superstar_ability');
		echo $this->Form->input('trait');
		echo $this->Form->input('image_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Superstars'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
	</ul>
</div>
