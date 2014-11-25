<div class="attributes index">
	<h2><?php echo __('Attributes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('type_attributes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($attributes as $attribute): ?>
	<tr>
		<td><?php echo h($attribute['Attribute']['id']); ?>&nbsp;</td>
		<td><?php echo h($attribute['Attribute']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attribute['TypeAttributes']['name'], array('controller' => 'type_attributes', 'action' => 'view', $attribute['TypeAttributes']['id'])); ?>
		</td>
		<td><?php echo h($attribute['Attribute']['created']); ?>&nbsp;</td>
		<td><?php echo h($attribute['Attribute']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attribute['Attribute']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attribute['Attribute']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attribute['Attribute']['id']), array(), __('Are you sure you want to delete # %s?', $attribute['Attribute']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Attribute'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Type Attributes'), array('controller' => 'type_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Attributes'), array('controller' => 'type_attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
	</ul>
</div>
