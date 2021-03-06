<div class="marks index">
	<h2><?php echo __('Marks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('opening_syntax'); ?></th>
			<th><?php echo $this->Paginator->sort('opening_syntax_close'); ?></th>
			<th><?php echo $this->Paginator->sort('closing_syntax'); ?></th>
			<th><?php echo $this->Paginator->sort('html_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($marks as $mark): ?>
	<tr>
		<td><?php echo h($mark['Mark']['id']); ?>&nbsp;</td>
		<td><?php echo h($mark['Mark']['name']); ?>&nbsp;</td>
		<td><?php echo h($mark['Mark']['opening_syntax']); ?>&nbsp;</td>
		<td><?php echo h($mark['Mark']['opening_syntax_close']); ?>&nbsp;</td>
		<td><?php echo h($mark['Mark']['closing_syntax']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mark['HtmlType']['name'], array('controller' => 'html_types', 'action' => 'view', $mark['HtmlType']['id'])); ?>
		</td>
		<td><?php echo h($mark['Mark']['created']); ?>&nbsp;</td>
		<td><?php echo h($mark['Mark']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mark['Mark']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mark['Mark']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mark['Mark']['id']), array(), __('Are you sure you want to delete # %s?', $mark['Mark']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mark'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Html Types'), array('controller' => 'html_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Html Type'), array('controller' => 'html_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes'), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute'), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>
