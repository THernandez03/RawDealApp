<div class="gameplays view">
<h2><?php echo __('Gameplay'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gameplay['Gameplay']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($gameplay['Gameplay']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User1 Id'); ?></dt>
		<dd>
			<?php echo h($gameplay['Gameplay']['user1_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gameplay['User']['name'], array('controller' => 'users', 'action' => 'view', $gameplay['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deck1 Id'); ?></dt>
		<dd>
			<?php echo h($gameplay['Gameplay']['deck1_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deck'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gameplay['Deck']['name'], array('controller' => 'decks', 'action' => 'view', $gameplay['Deck']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($gameplay['Gameplay']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($gameplay['Gameplay']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gameplay'), array('action' => 'edit', $gameplay['Gameplay']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gameplay'), array('action' => 'delete', $gameplay['Gameplay']['id']), array(), __('Are you sure you want to delete # %s?', $gameplay['Gameplay']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gameplays'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gameplay'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
	</ul>
</div>
