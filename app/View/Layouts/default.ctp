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
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
  <head>
    <?php echo $this->Html->charset(); ?>
    <title>
      <?php echo $cakeDescription ?>:
      <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    //echo $this->Html->meta('icon');

    echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		//echo $this->Html->script('jquery-1.10.2');
		//echo $this->Html->script('bootstrap');
		//echo $this->Html->script('bootstrap.min');
		//echo $this->Html->script('metasite');
    
    
    
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
  </head>
  <body>
    <div id="container">
      <header>
        <?php echo $this->element('banner'); ?>
        <?php echo $this->element('menu'); ?>
        <?php //echo $this->element('signbutton'); ?>
        <?php echo $this->element('ariane'); ?>
        <?php echo $this->element('searchbar'); ?>
      </header>
      <div id="content">

        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
      </div>
      <footer>
        <?php
        echo $this->Html->link(
                $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
        );
        ?>
        <p>
          <?php echo $cakeVersion; ?>
        </p>
      </footer>
    </div>
  </body>
</html>
