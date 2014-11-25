<div class="htmlTypes view">
<h2><?php echo __('Html Type'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($htmlType['HtmlType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($htmlType['HtmlType']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($htmlType['HtmlType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($htmlType['HtmlType']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($htmlType['HtmlType']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Html Type'), array('action' => 'edit', $htmlType['HtmlType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Html Type'), array('action' => 'delete', $htmlType['HtmlType']['id']), array(), __('Are you sure you want to delete # %s?', $htmlType['HtmlType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Html Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Html Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Marks'); ?></h3>
	<?php if (!empty($htmlType['Mark'])): ?>
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
	<?php foreach ($htmlType['Mark'] as $mark): ?>
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
