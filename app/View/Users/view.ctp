<h1><?php echo $user['username']?></h1>
<h3>My joys</h3>
<?php
foreach($joys as $joy) {
?>
<article class="joy">
<h3><?php echo $this->Html->link($joy['Joy']['title'], $joy['Joy']['url']);?></h3>
<i><?php echo $joy['Joy']['time']?></i>
</article>
<?php
}
?>
