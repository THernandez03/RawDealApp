<div class="templateCards index">
	<h2><?php echo __('Template Cards'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('template_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rawdeal_card_database_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($templateCards as $templateCard): ?>
	<tr>
		<td><?php echo h($templateCard['TemplateCard']['id']); ?>&nbsp;</td>
		<td><?php echo h($templateCard['TemplateCard']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($templateCard['Template']['name'], array('controller' => 'templates', 'action' => 'view', $templateCard['Template']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($templateCard['RawdealCardDatabase']['name'], array('controller' => 'rawdeal_card_databases', 'action' => 'view', $templateCard['RawdealCardDatabase']['id'])); ?>
		</td>
		<td><?php echo h($templateCard['TemplateCard']['created']); ?>&nbsp;</td>
		<td><?php echo h($templateCard['TemplateCard']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $templateCard['TemplateCard']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $templateCard['TemplateCard']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $templateCard['TemplateCard']['id']), array(), __('Are you sure you want to delete # %s?', $templateCard['TemplateCard']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Template Card'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawdeal Card Databases'), array('controller' => 'rawdeal_card_databases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawdeal Card Database'), array('controller' => 'rawdeal_card_databases', 'action' => 'add')); ?> </li>
	</ul>
</div>
