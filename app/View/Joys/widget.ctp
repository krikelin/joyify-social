<style type="text/css">

</style>
<?php
if(!$loggedIn) {
?>

<a target="_popup" href="http://<?php echo $siteDomain?>/joyify?url=<?php echo urlencode($url)?>&title=<?php echo urlencode($title);?>"><img src="img/icon18.png" style="float: left"/><div class="btn">Joyify this!</div></a><div class="eX">&nbsp;</div><div id="counter" class="counter"><?php echo $count?></div>
<?php } else { ?>
<script type="text/javascript"> 
    function joy_rpc_finished(response) {
        if(response.status == 200) {
            console.log(response);
            document.getElementById('result').innerHTML = 'joyified';
         }
    }
    function joyify(title, url) {
        document.querySelector('#result').innerHTML = "Loading..";
        var d = document.createElement('script');
        d.setAttribute('src', 'http://<?php echo $siteDomain ?>/rpc?title=' + encodeURI(title) + '&url=' + encodeURI(url));
        d.setAttribute('type', 'text/javascript');
        document.head.appendChild(d);
    }
</script>
<a href="#" onclick="joyify('<?php echo $title?>', '<?php echo $url?>')"><div class="btn"><img src="img/icon18.png" style="float: left"/><span id="result"><?php if ($you) { ?>You Joy this!<?php } else { ?>Joyify this!<?php } ?></span></div></a> <div class="eX">&nbsp;</div><div id="counter" class="counter"><?php echo $count?></div>
<?php } ?>
