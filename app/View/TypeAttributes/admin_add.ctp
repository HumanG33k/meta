<div class="typeAttributes form">
<?php echo $this->Form->create('TypeAttribute'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Type Attribute'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Type Attributes'), array('action' => 'index')); ?></li>
	</ul>
</div>
