<?php echo $this->element('cabecera');?>
<style>
div.form, div.index, div.view {    
    width: 98%;
}
</style>
<div class="decks view">
<h2><?php echo __(h($deck['Deck']['name'])); ?></h2>

 <div class="tipsDiv"> 
			       <b>Tips:
			       <ul class="ulText">
				       <li> Usa el buscador del navegador <b>(CTRL + F)</b> para encontrar cartas que agregaste recientemente o cartas que quieras eliminar.</li>
					   
				   </ul>
			   
			   </div>
<table style="width:100%">
   <tr>
      <td>
	<dl>
		<dt><?php echo __('Superstar'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deck['Superstar']['name'], array('controller' => 'superstars', 'action' => 'view', $deck['Superstar']['id'])); ?>
			&nbsp;
		</dd>    
		<dt><?php echo __('Fecha Creación'); ?></dt>
		<dd>
			<?php echo h($deck['Deck']['created']); ?>
			&nbsp;
		</dd>    
		<dt><?php echo __('Backstage:'); ?></dt>
		<dd>
			<?php echo h($countBackstage); ?>
			&nbsp;
		</dd>   		
		<dt><?php echo __('Prematch:'); ?></dt>
		<dd>
			<?php echo h($countPrematch); ?>
			&nbsp;
		</dd>   
		<dt><?php echo __('Midmatch:'); ?></dt>
		<dd>
			<?php echo h($countMidmatch); ?>
			&nbsp;
		</dd>  
        <dt><?php echo __('Híbridas Backlash:'); ?></dt>
		<dd>
			<?php echo h($countBacklashHybrid); ?>
			&nbsp;
		</dd>  	
		<dt><?php echo __('Total Backlash:'); ?></dt>
		<dd>
			<?php echo h($countBacklash); ?>
			&nbsp;
		</dd>  
		<dt><?php echo __('Total Arsenal:'); ?></dt>		
		<dd>
			<?php echo h($countArsenal); ?>
			&nbsp;
		</dd>  				
		
	</dl>		
      </td>
      <td>
          <?php echo $this->Html->image($deck['Superstar']['image_url'],array('class'=>'imgVerticalClass'));?> 
      </td>
   </tr> 
<table>
	
</div>

<div class="related">
	<h3><?php echo __('Cartas del mazo'); ?></h3>
	
		<h3 class="tdheader"><?php echo __('Backstage')." (".  h($countBackstage).")"; ?></h3>
		
		<table cellpadding = "0" cellspacing = "0" class="prematch">
		<?php foreach ($backstage as $deckCard): ?>	
			<tr class="prematch">			
				<td><?php echo $this->Html->link($deckCard['ViewDeckCard']['card_name'],  array('controller' => 'rawdeal_card_databases', 'action' => 'view', $deckCard['ViewDeckCard']['card_id']),array('class'=>'prematch')); ?></td>
				<td><?php echo $deckCard['ViewDeckCard']['text_type']; ?></td>			
				<td class="actions">					
					<?php echo $this->Form->postLink(__('Quitar'), array('controller' => 'deck_cards', 'action' => 'delete', $deckCard['ViewDeckCard']['deck_cards_id']), array(), __('Seguro que quieres quitar una copia de %s?', $deckCard['ViewDeckCard']['card_name'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	
		<h3 class="tdheader"><?php echo __('Prematch')." (".  h($countPrematch).")"; ?></h3>
		
		<table cellpadding = "0" cellspacing = "0" class="prematch">
		<?php foreach ($prematch as $deckCard): ?>	
			<tr class="prematch">			
				<td><?php echo $this->Html->link($deckCard['ViewDeckCard']['card_name'],  array('controller' => 'rawdeal_card_databases', 'action' => 'view', $deckCard['ViewDeckCard']['card_id']),array('class'=>'prematch')); ?></td>
				<td><?php echo $deckCard['ViewDeckCard']['text_type']; ?></td>			
				<td class="actions">					
					<?php echo $this->Form->postLink(__('Quitar'), array('controller' => 'deck_cards', 'action' => 'delete', $deckCard['ViewDeckCard']['deck_cards_id']), array(), __('Seguro que quieres quitar una copia de %s?', $deckCard['ViewDeckCard']['card_name'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

	
		<h3 class="tdheader"><?php echo __('Midmatch')." (".  h($countMidmatch).")"; ?></h3>
		
		<table cellpadding = "0" cellspacing = "0" class="hybridAll">
		<?php foreach ($midmatch as $deckCard): ?>	
			<tr>			
				<td><?php echo $this->Html->link($deckCard['ViewDeckCard']['card_name'],  array('controller' => 'rawdeal_card_databases', 'action' => 'view', $deckCard['ViewDeckCard']['card_id'])); ?></td>
				<td><?php echo $deckCard['ViewDeckCard']['text_type']; ?></td>			
				<td class="actions">					
					<?php echo $this->Form->postLink(__('Quitar'), array('controller' => 'deck_cards', 'action' => 'delete', $deckCard['ViewDeckCard']['deck_cards_id']), array(), __('Seguro que quieres quitar una copia de %s?', $deckCard['ViewDeckCard']['card_name'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>


		<h3 class="tdheader"><?php echo __('Híbridas backlash (prematch/midmatch')." (".  h($countBacklashHybrid).")"; ?></h3>
		
		<table cellpadding = "0" cellspacing = "0" class="hybridBacklash">
		<?php foreach ($backlashHybrid as $deckCard): ?>	
			<tr class="hybridBacklash">			
				<td><?php echo $this->Html->link($deckCard['ViewDeckCard']['card_name'],  array('controller' => 'rawdeal_card_databases', 'action' => 'view', $deckCard['ViewDeckCard']['card_id']),array('class'=>'hybridBacklash')); ?></td>
				<td><?php echo $deckCard['ViewDeckCard']['text_type']; ?></td>			
				<td class="actions">					
					<?php echo $this->Form->postLink(__('Quitar'), array('controller' => 'deck_cards', 'action' => 'delete', $deckCard['ViewDeckCard']['deck_cards_id']), array(), __('Seguro que quieres quitar una copia de %s?', $deckCard['ViewDeckCard']['card_name'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<h3 class="tdheader"><?php echo __('Arsenal')." (".  h($countArsenal).")"; ?></h3>
		
		<table cellpadding = "0" cellspacing = "0" class="arsenal">
		<?php foreach ($viewDeckCards as $deckCard): ?>	
			<tr>			
				<td><?php echo $this->Html->link($deckCard['ViewDeckCard']['card_name'],  array('controller' => 'rawdeal_card_databases', 'action' => 'view', $deckCard['ViewDeckCard']['card_id'])); ?></td>
				<td><?php echo $deckCard['ViewDeckCard']['text_type']; ?></td>			
				<td class="actions">
                    <?php echo $this->Form->postLink(__('Remove'), array('controller' => 'deck_cards', 'action' => 'delete', $deckCard['ViewDeckCard']['deck_cards_id']), array(), __('Seguro que quieres quitar una copia de %s?', $deckCard['ViewDeckCard']['card_name'])); ?>				
					<?php echo $this->Form->postLink(__('Another One'), array('controller' => 'deck_cards', 'action' => 'anotherOne', $deckCard['ViewDeckCard']['deck_cards_id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
</div>
