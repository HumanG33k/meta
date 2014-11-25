<div class="marks view">
<h2><?php echo __('Mark'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opening Syntax'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['opening_syntax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Syntax'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['closing_syntax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Html Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mark['HtmlType']['name'], array('controller' => 'html_types', 'action' => 'view', $mark['HtmlType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($mark['Mark']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mark'), array('action' => 'edit', $mark['Mark']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mark'), array('action' => 'delete', $mark['Mark']['id']), array(), __('Are you sure you want to delete # %s?', $mark['Mark']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Marks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Html Types'), array('controller' => 'html_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Html Type'), array('controller' => 'html_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes'), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute'), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Elements'); ?></h3>
	<?php if (!empty($mark['Element'])): ?>
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
	<?php foreach ($mark['Element'] as $element): ?>
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
	<h3><?php echo __('Related Attributes'); ?></h3>
	<?php if (!empty($mark['Attribute'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type Attributes Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mark['Attribute'] as $attribute): ?>
		<tr>
			<td><?php echo $attribute['id']; ?></td>
			<td><?php echo $attribute['name']; ?></td>
			<td><?php echo $attribute['type_attributes_id']; ?></td>
			<td><?php echo $attribute['created']; ?></td>
			<td><?php echo $attribute['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attributes', 'action' => 'view', $attribute['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attributes', 'action' => 'edit', $attribute['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attributes', 'action' => 'delete', $attribute['id']), array(), __('Are you sure you want to delete # %s?', $attribute['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attribute'), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
