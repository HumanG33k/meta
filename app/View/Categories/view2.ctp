<!--<div class="categories view">
<h2><?php echo "<br /> <br /> <br /> "?>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($category['Category']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($category['Category']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($category['Category']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
   <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
             <li><?php echo $this->Html->link(__('List Forums'), array('controller' => 'forums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forum'), array('controller' => 'forums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<div class="related">
	<h3><?php echo __('Related Forums'); ?></h3>
	<?php if (!empty($category['Forum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Position'); ?></th>-->
		<th><?php echo __('Nbpost'); ?></th>
		<th><?php echo __('Nbtread'); ?></th>
		<!--<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Created'); ?></th>-->
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Forum'] as $forum): ?>
		<tr>
			<!--<td><?php echo $forum['id']; ?></td>
			<td><?php echo $forum['position']; ?></td>-->
			<td><?php echo $forum['nbpost']; ?></td>
			<td><?php echo $forum['nbtread']; ?></td>
			<!--<td><?php echo $forum['category_id']; ?></td>
			<td><?php echo $forum['state_id']; ?></td>
			<td><?php echo $forum['created']; ?></td>-->
			<td><?php echo $forum['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'forums', 'action' => 'view', $forum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'forums', 'action' => 'edit', $forum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forums', 'action' => 'delete', $forum['id']), array(), __('Are you sure you want to delete # %s?', $forum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Forum'), array('controller' => 'forums', 'action' => 'add')); ?> </li>
		</ul>
	</div>-->
</div>
<!--
<div class="related">
	<h3><?php echo __('Related News'); ?></h3>
	<?php if (!empty($category['News'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['News'] as $news): ?>
		<tr>
			<td><?php echo $news['id']; ?></td>
			<td><?php echo $news['name']; ?></td>
			<td><?php echo $news['body']; ?></td>
			<td><?php echo $news['published']; ?></td>
			<td><?php echo $news['user_id']; ?></td>
			<td><?php echo $news['state_id']; ?></td>
			<td><?php echo $news['created']; ?></td>
			<td><?php echo $news['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news', 'action' => 'view', $news['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news', 'action' => 'edit', $news['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news', 'action' => 'delete', $news['id']), array(), __('Are you sure you want to delete # %s?', $news['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
-->