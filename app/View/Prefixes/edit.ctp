<div class="prefixes form">
<?php echo $this->Form->create('Prefix'); ?>
	<fieldset>
		<legend><?php echo __('Edit Prefix'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Prefix.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Prefix.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Prefixes'), array('action' => 'index')); ?></li>
	</ul>
</div>
