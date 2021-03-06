<div class="htmlTypes index">
	<h2><?php echo __('Html Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($htmlTypes as $htmlType): ?>
	<tr>
		<td><?php echo h($htmlType['HtmlType']['name']); ?>&nbsp;</td>
		<td><?php echo h($htmlType['HtmlType']['role']); ?>&nbsp;</td>
		<td><?php echo h($htmlType['HtmlType']['created']); ?>&nbsp;</td>
		<td><?php echo h($htmlType['HtmlType']['updated']); ?>&nbsp;</td>
		<td><?php echo h($htmlType['HtmlType']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $htmlType['HtmlType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $htmlType['HtmlType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $htmlType['HtmlType']['id']), array(), __('Are you sure you want to delete # %s?', $htmlType['HtmlType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Html Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
	</ul>
</div>
