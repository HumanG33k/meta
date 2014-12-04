<div class="news index">

  <?php echo $this->Form->create( false, array('admin'=> 'true', 'type' => 'binary','controller' => 'pages' ,'action' => 'index')); ?>
  <fieldset>
    <legend><?php echo __('Add Banner'); ?></legend>
    <?php
    echo $this->Form->input('file', array('type' => 'file'));
    ?>
  </fieldset>
  <?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('List Forums'), array('admin' => true, 'controller' => 'threads', 'action' => 'admin_index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Ips'), array('admin' => true, 'controller' => 'ips', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Attributes'), array('admin' => true, 'controller' => 'attributes', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Categories'), array('admin' => true, 'controller' => 'categories', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Contents'), array('admin' => true, 'controller' => 'contents', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List CssTypes'), array('admin' => true, 'controller' => 'CssTypes', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Elements'), array('admin' => true, 'controller' => 'elements', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Groups'), array('admin' => true, 'controller' => 'groups', 'action' => 'admin_index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Keys'), array('admin' => true, 'controller' => 'keys', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Marks'), array('admin' => true, 'controller' => 'marks', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Media'), array('admin' => true, 'controller' => 'media', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Mimes'), array('admin' => true, 'controller' => 'mimes', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List News'), array('admin' => true, 'controller' => 'news', 'action' => 'admin_index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Prefixes'), array('admin' => true, 'controller' => 'prefixes', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List PseudoElements'), array('admin' => true, 'controller' => 'pseudoelements', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Rules'), array('admin' => true, 'controller' => 'rules', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Selector'), array('admin' => true, 'controller' => 'selectors', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List State'), array('admin' => true, 'controller' => 'states', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Subtype'), array('admin' => true, 'controller' => 'subtypes', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Template'), array('admin' => true, 'controller' => 'templates', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Type'), array('admin' => true, 'controller' => 'types', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('List Users'), array('admin' => true, 'controller' => 'users', 'action' => 'index')); ?></li>
  </ul>
</div>

