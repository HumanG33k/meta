<div class="cssTypes view">
<h2><?php echo __('Css Type'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cssType['CssType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opening Syntax'); ?></dt>
		<dd>
			<?php echo h($cssType['CssType']['opening_syntax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cssType['CssType']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Css Type'), array('action' => 'edit', $cssType['CssType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Css Type'), array('action' => 'delete', $cssType['CssType']['id']), array(), __('Are you sure you want to delete # %s?', $cssType['CssType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Css Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Css Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Selectors'), array('controller' => 'selectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selector'), array('controller' => 'selectors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Selectors'); ?></h3>
	<?php if (!empty($cssType['Selector'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Css Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cssType['Selector'] as $selector): ?>
		<tr>
			<td><?php echo $selector['id']; ?></td>
			<td><?php echo $selector['name']; ?></td>
			<td><?php echo $selector['css_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'selectors', 'action' => 'view', $selector['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'selectors', 'action' => 'edit', $selector['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'selectors', 'action' => 'delete', $selector['id']), array(), __('Are you sure you want to delete # %s?', $selector['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Selector'), array('controller' => 'selectors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
