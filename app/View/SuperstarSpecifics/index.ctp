<div class="superstarSpecifics index">
	<h2><?php echo __('Superstar Specifics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('superstar_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rawdeal_card_database_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($superstarSpecifics as $superstarSpecific): ?>
	<tr>
		<td><?php echo h($superstarSpecific['SuperstarSpecific']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($superstarSpecific['Superstar']['name'], array('controller' => 'superstars', 'action' => 'view', $superstarSpecific['Superstar']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($superstarSpecific['RawdealCardDatabase']['name'], array('controller' => 'rawdeal_card_databases', 'action' => 'view', $superstarSpecific['RawdealCardDatabase']['id'])); ?>
		</td>
		<td><?php echo h($superstarSpecific['SuperstarSpecific']['name']); ?>&nbsp;</td>
		<td><?php echo h($superstarSpecific['SuperstarSpecific']['created']); ?>&nbsp;</td>
		<td><?php echo h($superstarSpecific['SuperstarSpecific']['description']); ?>&nbsp;</td>
		<td><?php echo h($superstarSpecific['SuperstarSpecific']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $superstarSpecific['SuperstarSpecific']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $superstarSpecific['SuperstarSpecific']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $superstarSpecific['SuperstarSpecific']['id']), array(), __('Are you sure you want to delete # %s?', $superstarSpecific['SuperstarSpecific']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Superstar Specific'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Superstars'), array('controller' => 'superstars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Superstar'), array('controller' => 'superstars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawdeal Card Databases'), array('controller' => 'rawdeal_card_databases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawdeal Card Database'), array('controller' => 'rawdeal_card_databases', 'action' => 'add')); ?> </li>
	</ul>
</div>
