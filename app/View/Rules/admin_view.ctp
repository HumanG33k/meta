<div class="rules view">
<h2><?php echo __('Rule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rule['Rule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($rule['Rule']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($rule['Rule']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prefixe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rule['Prefixe']['name'], array('controller' => 'prefixes', 'action' => 'view', $rule['Prefixe']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rule'), array('action' => 'edit', $rule['Rule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rule'), array('action' => 'delete', $rule['Rule']['id']), array(), __('Are you sure you want to delete # %s?', $rule['Rule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rule'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prefixes'), array('controller' => 'prefixes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prefixe'), array('controller' => 'prefixes', 'action' => 'add')); ?> </li>
	</ul>
</div>
