<?php 
if($loggedIn):
?>
<h1>Home</h1>
<h3>My latest Joy</h3>
<?php echo $this->Form->create('Joy', array('url' => '/joys/submit'))?>
<?php echo $this->Form->input('url');?>
<?php echo $this->Form->submit('Publish');?>

<?php foreach($myjoys as $joy): ?>
<article class="joy">
    <?php echo $this->Html->link($joy['Joy']['title'], $joy['Joy']['url'])?> <?php echo $this->Html->link($joy['User']['username'], "/".$joy['User']['username'], array('class' => 'author'))?>
</article>
<?php
endforeach;
?>
<?php
else:
?>
<h1>Welcome to Joyify</h1>
<p>Joyify is a experimental social networking site, not aiming to take over the world, but to demonstrate my capabilities of making great web sites</p>
<h3>Recent Joyed things</h3>
<?php foreach($recent_joys as $joy): ?>
<article class="joy">
    <?php echo $this->Html->link($joy['Joy']['title'], $joy['Joy']['url'])?> <?php echo $this->Html->link($joy['User']['username'], "/".$joy['User']['username'], array('class' => 'author'))?>
</article>
<?php
endforeach;
?>
<?php
endif;
?>
