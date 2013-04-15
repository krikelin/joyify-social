<article class="aquativity well" style=" display: block">
<?php if($aquativity['Aquativity']['public']): ?>
<iframe style="float: right" src="http://www.joyify.nu/widget?title=aquativity&url=http://www.joyify.com/aquativities/<?php echo $aquativity['Aquativity']['token']?>" target="_blank" scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:150px; height:24px"></iframe>
<?php endif; ?>
    <h3><?php $aquativity['Aquativity']['title']?></h3>
    <div class="strikes"><?php echo $aquativity['Aquativity']['strikes']?></div>
    <datetime><?php echo $aquativity['Aquativity']['time']?></datetime>    
    <?php if($details):?>
    <?php endif;?><br />
    <?php if($owner):?>
    <button class="btn btn-danger" onclick="self.location='<?php echo Router::Url('/aquativities/delete/'.$aquativity['Aquativity']['id'])?>'">Delete</button>
    <?php endif; ?>
</article>  

