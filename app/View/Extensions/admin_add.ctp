<div class="extensions form">
<?php echo $this->Form->create('Extension'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Extension'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Mime');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Extensions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mimes'), array('controller' => 'mimes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mime'), array('controller' => 'mimes', 'action' => 'add')); ?> </li>
	</ul>
</div>
