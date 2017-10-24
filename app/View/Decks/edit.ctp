<?php echo $this->element('cabecera');?>
<div class="decks form">
<?php echo $this->Form->create('Deck'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deck'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('superstar_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Deck.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Deck.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Superstars'), array('controller' => 'superstars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Superstar'), array('controller' => 'superstars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deck Cards'), array('controller' => 'deck_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck Card'), array('controller' => 'deck_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
