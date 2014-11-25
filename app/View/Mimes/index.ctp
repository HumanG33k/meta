<div class="mimes index">
	<h2><?php echo __('Mimes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subtype_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mimes as $mime): ?>
	<tr>
		<td><?php echo h($mime['Mime']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mime['Type']['name'], array('controller' => 'types', 'action' => 'view', $mime['Type']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mime['Subtype']['name'], array('controller' => 'subtypes', 'action' => 'view', $mime['Subtype']['id'])); ?>
		</td>
		<td><?php echo h($mime['Mime']['created']); ?>&nbsp;</td>
		<td><?php echo h($mime['Mime']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mime['Mime']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mime['Mime']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mime['Mime']['id']), array(), __('Are you sure you want to delete # %s?', $mime['Mime']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mime'), array('action' => 'add')); ?></li>
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
