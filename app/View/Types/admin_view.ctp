<div class="types view">
<h2><?php echo __('Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($type['Type']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($type['Type']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($type['Type']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($type['Type']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type'), array('action' => 'edit', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type'), array('action' => 'delete', $type['Type']['id']), array(), __('Are you sure you want to delete # %s?', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mimes'), array('controller' => 'mimes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mime'), array('controller' => 'mimes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mimes'); ?></h3>
	<?php if (!empty($type['Mime'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th><?php echo __('Subtype Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($type['Mime'] as $mime): ?>
		<tr>
			<td><?php echo $mime['id']; ?></td>
			<td><?php echo $mime['type_id']; ?></td>
			<td><?php echo $mime['subtype_id']; ?></td>
			<td><?php echo $mime['created']; ?></td>
			<td><?php echo $mime['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mimes', 'action' => 'view', $mime['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mimes', 'action' => 'edit', $mime['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mimes', 'action' => 'delete', $mime['id']), array(), __('Are you sure you want to delete # %s?', $mime['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mime'), array('controller' => 'mimes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
