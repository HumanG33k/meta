<div class="pseudoElements form">
<?php echo $this->Form->create('PseudoElement'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pseudo Element'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('syntax');
		echo $this->Form->input('description');
		echo $this->Form->input('prefixe_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PseudoElement.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PseudoElement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pseudo Elements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Prefixes'), array('controller' => 'prefixes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prefixe'), array('controller' => 'prefixes', 'action' => 'add')); ?> </li>
	</ul>
</div>
