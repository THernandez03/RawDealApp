<?php echo $this->element('cabecera');?>
<div class="rawdealCardDatabases index">
	<table>
	    <tr>
		   <td width="40%">
	          <h2><?php echo __('Rawdeal Card Databases'); ?></h2>
		   </td>
		   <td>
		   <?php
   		      echo $this->Form->create('RawdealCardDatabase', array('type' => 'get','action'=>'search'));
			  echo $this->Form->input('RawdealCardDatabase.keywords',array('label' => '', 'placeholder'=> 'Buscar'));
			  echo $this->Form->end('Buscar');
		   ?>	  
		   </td>	
        </tr>	
    </table>		
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('text_type'); ?></th>
			<th><?php echo $this->Paginator->sort('fortitude'); ?></th>
			<th><?php echo $this->Paginator->sort('damage'); ?></th>			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rawdealCardDatabases as $rawdealCardDatabase): ?>
	<tr>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['id']); ?>&nbsp;</td>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['name']); ?>&nbsp;</td>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['text_type']); ?>&nbsp;</td>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['fortitude']); ?>&nbsp;</td>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['damage']); ?>&nbsp;</td>		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rawdealCardDatabase['RawdealCardDatabase']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rawdealCardDatabase['RawdealCardDatabase']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rawdealCardDatabase['RawdealCardDatabase']['id']), array(), __('Are you sure you want to delete # %s?', $rawdealCardDatabase['RawdealCardDatabase']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rawdeal Card Database'), array('action' => 'add')); ?></li>
	</ul>
</div>
