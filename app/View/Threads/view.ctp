<div class="threads view">
<h2><?php echo __('Thread'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($thread['Thread']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($thread['Thread']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Statut'); ?></dt>
		<dd>
			<?php echo h($thread['Thread']['statut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nbview'); ?></dt>
		<dd>
			<?php echo h($thread['Thread']['nbview']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nbpost'); ?></dt>
		<dd>
			<?php echo h($thread['Thread']['nbpost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nbcomment'); ?></dt>
		<dd>
			<?php echo h($thread['Thread']['nbcomment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($thread['Thread']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($thread['Thread']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($thread['User']['name'], array('controller' => 'users', 'action' => 'view', $thread['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forum'); ?></dt>
		<dd>
			<?php echo $this->Html->link($thread['Forum']['category_id'], array('controller' => 'forums', 'action' => 'view', $thread['Forum']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Thread'), array('action' => 'edit', $thread['Thread']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Thread'), array('action' => 'delete', $thread['Thread']['id']), array(), __('Are you sure you want to delete # %s?', $thread['Thread']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Threads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Thread'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forums'), array('controller' => 'forums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum'), array('controller' => 'forums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($thread['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Thread Id'); ?></th>
		<th><?php echo __('Ip Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($thread['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['name']; ?></td>
			<td><?php echo $post['email']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['thread_id']; ?></td>
			<td><?php echo $post['ip_id']; ?></td>
			<td><?php echo $post['created']; ?></td>
			<td><?php echo $post['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), array(), __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
