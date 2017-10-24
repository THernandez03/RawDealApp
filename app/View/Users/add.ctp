<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Usuario'); ?></legend>
	<?php
		
		echo $this->Form->input('email');	
		echo $this->Form->input('nombres');	
		echo $this->Form->input('username');
		echo $this->Form->input('Password', array('type' => 'password', 'name' => 'data[User][password_new]', 'id' => 'password_new', 'size' => '20'));		
		echo $this->Form->input('Confirma Password', array('type' => 'password', 'name' => 'data[User][password_confirm]', 'id' => 'password_confirm', 'size' => '20'));		
	?>
	<?php	
	    $this->Form->hidden('name');
		echo $this->Html->tag('label', 'Resuelva la siguiente suma:   ', array('for' => 'inputCaptcha','style'=>'margin-left: 6px;')); 
		foreach ($captchas as $captcha): 		  
		 echo $this->Html->image($captcha['Captcha']['url1']);    
		 echo $this->Html->image('/img/captcha/suma.jpg', array('id' => 'imgSuma'));    
		 echo $this->Html->image($captcha['Captcha']['url2']); 
		 echo $this->Form->input('',array('type' => 'text', 'id' => 'inputCaptcha', 'name' => 'data[User][captcha]'));
		 echo $this->Form->hidden('codigo', array('id' => 'hiddencodigo','value' => $captcha['Captcha']['suma'])); 
		endforeach;
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>