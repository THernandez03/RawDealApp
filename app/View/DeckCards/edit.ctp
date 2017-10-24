<div class="deckCards form">
<?php echo $this->Form->create('DeckCard'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deck Card'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('deck_id');
		echo $this->Form->input('rawdeal_card_database_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DeckCard.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DeckCard.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Deck Cards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawdeal Card Databases'), array('controller' => 'rawdeal_card_databases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawdeal Card Database'), array('controller' => 'rawdeal_card_databases', 'action' => 'add')); ?> </li>
	</ul>
</div>
