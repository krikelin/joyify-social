<?php echo $this->Form->create("Tune");?>
<fieldset>
    <legend>Basic info</legend>
    <?php echo $this->Form->input('title', array('placeholder' => 'ex. DY9397')); ?>
    <?php echo $this->Form->input('youtubeID', array( 'legend' => 'YouTube ID (Only the hash, not the whole URI', 'placeholder' => 'ex. qkFmEc1OPKQ')); ?>
    <description>
    
    </description>
</fieldset>
<?php echo $this->Form->submit("Save", array('class' => 'btn btn-primary'));?>
