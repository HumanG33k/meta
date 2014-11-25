<div class="selectors index">
	<h2><?php echo __('Selectors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('css_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($selectors as $selector): ?>
	<tr>
		<td><?php echo h($selector['Selector']['id']); ?>&nbsp;</td>
		<td><?php echo h($selector['Selector']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($selector['CssType']['name'], array('controller' => 'css_types', 'action' => 'view', $selector['CssType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $selector['Selector']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $selector['Selector']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $selector['Selector']['id']), array(), __('Are you sure you want to delete # %s?', $selector['Selector']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Selector'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Css Types'), array('controller' => 'css_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Css Type'), array('controller' => 'css_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
