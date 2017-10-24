<div class="superstarSpecifics form">
<?php echo $this->Form->create('SuperstarSpecific'); ?>
	<fieldset>
		<legend><?php echo __('Edit Superstar Specific'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('superstar_id');
		echo $this->Form->input('rawdeal_card_database_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SuperstarSpecific.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SuperstarSpecific.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Superstar Specifics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Superstars'), array('controller' => 'superstars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Superstar'), array('controller' => 'superstars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawdeal Card Databases'), array('controller' => 'rawdeal_card_databases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawdeal Card Database'), array('controller' => 'rawdeal_card_databases', 'action' => 'add')); ?> </li>
	</ul>
</div>
