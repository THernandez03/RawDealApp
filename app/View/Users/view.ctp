<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Role']['gls_roles'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut'); ?></dt>
		<dd>
			<?php echo h($user['User']['rut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut Dv'); ?></dt>
		<dd>
			<?php echo h($user['User']['rut_dv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido M'); ?></dt>
		<dd>
			<?php echo h($user['User']['apellido_m']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido P'); ?></dt>
		<dd>
			<?php echo h($user['User']['apellido_p']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flg Habilitado'); ?></dt>
		<dd>
			<?php echo h($user['User']['flg_habilitado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicio Saluds'), array('controller' => 'servicio_saluds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio Salud'), array('controller' => 'servicio_saluds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postulaciones'), array('controller' => 'postulaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postulacione'), array('controller' => 'postulaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Postulaciones'); ?></h3>
	<?php if (!empty($user['Postulacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Servicio Salud Id'); ?></th>
		<th><?php echo __('Area Dpto Unidad'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Is Patrocinada'); ?></th>
		<th><?php echo __('Is Asociacion Func'); ?></th>
		<th><?php echo __('Fec Ini'); ?></th>
		<th><?php echo __('Fec Fin'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Is Vigente'); ?></th>
		<th><?php echo __('Motivo No Vigente'); ?></th>
		<th><?php echo __('Is Mejora Calidad'); ?></th>
		<th><?php echo __('Is Mejora Eficiencia'); ?></th>
		<th><?php echo __('Problematica'); ?></th>
		<th><?php echo __('Situacion Previa'); ?></th>
		<th><?php echo __('Objetivos'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Situacion Posterior'); ?></th>
		<th><?php echo __('Beneficios'); ?></th>
		<th><?php echo __('Mecanismo Medicion'); ?></th>
		<th><?php echo __('Resultados Indicador'); ?></th>
		<th><?php echo __('Costos'); ?></th>
		<th><?php echo __('Hallazgos'); ?></th>
		<th><?php echo __('Exito'); ?></th>
		<th><?php echo __('Lecciones Aprendidas'); ?></th>
		<th><?php echo __('Establecimiento'); ?></th>
		<th><?php echo __('Url Adjunto'); ?></th>
		<th><?php echo __('Is Habilitado'); ?></th>
		<th><?php echo __('Est Postulacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Postulacione'] as $postulacione): ?>
		<tr>
			<td><?php echo $postulacione['id']; ?></td>
			<td><?php echo $postulacione['name']; ?></td>
			<td><?php echo $postulacione['servicio_salud_id']; ?></td>
			<td><?php echo $postulacione['area_dpto_unidad']; ?></td>
			<td><?php echo $postulacione['user_id']; ?></td>
			<td><?php echo $postulacione['is_patrocinada']; ?></td>
			<td><?php echo $postulacione['is_asociacion_func']; ?></td>
			<td><?php echo $postulacione['fec_ini']; ?></td>
			<td><?php echo $postulacione['fec_fin']; ?></td>
			<td><?php echo $postulacione['created']; ?></td>
			<td><?php echo $postulacione['modified']; ?></td>
			<td><?php echo $postulacione['is_vigente']; ?></td>
			<td><?php echo $postulacione['motivo_no_vigente']; ?></td>
			<td><?php echo $postulacione['is_mejora_calidad']; ?></td>
			<td><?php echo $postulacione['is_mejora_eficiencia']; ?></td>
			<td><?php echo $postulacione['problematica']; ?></td>
			<td><?php echo $postulacione['situacion_previa']; ?></td>
			<td><?php echo $postulacione['objetivos']; ?></td>
			<td><?php echo $postulacione['descripcion']; ?></td>
			<td><?php echo $postulacione['situacion_posterior']; ?></td>
			<td><?php echo $postulacione['beneficios']; ?></td>
			<td><?php echo $postulacione['mecanismo_medicion']; ?></td>
			<td><?php echo $postulacione['resultados_indicador']; ?></td>
			<td><?php echo $postulacione['costos']; ?></td>
			<td><?php echo $postulacione['hallazgos']; ?></td>
			<td><?php echo $postulacione['exito']; ?></td>
			<td><?php echo $postulacione['lecciones_aprendidas']; ?></td>
			<td><?php echo $postulacione['establecimiento']; ?></td>
			<td><?php echo $postulacione['url_adjunto']; ?></td>
			<td><?php echo $postulacione['is_habilitado']; ?></td>
			<td><?php echo $postulacione['est_postulacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'postulaciones', 'action' => 'view', $postulacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'postulaciones', 'action' => 'edit', $postulacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postulaciones', 'action' => 'delete', $postulacione['id']), array(), __('Are you sure you want to delete # %s?', $postulacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions" id="divActions">
		<ul>
			<li><?php echo $this->Html->link(__('New Postulacione'), array('controller' => 'postulaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
