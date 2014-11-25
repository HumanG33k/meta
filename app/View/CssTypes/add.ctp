<div class="cssTypes form">
<?php echo $this->Form->create('CssType'); ?>
	<fieldset>
		<legend><?php echo __('Add Css Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('opening_syntax');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Css Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Selectors'), array('controller' => 'selectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selector'), array('controller' => 'selectors', 'action' => 'add')); ?> </li>
	</ul>
</div>
