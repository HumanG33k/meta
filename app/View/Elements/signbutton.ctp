<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <?php if (!$this->Session->read('Auth.User')){ ?>
    <li><?php echo $this->Html->link(__('Register'), array('controller' => 'users', 'action' => 'add')); ?></li>
    <li><?php echo $this->Html->link(__('Sign in'), array('controller' => 'users', 'action' => 'login')); ?></li>
    <li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
    <?php }else { ?>
    <li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('My Order'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit My Profile'), array('controller'=> 'users', 'action' => 'edit', AuthComponent::user('id'))); ?> </li>
    <?php }   ?>
  </ul>
   <?php   if ($this->Session->read('Auth.User') && AuthComponent::user('Role.name') === 'admin'){
    echo $this->element('admin_menu');
    } ?>
</div>