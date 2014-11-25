<div class="entities view">
<h2><?php echo __('Entity'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($entity['Entity']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($entity['Entity']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($entity['Entity']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Syntax'); ?></dt>
		<dd>
			<?php echo h($entity['Entity']['syntax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entity['Entity']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Entity'), array('action' => 'edit', $entity['Entity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Entity'), array('action' => 'delete', $entity['Entity']['id']), array(), __('Are you sure you want to delete # %s?', $entity['Entity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Entities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entity'), array('action' => 'add')); ?> </li>
	</ul>
</div>
