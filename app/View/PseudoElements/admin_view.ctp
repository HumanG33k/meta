<div class="pseudoElements view">
<h2><?php echo __('Pseudo Element'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pseudoElement['PseudoElement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pseudoElement['PseudoElement']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Syntax'); ?></dt>
		<dd>
			<?php echo h($pseudoElement['PseudoElement']['syntax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($pseudoElement['PseudoElement']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prefixe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pseudoElement['Prefixe']['name'], array('controller' => 'prefixes', 'action' => 'view', $pseudoElement['Prefixe']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pseudo Element'), array('action' => 'edit', $pseudoElement['PseudoElement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pseudo Element'), array('action' => 'delete', $pseudoElement['PseudoElement']['id']), array(), __('Are you sure you want to delete # %s?', $pseudoElement['PseudoElement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pseudo Elements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pseudo Element'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prefixes'), array('controller' => 'prefixes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prefixe'), array('controller' => 'prefixes', 'action' => 'add')); ?> </li>
	</ul>
</div>
