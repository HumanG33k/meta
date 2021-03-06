<div class="media index">
	<h2><?php echo __('Media'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('used'); ?></th>
			<th><?php echo $this->Paginator->sort('mime_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($media as $media): ?>
	<tr>
		<td><?php echo h($media['Media']['id']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['name']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['url']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['used']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($media['Mime']['id'], array('controller' => 'mimes', 'action' => 'view', $media['Mime']['id'])); ?>
		</td>
		<td><?php echo h($media['Media']['created']); ?>&nbsp;</td>
		<td><?php echo h($media['Media']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $media['Media']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $media['Media']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $media['Media']['id']), array(), __('Are you sure you want to delete # %s?', $media['Media']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Media'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mimes'), array('controller' => 'mimes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mime'), array('controller' => 'mimes', 'action' => 'add')); ?> </li>
	</ul>
</div>
