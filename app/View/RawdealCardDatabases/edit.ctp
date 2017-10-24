<?php echo $this->element('cabecera');?>
<div class="rawdealCardDatabases form">
<?php echo $this->Form->create('RawdealCardDatabase',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Rawdeal Card Database'); ?></legend>
<table>	
   <tr>
     <td>		
	<?php	    
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('text_type');
		echo $this->Form->input('fortitude');
		echo $this->Form->input('damage');
		echo $this->Form->input('maneuver');
		echo $this->Form->input('reversal');
		echo $this->Form->input('prematch');
		echo $this->Form->input('event');
		echo $this->Form->input('title');
		echo $this->Form->input('midmatch');
		echo $this->Form->input('hybrid');
		echo $this->Form->input('act_unique_text');
		echo $this->Form->input('unique_trait');
		echo $this->Form->input('universal');
		echo $this->Form->input('specific_trait');
		echo $this->Form->input('superstar');
		echo $this->Form->input('set_edition');
		echo $this->Form->input('text');
		echo $this->Form->input('backstage');
		echo $this->Form->input('afterburn');
		echo $this->Form->input('ace');
		echo $this->Form->input('venue');
		echo $this->Form->input('feud');
		echo $this->Form->input('stipulation');
		echo $this->Form->input('manager');
		echo $this->Form->input('object');
		echo $this->Form->input('ppv');
		echo $this->Form->input('stun');
		echo $this->Form->input('action');
		echo $this->Form->input('strike');
		echo $this->Form->input('grapple');
		echo $this->Form->input('submission');
		echo $this->Form->input('highrisk');
		echo $this->Form->input('trademark');
		echo $this->Form->input('enforcer');
		echo $this->Form->input('face');
		echo $this->Form->input('heel');
		echo $this->Form->input('runin');
		echo $this->Form->input('foreign_object');
		echo $this->Form->input('setup');
		echo $this->Form->input('chain');
		echo $this->Form->input('heat');
		echo $this->Form->input('bash');
		echo $this->Form->input('volley');
		echo $this->Form->input('active');
		echo $this->Form->input('universal_active');
		echo $this->Form->input('raw');
		echo $this->Form->input('smackdown');
		echo $this->Form->input('ff');
		echo $this->Form->input('cheater');
		echo $this->Form->input('multi');
		echo $this->Form->input('rms');
		echo $this->Form->input('permanent');
		echo $this->Form->input('throwback');
		echo $this->Form->input('tag');		
	?>
	</td>
	<td>
	   <?php
	     echo $this->Form->file('Document.submittedfile');
		 echo $this->Html->image('image_url');
		?> 
	</td>
</tr>
</table>	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions" id="divActions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RawdealCardDatabase.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('RawdealCardDatabase.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rawdeal Card Databases'), array('action' => 'index')); ?></li>
	</ul>
</div>
