<div class="entities form">
<?php echo $this->Form->create('Entity'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Entity'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('syntax');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Entity.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Entity.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entities'), array('action' => 'index')); ?></li>
	</ul>
</div>
