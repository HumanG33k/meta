<nav>
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Forum'), array('controller' => 'forums', 'action' => 'index')); ?> </li> 

    <?php if ($this->Session->read('Auth.User'))
    { ?>
      <li><?php echo $this->Html->link(__('Edit My Profile'), array('controller' => 'users', 'action' => 'edit', AuthComponent::user('id'))); ?> </li>
<?php } ?>
  </ul>

</nav>