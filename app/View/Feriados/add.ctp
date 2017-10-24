<?php echo $this->element('cabecera');?>
<div class="feriados form">
<?php echo $this->Form->create('Feriado'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Feriado'); ?></legend>
	<?php
		echo $this->Form->input('fecha');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Feriados'), array('action' => 'index')); ?></li>
	</ul>
</div>
