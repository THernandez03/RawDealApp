
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo $this->Form->input('username',array('label'=>'','placeholder'=>'Usuario'));
        echo $this->Form->input('password',array('label'=>'','placeholder'=>'Password'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<style>

div.form, div.index, div.view{

width:100%;
border-left: transparent;

}

</style>
