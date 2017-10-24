<?php echo $this->element('cabecera');?>
<div class="feriados view">
<h2><?php echo __('Feriado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($feriado['Feriado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($feriado['Feriado']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($feriado['Feriado']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Feriado'), array('action' => 'edit', $feriado['Feriado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Feriado'), array('action' => 'delete', $feriado['Feriado']['id']), array(), __('Are you sure you want to delete # %s?', $feriado['Feriado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Feriados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feriado'), array('action' => 'add')); ?> </li>
	</ul>
</div>
