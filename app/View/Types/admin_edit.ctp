<div class="types form">
<?php echo $this->Form->create('Type'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Type.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Type.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mimes'), array('controller' => 'mimes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mime'), array('controller' => 'mimes', 'action' => 'add')); ?> </li>
	</ul>
</div>
