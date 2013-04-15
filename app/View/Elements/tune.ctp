<article class="well tune">
    <iframe src="http://www.joyify.nu/widget?title=&url=http://www.joyify.nu/tunes/view/<?php echo $tune['Tune']['id']?>" target="_blank" scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:150px; height:24px"></iframe>
  <?php  echo ($tune['Tune']['level'] )?>
    <h3><?php echo $tune['Tune']['title']?></h3>
    <?php
    if(isset($tune['Tune']['youtube_id'])):
    ?>
    <iframe width="420" height="315" src="http://www.youtube.com/embed/<?php echo $tune['Tune']['youtubeID']?>" frameborder="0" allowfullscreen></iframe>
    <?php endif; ?>
    <p>Plays: <?php echo $tune['Tune']['plays']?></p>
   <div class="progress progress-striped">
      <div class="bar" style="width: <?php echo ($tune['Tune']['level'] / 5) * 100?>%;"></div>
  
    </div>
    <b>Level <?php echo $tune['Tune']['level']?>: <?php echo $tune['Level']['name']?></b>
    <p><?php echo $tune['Level']['comments']?></p>
    <button class="btn" onclick="self.location='<?php echo Router::Url('/tunes/advance/'.$tune['Tune']['id'].'/')?>'">Advance</input>
</article>
