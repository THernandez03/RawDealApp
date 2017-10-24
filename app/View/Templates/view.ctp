<div class="templates view">
<h2><?php echo __('Template'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($template['Template']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($template['Template']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($template['CardType']['name'], array('controller' => 'card_types', 'action' => 'view', $template['CardType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($template['Template']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($template['Template']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($template['Template']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template'), array('action' => 'edit', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Template'), array('action' => 'delete', $template['Template']['id']), array(), __('Are you sure you want to delete # %s?', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Types'), array('controller' => 'card_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Type'), array('controller' => 'card_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Cards'), array('controller' => 'template_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Card'), array('controller' => 'template_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Template Cards'); ?></h3>
	<?php if (!empty($template['TemplateCard'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Template Id'); ?></th>
		<th><?php echo __('Rawdeal Card Database Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($template['TemplateCard'] as $templateCard): ?>
		<tr>
			<td><?php echo $templateCard['id']; ?></td>
			<td><?php echo $templateCard['name']; ?></td>
			<td><?php echo $templateCard['template_id']; ?></td>
			<td><?php echo $templateCard['rawdeal_card_database_id']; ?></td>
			<td><?php echo $templateCard['created']; ?></td>
			<td><?php echo $templateCard['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'template_cards', 'action' => 'view', $templateCard['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'template_cards', 'action' => 'edit', $templateCard['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'template_cards', 'action' => 'delete', $templateCard['id']), array(), __('Are you sure you want to delete # %s?', $templateCard['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions" id="divActions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template Card'), array('controller' => 'template_cards', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
