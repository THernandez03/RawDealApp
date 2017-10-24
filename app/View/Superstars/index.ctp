<?php echo $this->element('cabecera');?>
<style>
div.form, div.index, div.view {    
    width: 98%;
}
</style>
<div class="superstars index">
	<h2><?php echo __('Superstars'); ?></h2>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} totales, empezando por {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('trait'); ?></th>		
			<th><?php echo $this->Paginator->sort('hand_size'); ?></th>
			<th><?php echo $this->Paginator->sort('superstar_value'); ?></th>						
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($superstars as $superstar): ?>
	<tr>
		<td><?php echo h($superstar['Superstar']['name']); ?>&nbsp;</td>
				<td><?php if(h($superstar['Superstar']['trait']) !== 'empty') { 
		             echo h($superstar['Superstar']['trait']); 
				  } else {
                     echo 'Superstar'; 
                  }				  
			?>&nbsp;
		</td>	
		<td><?php echo h($superstar['Superstar']['hand_size']); ?>&nbsp;</td>
		<td><?php echo h($superstar['Superstar']['superstar_value']); ?>&nbsp;</td>					
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $superstar['Superstar']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $superstar['Superstar']['id'])); ?>			
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} totales, empezando por {:start}, terminando en {:end}')
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
