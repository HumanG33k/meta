<div class="actions">
  <ul>
    <?php if ($this->Session->read('Auth.User'))
    { ?>

      <li><?php echo $this->Html->link(__('Sign in'), array('controller' => 'users', 'action' => 'login')); ?></li>
    <?php }
    else
    { ?>
      <li><?php echo $this->Html->link(__('Register'), array('controller' => 'users', 'action' => 'add')); ?></li>
  <?php } ?>
  </ul>
<?php
if ($this->Session->read('Auth.User') && AuthComponent::user('Role.name') === 'admin')
{
  echo $this->element('admin_menu');
}
?>
</div>