<div class="mimes form">
<?php echo $this->Form->create('Mime'); ?>
	<fieldset>
		<legend><?php echo __('Add Mime'); ?></legend>
	<?php
		echo $this->Form->input('type_id');
		echo $this->Form->input('subtype_id');
		echo $this->Form->input('Extension');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mimes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media'), array('controller' => 'media', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extensions'), array('controller' => 'extensions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extension'), array('controller' => 'extensions', 'action' => 'add')); ?> </li>
	</ul>
</div>
