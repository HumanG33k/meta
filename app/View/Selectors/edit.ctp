<div class="selectors form">
<?php echo $this->Form->create('Selector'); ?>
	<fieldset>
		<legend><?php echo __('Edit Selector'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('css_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Selector.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Selector.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Selectors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Css Types'), array('controller' => 'css_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Css Type'), array('controller' => 'css_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
