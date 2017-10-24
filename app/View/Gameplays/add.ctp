<div class="gameplays form">
<?php echo $this->Form->create('Gameplay'); ?>
	<fieldset>
		<legend><?php echo __('Add Gameplay'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('user1_id');
		echo $this->Form->input('user2_id');
		echo $this->Form->input('deck1_id');
		echo $this->Form->input('deck2_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Gameplays'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
	</ul>
</div>
