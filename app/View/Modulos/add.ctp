<?php echo $this->element('cabecera');?>
<div class="modulos form">
<?php echo $this->Form->create('Modulo'); ?>
	<fieldset>
		<legend><?php echo __('Add Modulo'); ?></legend>
	<?php
		echo $this->Form->input('gls_modulos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Modulos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
