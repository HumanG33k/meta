<div class="marks form">
<?php echo $this->Form->create('Mark'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Mark'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('opening_syntax');
		echo $this->Form->input('closing_syntax');
		echo $this->Form->input('html_type_id');
		echo $this->Form->input('Attribute');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Marks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Html Types'), array('controller' => 'html_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Html Type'), array('controller' => 'html_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes'), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute'), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>
