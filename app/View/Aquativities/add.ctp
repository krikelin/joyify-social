<h1>Add aquativity</h1>
<?php echo $this->Form->create('Aquativity')?>
<fieldset>
    <legend>Basic info</legend>
    <?php echo $this->Form->input('title') ?>
    <?php echo $this->Form->input('strikes', array('type' => 'number')) ?>
    <span class="legend">Strikes is amount of lengths in Aqua Jogging</span>
    <?php echo $this->Form->input('laps', array('type' => 'number')) ?>
    <span class="legend">Amount of laps in regular swimming</span>
    <?php echo $this->Form->input('duration', array('type' => 'number')); ?>
    <span class="legend">Duration (in minutes)</span>
    <?php echo $this->Form->input('time', array('type' => 'datetime')); ?>
    <?php echo $this->Form->input('clothes', array('type' => 'checkbox')); ?>
    <?php echo $this->Form->input('public', array('type' => 'checkbox')); ?>
</fieldset>
<?php echo $this->Form->submit('Register', array('class' => 'btn btn-primary'))?>

