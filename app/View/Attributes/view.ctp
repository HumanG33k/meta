<div class="attributes view">
<h2><?php echo __('Attribute'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($attribute['Attribute']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($attribute['Attribute']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Attributes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($attribute['TypeAttributes']['name'], array('controller' => 'type_attributes', 'action' => 'view', $attribute['TypeAttributes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($attribute['Attribute']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($attribute['Attribute']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attribute'), array('action' => 'edit', $attribute['Attribute']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attribute'), array('action' => 'delete', $attribute['Attribute']['id']), array(), __('Are you sure you want to delete # %s?', $attribute['Attribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Type Attributes'), array('controller' => 'type_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type Attributes'), array('controller' => 'type_attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Elements'); ?></h3>
	<?php if (!empty($attribute['Element'])): ?>
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
	<?php foreach ($attribute['Element'] as $element): ?>
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
<div class="related">
	<h3><?php echo __('Related Marks'); ?></h3>
	<?php if (!empty($attribute['Mark'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Opening Syntax'); ?></th>
		<th><?php echo __('Closing Syntax'); ?></th>
		<th><?php echo __('Html Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($attribute['Mark'] as $mark): ?>
		<tr>
			<td><?php echo $mark['id']; ?></td>
			<td><?php echo $mark['name']; ?></td>
			<td><?php echo $mark['opening_syntax']; ?></td>
			<td><?php echo $mark['closing_syntax']; ?></td>
			<td><?php echo $mark['html_type_id']; ?></td>
			<td><?php echo $mark['created']; ?></td>
			<td><?php echo $mark['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'marks', 'action' => 'view', $mark['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'marks', 'action' => 'edit', $mark['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'marks', 'action' => 'delete', $mark['id']), array(), __('Are you sure you want to delete # %s?', $mark['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
