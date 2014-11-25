<div class="threads index">
	<h2><?php echo __('Threads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('statut'); ?></th>
			<th><?php echo $this->Paginator->sort('nbview'); ?></th>
			<th><?php echo $this->Paginator->sort('nbpost'); ?></th>
			<th><?php echo $this->Paginator->sort('nbcomment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('forum_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($threads as $thread): ?>
	<tr>
		<td><?php echo h($thread['Thread']['id']); ?>&nbsp;</td>
		<td><?php echo h($thread['Thread']['name']); ?>&nbsp;</td>
		<td><?php echo h($thread['Thread']['statut']); ?>&nbsp;</td>
		<td><?php echo h($thread['Thread']['nbview']); ?>&nbsp;</td>
		<td><?php echo h($thread['Thread']['nbpost']); ?>&nbsp;</td>
		<td><?php echo h($thread['Thread']['nbcomment']); ?>&nbsp;</td>
		<td><?php echo h($thread['Thread']['created']); ?>&nbsp;</td>
		<td><?php echo h($thread['Thread']['updated']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($thread['User']['name'], array('controller' => 'users', 'action' => 'view', $thread['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($thread['Forum']['category_id'], array('controller' => 'forums', 'action' => 'view', $thread['Forum']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $thread['Thread']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $thread['Thread']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $thread['Thread']['id']), array(), __('Are you sure you want to delete # %s?', $thread['Thread']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Thread'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forums'), array('controller' => 'forums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum'), array('controller' => 'forums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
