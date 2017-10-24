<div class="templateCards view">
<h2><?php echo __('Template Card'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($templateCard['TemplateCard']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($templateCard['TemplateCard']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template'); ?></dt>
		<dd>
			<?php echo $this->Html->link($templateCard['Template']['name'], array('controller' => 'templates', 'action' => 'view', $templateCard['Template']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rawdeal Card Database'); ?></dt>
		<dd>
			<?php echo $this->Html->link($templateCard['RawdealCardDatabase']['name'], array('controller' => 'rawdeal_card_databases', 'action' => 'view', $templateCard['RawdealCardDatabase']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($templateCard['TemplateCard']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($templateCard['TemplateCard']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template Card'), array('action' => 'edit', $templateCard['TemplateCard']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Template Card'), array('action' => 'delete', $templateCard['TemplateCard']['id']), array(), __('Are you sure you want to delete # %s?', $templateCard['TemplateCard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Cards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Card'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawdeal Card Databases'), array('controller' => 'rawdeal_card_databases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawdeal Card Database'), array('controller' => 'rawdeal_card_databases', 'action' => 'add')); ?> </li>
	</ul>
</div>
