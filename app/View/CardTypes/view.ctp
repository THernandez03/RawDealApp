<div class="cardTypes view">
<h2><?php echo __('Card Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cardType['CardType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cardType['CardType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cardType['CardType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($cardType['CardType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cardType['CardType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Card Type'), array('action' => 'edit', $cardType['CardType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Card Type'), array('action' => 'delete', $cardType['CardType']['id']), array(), __('Are you sure you want to delete # %s?', $cardType['CardType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Templates'); ?></h3>
	<?php if (!empty($cardType['Template'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Card Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cardType['Template'] as $template): ?>
		<tr>
			<td><?php echo $template['id']; ?></td>
			<td><?php echo $template['name']; ?></td>
			<td><?php echo $template['card_type_id']; ?></td>
			<td><?php echo $template['created']; ?></td>
			<td><?php echo $template['description']; ?></td>
			<td><?php echo $template['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'templates', 'action' => 'view', $template['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'templates', 'action' => 'edit', $template['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'templates', 'action' => 'delete', $template['id']), array(), __('Are you sure you want to delete # %s?', $template['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions" id="divActions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template'), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
