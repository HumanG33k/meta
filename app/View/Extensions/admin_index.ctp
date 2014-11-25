<div class="extensions index">
	<h2><?php echo __('Extensions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($extensions as $extension): ?>
	<tr>
		<td><?php echo h($extension['Extension']['id']); ?>&nbsp;</td>
		<td><?php echo h($extension['Extension']['name']); ?>&nbsp;</td>
		<td><?php echo h($extension['Extension']['created']); ?>&nbsp;</td>
		<td><?php echo h($extension['Extension']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $extension['Extension']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $extension['Extension']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $extension['Extension']['id']), array(), __('Are you sure you want to delete # %s?', $extension['Extension']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Extension'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mimes'), array('controller' => 'mimes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mime'), array('controller' => 'mimes', 'action' => 'add')); ?> </li>
	</ul>
</div>
