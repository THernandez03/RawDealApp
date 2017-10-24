<?php echo $this->element('cabecera');?>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Mis Datos'); ?></legend>
	<?php
		echo $this->Form->input('id');		
		echo $this->Form->input('email');
		echo $this->Form->input('nombres');	
		echo $this->Form->input('Nueva Password', array('type' => 'password', 'name' => 'data[User][password_new]', 'id' => 'password_new', 'size' => '20'));		
		echo $this->Form->input('Confirma Password', array('type' => 'password', 'name' => 'data[User][password_confirm]', 'id' => 'password_confirm', 'size' => '20'));		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

	</ul>
</div>
