<div class="selectors view">
<h2><?php echo __('Selector'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($selector['Selector']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($selector['Selector']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Css Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($selector['CssType']['name'], array('controller' => 'css_types', 'action' => 'view', $selector['CssType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Selector'), array('action' => 'edit', $selector['Selector']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Selector'), array('action' => 'delete', $selector['Selector']['id']), array(), __('Are you sure you want to delete # %s?', $selector['Selector']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Selectors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Selector'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Css Types'), array('controller' => 'css_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Css Type'), array('controller' => 'css_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
