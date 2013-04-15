<div class="well">
    <b><?php echo $user['username']?></b>
    <p><?php echo $user['bio']?></p>
</div>
<h3>My joys</h3>
<?php
foreach($joys as $joy) {
?>
<i><?php echo $this->element('joy', array('joy' => $joy))?></i>
<?php
}
?>
