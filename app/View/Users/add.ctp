
<div>


<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Create a new User'); ?></legend>
        <?php
		echo $this->Form->input('username');
        echo $this->Form->input('password');
		echo $this->Form->input('confirm password', array('type'=>'password'));
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>

</div>