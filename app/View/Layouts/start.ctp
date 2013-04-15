<?php
/**
 *
 * PHP 5
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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="http://oexchange.org/spec/0.8/rel/related-target" type="application/xrd+xml" href="http://joyify.cobresia.webfactional.com/oexchange.xrd"/>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="og:title" content="Joyify" />
	<meta name="og:description" content="Joyify is a minimal ocial networking site, not to take over the world but to make a minimialistic social networking platform" />
	<meta name="og:image" content="http://joyify.cobresia.webfactional.com/img/joyify.png" />
    <script type="text/javascript">
        var APPDOMAIN = '<?php echo Configure::read("siteDomain")?>';
    </script>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('joy');
		echo $this->Html->script('joy');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
  
</head>
<body>
		<div id="container-fluid">

		<?php echo $this->element('menu');?>
	<div id="container-fluid">
		<div class="row-fluid" style="min-height:320px">
            <div class="span2 visible-desktop"></div>
            <div class="span8">

			    <?php echo $this->fetch('content'); ?>
            </div>
           
        </div>
        <div class="row-fluid" style="">
            <div class="span2 visible-desktop"></div>
            
		    <?php echo $this->element('footer');?>

	</div>

    <details>
 <?php echo $this->Html->link(
					    $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					    'http://www.cakephp.org/',
					    array('target' => '_blank', 'escape' => false)
				    );
			    ?>
	<?php echo $this->element('sql_dump'); ?>
    </details>
   
</body>
</html>
