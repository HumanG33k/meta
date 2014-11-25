<div class="elements index">
	<h2><?php echo __('Elements'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mark_id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('element_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($elements as $element): ?>
	<tr>
		<td><?php echo h($element['Element']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($element['Mark']['name'], array('controller' => 'marks', 'action' => 'view', $element['Mark']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($element['Content']['name'], array('controller' => 'contents', 'action' => 'view', $element['Content']['id'])); ?>
		</td>
		<td><?php echo h($element['Element']['name']); ?>&nbsp;</td>
		<td><?php echo h($element['Element']['created']); ?>&nbsp;</td>
		<td><?php echo h($element['Element']['updated']); ?>&nbsp;</td>
		<td><?php echo h($element['Element']['position']); ?>&nbsp;</td>
		<td><?php echo h($element['Element']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($element['Element']['name'], array('controller' => 'elements', 'action' => 'view', $element['Element']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $element['Element']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $element['Element']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $element['Element']['id']), array(), __('Are you sure you want to delete # %s?', $element['Element']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Element'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes'), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute'), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keys'), array('controller' => 'keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
