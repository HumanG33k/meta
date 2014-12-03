<div class="users form">
<?php //echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Welcome to ...'); ?></legend>
        <?php
            echo $this->Form->input('login');
            echo $this->Form->input('password');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Sign In'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
            <li><?php echo $this->Html->link(__('Register'),  array('controller' => 'users', 'action' => 'add'));; ?></li>
	</ul>
</div>
