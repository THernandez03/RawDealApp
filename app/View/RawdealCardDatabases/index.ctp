<?php echo $this->element('cabecera');?>
<style>
div.form, div.index, div.view {    
    width: 98%;
}

h2{
    padding-top: 22px;
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

<script>
    function sendForm(){
        if(document.getElementById("searchInput") != null) {
            document.getElementById("RawdealCardDatabaseIndexForm").submit();
        }
    }

    $j(".searchInput").on('keyup', function (e) {
        if (e.keyCode == 13) {
            sendForm();
        }
    });
	
	$j(document).ready(function(){
			$j('.zoomImg').zoom();
		});
</script>
<?php echo $this->Html->script('zoom-master/jquery.zoom.js'); ?>

<div class="rawdealCardDatabases index">
	<table>
	    <tr>
		   <td width="40%">
	          <h2><?php echo __('Cartas'); ?></h2>
		   </td>
		   <td>
		   <?php
   		      echo $this->Form->create('RawdealCardDatabase', array('type' => 'post','action'=>'index'));
			  echo $this->Form->input('RawdealCardDatabase.keywords',array('label' => '', 'placeholder'=> 'Buscar por nombre, texto y/o superstar','id'=>'searchInput','onblur'=>'sendForm()'));
			  echo $this->Form->submit('Buscar', array('style' => 'display:none','id'=>'searchButton')); 
			  echo $this->Form->end();
		   ?>	  
		   </td>	
        </tr>	
		<tr>
		   <td colspan="2">
		       <div class="tipsDiv"> 
			       <b>Tips de búsqueda:
			       <ul class="ulText">
				       <li> Ten en cuenta que las palabras se buscarán en el <b>nombre y texto</b> de la carta, en el <b>Text Type</b> (action, reversal, trato chain, etc) y en el trato de <b>superstar specific</b>.</li>
					   <li> Si buscas una carta en particular utiliza <b>comillas dobles</b>. ejemplo <b>"once is enough"</b></li>
					   <li> Utiliza <b>el ícono</b> <?php echo $this->Html->image('button_plus_blue.png', array('escape' => false, 'class' => 'addIcon')); ?> para agregar una carta a uno de tus mazos.</li>
				   </ul>
			   
			   </div>
		   </td>
		</tr>
    </table>		



	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} totales, empezando por {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
        $this->Paginator->options(array('url' => $this->passedArgs));
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>			
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('text_type'); ?></th>
			<th><?php echo $this->Paginator->sort('superstar'); ?></th>
			<th><?php echo $this->Paginator->sort('fortitude'); ?></th>
			<th><?php echo $this->Paginator->sort('damage'); ?></th>			
			<th>Imagen</th>	
			<th class="actions" colspan="2"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rawdealCardDatabases as $rawdealCardDatabase): ?>
	<?php if ( is_null(h($rawdealCardDatabase['RawdealCardDatabase']['image_url']))){ ?>
	<tr style="background-color:red">	
     <?php } else{?>
	<tr>
	<?php } ?>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['name']); ?>&nbsp;</td>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['text_type']); ?>&nbsp;</td>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['superstar']); ?>&nbsp;</td>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['fortitude']); ?>&nbsp;</td>
		<td><?php echo h($rawdealCardDatabase['RawdealCardDatabase']['damage']); ?>&nbsp;</td>	
		<td>
			<?php 
			    if( h($rawdealCardDatabase['RawdealCardDatabase']['image_url'])==='' ){
				    echo 'Sin Asignar';
				}else{
			?>
			    <span class="zoomImg">
			<?php
                    echo  $this->Html->image(h($rawdealCardDatabase['RawdealCardDatabase']['image_url']),array('class'=>'imgCaption')); 			 
			?>
			    </span>
            <?php			
                } 								
			?>
		</td>	
        <td id="<?php echo h($rawdealCardDatabase['RawdealCardDatabase']['id'])?>" onclick = "selectDeck(this,'index')">		
		<?php echo $this->Html->image('button_plus_blue.png', array('escape' => false, 'class' => 'addIcon')); ?>
		</td>
		<td class="actions">		   
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rawdealCardDatabase['RawdealCardDatabase']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rawdealCardDatabase['RawdealCardDatabase']['id'])); ?>			
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
        $this->Paginator->options(array('url' => $this->passedArgs));
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>    
<?php echo $this->element('addDeck',array('from'=>'index'));?>
<?php echo $this->Html->script('deckCardActivities.js'); ?>

