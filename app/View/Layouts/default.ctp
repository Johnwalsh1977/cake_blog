<?php
/**
 *
 *
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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h2>  Welcome to the CCT Student Forum<h2>
		
		</div>
		<div id="content">
		
			 <div id="text-align">
			 
		        <?php if ($logged_in): ?>
		            Welcome <?php echo $current_user['username']; ?> would you like to.
					<?php echo $this->Html->link('LOG-OUT', array('controller'=>'users', 'action'=>'logout')); ?>
		        <?php else: ?>
		            <?php echo $this->Html->link('You are logged out', array('controller'=>'users', 'action'=>'login')); ?>
		        <?php endif; ?>
		    </div>
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div
		<div id="footer">
			<div id ="name">
                  <h4>  John Walsh &copy; CCT CakePhP Website 2014<h4>
		</div>
	</div>
	
</body>
</html>
