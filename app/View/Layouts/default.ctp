<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>

<?php echo $this->Html->script('jquery.min'); ?>
<?php echo $this->Html->css('jquery.mobile');?>
<?php echo $this->Html->script('jquery-ui-1.11.1.js'); ?>


<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		WWE RAW DEAL TCG
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');				
        echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		    <A name="top"></A>
			<A href="#top" id="linkTopPage" style="display:none"></A>
			<?php echo $this->Html->image('header.jpg', array('id'=>'logoHeader')); ?>			
		</div>
		<div class="input select ajax_gameplay_div" id="divGameplayNotice"></div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>		
	</div>
	<div id="footer">
	      WWE All rights reserved - WWE Todos los Derechos reservados
	</div>
	
</body>
<div>
			<div  data-role="navbar" class="ui-navbar ui-mini" role="navigation" id="submenuResponsivo">
				<ul class="ui-grid-d">					
									
				</ul>
			</div><!-- /navbar -->
</div>

</html>
