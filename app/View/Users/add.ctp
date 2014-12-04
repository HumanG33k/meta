<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
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
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Register'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('name', array('label' => __('Public Name')));
    //echo $this->Form->inputs('name', array('label' => 'Public Name'));
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('birthday');
		echo $this->Form->input('biography');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('website');
		echo $this->Form->input('avatar');
		echo $this->Form->input('gravavatar');
		echo $this->Form->input('isactive');
		echo $this->Form->input('sexe');
		echo $this->Form->input('group_id');
		echo $this->Form->input('Ip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
