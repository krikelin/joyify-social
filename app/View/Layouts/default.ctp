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
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
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
		<div class="navbar">
			<div class="navbar-inner">
                <ul class="nav">
                    <li> <a href="<?php echo Router::Url('/')?>">Joyify</a></li>
                    <li><a href="<?php echo Router::Url('/')?>">Home</a></li>
                    <li><a href="<?php echo Router::Url('/pages/generate')?>">Generate</a></li>

                </ul>
            </div>
		</div>
	<div id="container-fluid">
		<div class="row-fluid" style="min-height:320px">
            <div class="span2 visible-desktop"></div>
            <div class="span4">

			    <?php echo $this->fetch('content'); ?>
            </div>
            <div class="span2">
                     
               
                     <img src="/img/banner.png" style="" /><br />
            </div>
        </div>
		<div class="footer" style="text-align: center" id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
            <small>Project by <a href="http://wwww.bungahack.com">@drsounds</a></small>
		</div>
	</div>
    <details>
	<?php echo $this->element('sql_dump'); ?>
    </details>
</body>
</html>
