<div class="mimes view">
<h2><?php echo __('Mime'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mime['Mime']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mime['Type']['name'], array('controller' => 'types', 'action' => 'view', $mime['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mime['Subtype']['name'], array('controller' => 'subtypes', 'action' => 'view', $mime['Subtype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mime['Mime']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($mime['Mime']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mime'), array('action' => 'edit', $mime['Mime']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mime'), array('action' => 'delete', $mime['Mime']['id']), array(), __('Are you sure you want to delete # %s?', $mime['Mime']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mimes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mime'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Media'), array('controller' => 'media', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extensions'), array('controller' => 'extensions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extension'), array('controller' => 'extensions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Media'); ?></h3>
	<?php if (!empty($mime['Media'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Used'); ?></th>
		<th><?php echo __('Mime Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mime['Media'] as $media): ?>
		<tr>
			<td><?php echo $media['id']; ?></td>
			<td><?php echo $media['name']; ?></td>
			<td><?php echo $media['url']; ?></td>
			<td><?php echo $media['used']; ?></td>
			<td><?php echo $media['mime_id']; ?></td>
			<td><?php echo $media['created']; ?></td>
			<td><?php echo $media['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'media', 'action' => 'view', $media['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'media', 'action' => 'edit', $media['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'media', 'action' => 'delete', $media['id']), array(), __('Are you sure you want to delete # %s?', $media['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Media'), array('controller' => 'media', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Extensions'); ?></h3>
	<?php if (!empty($mime['Extension'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mime['Extension'] as $extension): ?>
		<tr>
			<td><?php echo $extension['id']; ?></td>
			<td><?php echo $extension['name']; ?></td>
			<td><?php echo $extension['created']; ?></td>
			<td><?php echo $extension['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'extensions', 'action' => 'view', $extension['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'extensions', 'action' => 'edit', $extension['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'extensions', 'action' => 'delete', $extension['id']), array(), __('Are you sure you want to delete # %s?', $extension['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Extension'), array('controller' => 'extensions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
