<?php echo $this->element('cabecera');?>
<style>
div.form, div.index, div.view {    
    width: 98%;
}
</style>
<div class="superstars view">
<h2><?php echo __(h($superstar['Superstar']['name'])); ?></h2>
<table>	
   <tr>
     <td>
	<dl class="dlCards">

		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($superstar['Superstar']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trait'); ?></dt>
		<dd>
			<?php if(h($superstar['Superstar']['trait']) !== 'empty') { 
		             echo h($superstar['Superstar']['trait']); 
				  } else {
                     echo 'Superstar'; 
                  }				  
			?>
		</dd>
		<dt><?php echo __('Hand Size'); ?></dt>
		<dd>
			<?php echo h($superstar['Superstar']['hand_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Superstar Value'); ?></dt>
		<dd>
			<?php echo h($superstar['Superstar']['superstar_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Superstar Ability'); ?></dt>
		<dd>
			<?php echo h($superstar['Superstar']['superstar_ability']); ?>
			&nbsp;
		</dd>

	</dl>
	</td>	
	<td>
          <?php echo $this->Html->image(h($superstar['Superstar']['image_url']),array('class'=>'imgVerticalClass'));?>
		  
	</td>
  </tr>	
</table>
</div>
