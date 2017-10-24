<?php echo $this->Html->script('jquery.min.js'); ?>
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


<?php echo $this->Html->script('responsivemobilemenu.js'); ?>
<?php echo $this->Html->css('responsivemobilemenu.css');?>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>


<body>
		
		<div class="rmm" data-menu-style = "sapphire">
		
		    <ul id="ulMenu" >               
				
            </ul>

        </div>
		
		<div id="divBienvenida">		  
		       Bienvenido <b><?php echo $name?>	</b>	   
			   <p>
			     <ul>
			       <li> En la sección <b>Mis mazos</b> podrás crear mazos eligiendo una superestrella.
			       <li> En la sección <b>Cartas</b> del menú podrás ver TODAS las cartas de la edición clásica del juego y agregarlas a un mazo previamente creado.				  
				 </ul>  
			   </p>
			    
		</div>
</body>





