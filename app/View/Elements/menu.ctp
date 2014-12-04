<nav class="collapse navbar-collapse">
  <ul id="admin-top-ul-left" class="nav navbar-nav">
    <li><?php echo $this->Html->link(__('News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Forum'), array('controller' => 'forums', 'action' => 'index')); ?> </li> 
    <?php
    if ($this->Session->read('Auth.User') && AuthComponent::user('Role.name') === 'admin')
    {
      ?>
      <li><?php echo $this->Html->link(__('Administration'), array('controller' => 'admins', 'action' => 'index')); ?> </li> 
    <?php }
    ?>
      <?php echo $this->element('signbutton'); ?>
  </ul>
</nav>


