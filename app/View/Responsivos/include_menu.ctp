
<?php echo $this->Html->script('menu.js'); ?>
<script>

$( document ).ready(function() {
     
	 phpVars = new Array();
	
	<?php 
	                    $i = 0;
						
						foreach ($menu as $estado): 
						
						   
						   echo 'var menu = new menuValores('. json_encode($estado['Menu']['gls_menu']).','.json_encode($estado['Menu']['forward']).','.json_encode($estado['Menu']['modulo_id']).');';
						   
						   echo 'phpVars.push(menu);';
						
						endforeach; 
				   
				 ?>;
				 

	
	localStorage.setItem("menuAplicacion", JSON.stringify(phpVars));

   

	
});

</script>

