<div class="htmlTypes form">
<?php echo $this->Form->create('HtmlType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Html Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('role');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HtmlType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('HtmlType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Html Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
	</ul>
</div>
