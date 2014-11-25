<div class="prefixes view">
<h2><?php echo __('Prefix'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($prefix['Prefix']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($prefix['Prefix']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prefix'), array('action' => 'edit', $prefix['Prefix']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prefix'), array('action' => 'delete', $prefix['Prefix']['id']), array(), __('Are you sure you want to delete # %s?', $prefix['Prefix']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prefixes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prefix'), array('action' => 'add')); ?> </li>
	</ul>
</div>
