<!--<div class="forums view">
<h2><?php echo __('Forum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($forum['Forum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($forum['Forum']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nbpost'); ?></dt>
		<dd>
			<?php echo h($forum['Forum']['nbpost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nbtread'); ?></dt>
		<dd>
			<?php echo h($forum['Forum']['nbtread']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($forum['Category']['name'], array('controller' => 'categories', 'action' => 'view', $forum['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($forum['State']['name'], array('controller' => 'states', 'action' => 'view', $forum['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($forum['Forum']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($forum['Forum']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Forum'), array('action' => 'edit', $forum['Forum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Forum'), array('action' => 'delete', $forum['Forum']['id']), array(), __('Are you sure you want to delete # %s?', $forum['Forum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forums'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Threads'), array('controller' => 'threads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Thread'), array('controller' => 'threads', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<div class="related">
	<h3><?php echo __('Related Threads'); ?></h3>
	<?php if (!empty($forum['Thread'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Statut'); ?></th>
		<th><?php echo __('Nbview'); ?></th>
		<th><?php echo __('Nbpost'); ?></th>
		<th><?php echo __('Nbcomment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Forum Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($forum['Thread'] as $thread): ?>
		<tr>
			<td><?php echo $thread['id']; ?></td>
			<td><?php echo $thread['name']; ?></td>
			<td><?php echo $thread['statut']; ?></td>
			<td><?php echo $thread['nbview']; ?></td>
			<td><?php echo $thread['nbpost']; ?></td>
			<td><?php echo $thread['nbcomment']; ?></td>
			<td><?php echo $thread['created']; ?></td>
			<td><?php echo $thread['updated']; ?></td>
			<td><?php echo $thread['user_id']; ?></td>
			<td><?php echo $thread['forum_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'threads', 'action' => 'view', $thread['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'threads', 'action' => 'edit', $thread['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'threads', 'action' => 'delete', $thread['id']), array(), __('Are you sure you want to delete # %s?', $thread['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Thread'), array('controller' => 'threads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
