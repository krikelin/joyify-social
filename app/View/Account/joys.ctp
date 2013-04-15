
<h1>Home</h1>
<h3>My latest Joy</h3>
<?php echo $this->Form->create('Joy', array('url' => '/joys/submit'))?>
<?php echo $this->Form->input('url');?>
<?php echo $this->Form->submit('Publish', array('class' => 'btn btn-primary'));?>

<?php foreach($myjoys as $joy): ?>
<?php echo $this->element('joy', array('joy' => $joy));?>
<?php
endforeach;
?>
