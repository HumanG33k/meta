<div class="extensions form">
<?php echo $this->Form->create('Extension'); ?>
	<fieldset>
		<legend><?php echo __('Edit Extension'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Mime');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Extension.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Extension.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Extensions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mimes'), array('controller' => 'mimes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mime'), array('controller' => 'mimes', 'action' => 'add')); ?> </li>
	</ul>
</div>
