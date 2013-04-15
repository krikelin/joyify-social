<h1>My Tunes</h1>
<h3>Taking of to the music space</h3>
<p>Joyify's music section is very special. Instead of putting your music on stories directly, Joyify uses a five step mechanism
for helping you take of your music career. Like an aeorplane, you can go high directly, you need to archive speed and then take up slowly, 
otherwise you will be stalled.
    This means that there is a five step process with your music. You begin with adding a song and fill out the youtube/soundcloud id,
 and start to get plays and promotion. You choose yourself how to promote your music, unless you don't spam other people.</p>

<p>When you get a certain amount of plays, you have taken of to the 'mid air', and begin to get to the secondary step of your route.</p>
<p>By our rules, you might not add another song before you have reached certain amount of level for the first one.</p>
<button class="btn btn-primary" onclick="self.location='<?php echo Router::Url('/tunes/submit')?>'">New tune</button>
<h3>My songs</h3>
<?php foreach($tunes as $tune): ?>
   <?php echo $this->element('tune', array('tune' => $tune));?>
<?php endforeach;?>
