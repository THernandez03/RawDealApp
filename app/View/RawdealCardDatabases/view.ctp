<?php echo $this->element('cabecera');?>
<style>
div.form, div.index, div.view {    
    width: 98%;
}

.divButtonStyle {
    text-shadow: 1px 1px 1px #3e587b;
    background-color: #537b9f;
    border-left: 1px solid #3e587b;
    background-repeat: repeat-x;
    color: #fff;
    text-shadow: rgba(0, 0, 0, 0.5) 0px -1px 0px;
    padding: 8px 10px;
	border-radius: 5px 5px 5px 5px;	
	font-size: medium;
}
</style>
<div class="rawdealCardDatabases view">
<table width="100%">
    <tr>
		  <td class="addName" id="<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['id'])?>" onclick = "selectDeck(this, 'view')"><h2><?php echo __(h($rawdealCardDatabase['RawdealCardDatabase']['name'])); ?><?php echo $this->Html->image('button_plus_blue.png', array('escape' => false, 'class' => 'addIcon', 'alt'=>'Agregar imagen')); ?></h2></td>

	</tr>
</table>
<table>	
   <tr>
     <td>
	<dl class="dlCards">   	                      			   
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text Type'); ?></dt>
		<dd>
			<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['text_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fortitude'); ?></dt>
		<dd>
			<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['fortitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Damage'); ?></dt>
		<dd>
			<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['damage']); ?>
			&nbsp;
		</dd>
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['maneuver'])) === true): ?>
		<dt><?php echo __('Maneuver'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['reversal'])) === true): ?>
		<dt><?php echo __('Reversal'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['prematch'])) === true): ?>
		<dt><?php echo __('Prematch'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['event'])) === true): ?>
		<dt><?php echo __('Event'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['title'])) === true): ?>
		<dt><?php echo __('Title'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['midmatch'])) === true): ?>
		<dt><?php echo __('Midmatch'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['hybrid'])) === true): ?>
		<dt><?php echo __('Hybrid'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>		
		<dt><?php echo __('Act Unique Text'); ?></dt>
		<dd>
			<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['act_unique_text']); ?>
			&nbsp;
		</dd>		
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['universal'])) === true): ?>
		<dt><?php echo __('Universal'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['specific_trait'])) === true): ?>
		<dt><?php echo __('Specific Trait'); ?></dt>
		<dd>			
			&nbsp;
		</dd>		
		<dt><?php echo __('Superstar'); ?></dt>
		<dd>
			<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['superstar']); ?>
			&nbsp;
		</dd>
		<?php endif; ?>	
		<dt><?php echo __('Set Edition'); ?></dt>
		<dd>
			<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['set_edition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['text']); ?>
			&nbsp;
		</dd>
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['backstage'])) === true): ?>
		<dt><?php echo __('Backstage'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['ace'])) === true): ?>
		<dt><?php echo __('Ace'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['venue'])) === true): ?>
		<dt><?php echo __('Venue'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['feud'])) === true): ?>
		<dt><?php echo __('Feud'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['stipulation'])) === true): ?>
		<dt><?php echo __('Stipulation'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['manager'])) === true): ?>
		<dt><?php echo __('Manager'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['object'])) === true): ?>
		<dt><?php echo __('Object'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['ppv'])) === true): ?>
		<dt><?php echo __('Ppv'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['stun'])) === true): ?>
		<dt><?php echo __('Stun'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['action'])) === true): ?>
		<dt><?php echo __('Action'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['strike'])) === true): ?>
		<dt><?php echo __('Strike'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['grapple'])) === true): ?>
		<dt><?php echo __('Grapple'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['submission'])) === true): ?>
		<dt><?php echo __('Submission'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['highrisk'])) === true): ?>
		<dt><?php echo __('Highrisk'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['trademark'])) === true): ?>
		<dt><?php echo __('Trademark'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['enforcer'])) === true): ?>
		<dt><?php echo __('Enforcer'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['face'])) === true): ?>
		<dt><?php echo __('Face'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['heel'])) === true): ?>
		<dt><?php echo __('Heel'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['runin'])) === true): ?>
		<dt><?php echo __('Runin'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['foreign_object'])) === true): ?>
		<dt><?php echo __('Foreign'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['setup'])) === true): ?>
		<dt><?php echo __('Setup'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['chain'])) === true): ?>
		<dt><?php echo __('Chain'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['heat'])) === true): ?>
		<dt><?php echo __('Heat'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['bash'])) === true): ?>
		<dt><?php echo __('Bash'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['volley'])) === true): ?>
		<dt><?php echo __('Volley'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['active'])) === true): ?>
		<dt><?php echo __('Active'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['universal_active'])) === true): ?>
		<dt><?php echo __('Universal Active'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['raw'])) === true): ?>
		<dt><?php echo __('Raw'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['smackdown'])) === true): ?>
		<dt><?php echo __('Smackdown'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['ff'])) === true): ?>
		<dt><?php echo __('Ff'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['cheater'])) === true): ?>
		<dt><?php echo __('Cheater'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['multi'])) === true): ?>
		<dt><?php echo __('Multi'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['rms'])) === true): ?>
		<dt><?php echo __('Rms'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['permanent'])) === true): ?>
		<dt><?php echo __('Permanent'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['throwback'])) === true): ?>
		<dt><?php echo __('Throwback'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
		<?php if ((h($rawdealCardDatabase['RawdealCardDatabase']['tag'])) === true): ?>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>			
			&nbsp;
		</dd>
		<?php endif; ?>	
	</dl>
  </td>	
	<td>
          <?php
               $imageClass = null;
               if (h($rawdealCardDatabase['RawdealCardDatabase']['prematch'])=== true || h($rawdealCardDatabase['RawdealCardDatabase']['midmatch']) ===true ){
                    $imageClass = 'imgHorizonClass';
               } else {
			        $imageClass = 'imgVerticalClass';
			   } 
			   
		       echo $this->Html->image(h($rawdealCardDatabase['RawdealCardDatabase']['image_url']),array('class'=>$imageClass));
		  ?>
	</td>
  </tr>	
</table>	
</div>
<?php echo $this->element('addDeck',array('from'=>'view'));?>
<?php echo $this->Html->script('deckCardActivities.js'); ?>
