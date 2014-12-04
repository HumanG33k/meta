<div class="typeAttributes view">
<h2><?php echo __('Type Attribute'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($typeAttribute['TypeAttribute']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($typeAttribute['TypeAttribute']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($typeAttribute['TypeAttribute']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typeAttribute['TypeAttribute']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type Attribute'), array('action' => 'edit', $typeAttribute['TypeAttribute']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type Attribute'), array('action' => 'delete', $typeAttribute['TypeAttribute']['id']), array(), __('Are you sure you want to delete # %s?', $typeAttribute['TypeAttribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Attributes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Attribute'), array('action' => 'add')); ?> </li>
	</ul>
</div>
