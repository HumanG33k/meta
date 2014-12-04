<!--<div class=" collapse navbar-collapse">
  <ul id="admin-top-ul-rigth" class="nav navbar-nav"> -->
<?php if ($this->Session->read('Auth.User'))
{ ?>

  <li ><?php echo $this->Html->link(__('Mon Profil'), array('controller' => 'users', 'action' => 'view', AuthComponent::user('id'))); ?></li>
<?php
}
else
{
  ?>
  <li ><?php echo $this->Html->link(__('Sign in/register'), array('controller' => 'users', 'action' => 'add')); ?></li>
<?php } ?>
<!--</ul>
</div>-->