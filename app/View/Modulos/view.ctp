<?php echo $this->element('cabecera');?>
<div class="modulos view">
<h2><?php echo __('Modulo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gls Modulos'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['gls_modulos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($modulo['Modulo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Modulo'), array('action' => 'edit', $modulo['Modulo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modulo'), array('action' => 'delete', $modulo['Modulo']['id']), array(), __('Are you sure you want to delete # %s?', $modulo['Modulo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modulos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modulo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Menus'); ?></h3>
	<?php if (!empty($modulo['Menu'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Gls Menu'); ?></th>
		<th><?php echo __('Forward'); ?></th>
		<th><?php echo __('Modulo Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($modulo['Menu'] as $menu): ?>
		<tr>
			<td><?php echo $menu['id']; ?></td>
			<td><?php echo $menu['gls_menu']; ?></td>
			<td><?php echo $menu['forward']; ?></td>
			<td><?php echo $menu['modulo_id']; ?></td>
			<td><?php echo $menu['role_id']; ?></td>
			<td><?php echo $menu['created']; ?></td>
			<td><?php echo $menu['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menus', 'action' => 'view', $menu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menus', 'action' => 'edit', $menu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menus', 'action' => 'delete', $menu['id']), array(), __('Are you sure you want to delete # %s?', $menu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions" id="divActions">
		<ul>
			<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
