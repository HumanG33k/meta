<div class="keys view">
<h2><?php echo __('Key'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($key['Key']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($key['Key']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($key['Key']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Key'), array('action' => 'edit', $key['Key']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Key'), array('action' => 'delete', $key['Key']['id']), array(), __('Are you sure you want to delete # %s?', $key['Key']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Keys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elements', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Elements'); ?></h3>
	<?php if (!empty($key['Element'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mark Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Element Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($key['Element'] as $element): ?>
		<tr>
			<td><?php echo $element['id']; ?></td>
			<td><?php echo $element['mark_id']; ?></td>
			<td><?php echo $element['content_id']; ?></td>
			<td><?php echo $element['name']; ?></td>
			<td><?php echo $element['created']; ?></td>
			<td><?php echo $element['updated']; ?></td>
			<td><?php echo $element['position']; ?></td>
			<td><?php echo $element['description']; ?></td>
			<td><?php echo $element['element_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'elements', 'action' => 'view', $element['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'elements', 'action' => 'edit', $element['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'elements', 'action' => 'delete', $element['id']), array(), __('Are you sure you want to delete # %s?', $element['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elements', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
