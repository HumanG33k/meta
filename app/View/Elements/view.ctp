<div class="elements view">
<h2><?php echo __('Element'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($element['Element']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mark'); ?></dt>
		<dd>
			<?php echo $this->Html->link($element['Mark']['name'], array('controller' => 'marks', 'action' => 'view', $element['Mark']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($element['Content']['name'], array('controller' => 'contents', 'action' => 'view', $element['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($element['Element']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($element['Element']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($element['Element']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($element['Element']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($element['Element']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Element'); ?></dt>
		<dd>
			<?php echo $this->Html->link($element['Element']['name'], array('controller' => 'elements', 'action' => 'view', $element['Element']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Element'), array('action' => 'edit', $element['Element']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Element'), array('action' => 'delete', $element['Element']['id']), array(), __('Are you sure you want to delete # %s?', $element['Element']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes'), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute'), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keys'), array('controller' => 'keys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contents'); ?></h3>
	<?php if (!empty($element['Content'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('Element Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($element['Content'] as $content): ?>
		<tr>
			<td><?php echo $content['id']; ?></td>
			<td><?php echo $content['name']; ?></td>
			<td><?php echo $content['created']; ?></td>
			<td><?php echo $content['updated']; ?></td>
			<td><?php echo $content['element_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contents', 'action' => 'view', $content['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contents', 'action' => 'edit', $content['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contents', 'action' => 'delete', $content['id']), array(), __('Are you sure you want to delete # %s?', $content['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Elements'); ?></h3>
	<?php if (!empty($element['Element'])): ?>
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
	<?php foreach ($element['Element'] as $element): ?>
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
	<?php if (!empty($element['Attribute'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type Attributes Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($element['Attribute'] as $attribute): ?>
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
<div class="related">
	<h3><?php echo __('Related Keys'); ?></h3>
	<?php if (!empty($element['Key'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($element['Key'] as $key): ?>
		<tr>
			<td><?php echo $key['id']; ?></td>
			<td><?php echo $key['name']; ?></td>
			<td><?php echo $key['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'keys', 'action' => 'view', $key['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'keys', 'action' => 'edit', $key['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'keys', 'action' => 'delete', $key['id']), array(), __('Are you sure you want to delete # %s?', $key['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Key'), array('controller' => 'keys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pages'); ?></h3>
	<?php if (!empty($element['Page'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Adresse'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($element['Page'] as $page): ?>
		<tr>
			<td><?php echo $page['id']; ?></td>
			<td><?php echo $page['name']; ?></td>
			<td><?php echo $page['adresse']; ?></td>
			<td><?php echo $page['state_id']; ?></td>
			<td><?php echo $page['created']; ?></td>
			<td><?php echo $page['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pages', 'action' => 'view', $page['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pages', 'action' => 'edit', $page['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pages', 'action' => 'delete', $page['id']), array(), __('Are you sure you want to delete # %s?', $page['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
