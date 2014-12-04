<div class="typeAttributes form">
<?php echo $this->Form->create('TypeAttribute'); ?>
	<fieldset>
		<legend><?php echo __('Edit Type Attribute'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TypeAttribute.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TypeAttribute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Type Attributes'), array('action' => 'index')); ?></li>
	</ul>
</div>
