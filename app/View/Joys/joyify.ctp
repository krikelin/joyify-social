<h1>Joyify this</h1>
<div class="well">
    <?php echo $this->Form->create('Joy');?>
    <?php echo $this->Form->input('url', array('id' => 'url', 'value' => $url));?>
    <?php echo $this->Form->input('title', array('id' => 'title', 'value' => $title));?>
    <?php echo $this->Form->submit('Save');?>
</div>
