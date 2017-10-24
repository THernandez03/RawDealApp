<div class="templates form">
<?php echo $this->Form->create('Template'); ?>
	<fieldset>
		<legend><?php echo __('Add Template'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('card_type_id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Templates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Card Types'), array('controller' => 'card_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Type'), array('controller' => 'card_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Cards'), array('controller' => 'template_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Card'), array('controller' => 'template_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
