<div class="deckCards view">
<h2><?php echo __('Deck Card'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deckCard['DeckCard']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($deckCard['DeckCard']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deck'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deckCard['Deck']['name'], array('controller' => 'decks', 'action' => 'view', $deckCard['Deck']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rawdeal Card Database'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deckCard['RawdealCardDatabase']['name'], array('controller' => 'rawdeal_card_databases', 'action' => 'view', $deckCard['RawdealCardDatabase']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($deckCard['DeckCard']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($deckCard['DeckCard']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deck Card'), array('action' => 'edit', $deckCard['DeckCard']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deck Card'), array('action' => 'delete', $deckCard['DeckCard']['id']), array(), __('Are you sure you want to delete # %s?', $deckCard['DeckCard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deck Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawdeal Card Databases'), array('controller' => 'rawdeal_card_databases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawdeal Card Database'), array('controller' => 'rawdeal_card_databases', 'action' => 'add')); ?> </li>
	</ul>
</div>
