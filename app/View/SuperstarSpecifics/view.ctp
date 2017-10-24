<div class="superstarSpecifics view">
<h2><?php echo __('Superstar Specific'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($superstarSpecific['SuperstarSpecific']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Superstar'); ?></dt>
		<dd>
			<?php echo $this->Html->link($superstarSpecific['Superstar']['name'], array('controller' => 'superstars', 'action' => 'view', $superstarSpecific['Superstar']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rawdeal Card Database'); ?></dt>
		<dd>
			<?php echo $this->Html->link($superstarSpecific['RawdealCardDatabase']['name'], array('controller' => 'rawdeal_card_databases', 'action' => 'view', $superstarSpecific['RawdealCardDatabase']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($superstarSpecific['SuperstarSpecific']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($superstarSpecific['SuperstarSpecific']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($superstarSpecific['SuperstarSpecific']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($superstarSpecific['SuperstarSpecific']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Superstar Specific'), array('action' => 'edit', $superstarSpecific['SuperstarSpecific']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Superstar Specific'), array('action' => 'delete', $superstarSpecific['SuperstarSpecific']['id']), array(), __('Are you sure you want to delete # %s?', $superstarSpecific['SuperstarSpecific']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Superstar Specifics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Superstar Specific'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Superstars'), array('controller' => 'superstars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Superstar'), array('controller' => 'superstars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawdeal Card Databases'), array('controller' => 'rawdeal_card_databases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawdeal Card Database'), array('controller' => 'rawdeal_card_databases', 'action' => 'add')); ?> </li>
	</ul>
</div>
