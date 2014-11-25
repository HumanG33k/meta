<div class="prefixes form">
<?php echo $this->Form->create('Prefix'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Prefix'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Prefixes'), array('action' => 'index')); ?></li>
	</ul>
</div>
