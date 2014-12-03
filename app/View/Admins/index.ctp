<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>

    <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Threads'), array('controller' => 'threads', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Thread'), array('controller' => 'threads', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Ips'), array('controller' => 'ips', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Ip'), array('controller' => 'ips', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('New Subtype'), array('action' => 'add')); ?></li>
    <li><?php echo $this->Html->link(__('List Mimes'), array('controller' => 'mimes', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Mime'), array('controller' => 'mimes', 'action' => 'add')); ?> </li>
  </ul>
</div>