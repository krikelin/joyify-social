<h1><?php echo __("Settings")?></h1>
<?php echo $this->Form->create(null, array('url' => '/users/settings')); ?>
    <fieldset>
        <legend><?php echo __('My profile'); ?></legend>
        <label for="bio">My biography</label>
        <?php  echo $this->Form->textarea('bio'); ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
