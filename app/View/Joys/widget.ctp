<style type="text/css">

</style>
<?php
if(!$loggedIn) {
?>

<a target="_popup" href="http://<?php echo $siteDomain?>/joyify?url=<?php echo urlencode($url)?>&title=<?php echo urlencode($title);?>"><div class="btn"><img src="img/icbtn18.png" style="float: left"/>Joyify this!</div></a><div class="eX">&nbsp;</div><div id="counter" class="counter"><?php echo $count?></div>
<?php } else { ?>
<script type="text/javascript"> 
    function joy_rpc_finished(response) {
        if(response.status == 200 && response.state == 'joyified') {
            console.log(response);
            document.getElementById('button').classList.add('joyified');
            var count = parseInt(document.getElementById('counter').value);
            document.getElementById('counter').value = count + 1;
         }
    }
    function joyify(title, url) {
        document.querySelector('#label').innerHTML = "Loading..";
            document.getElementById('button').classList.remove('joyified');
        var d = document.createElement('script');
        d.setAttribute('src', 'http://<?php echo $siteDomain ?>/rpc?title=' + encodeURI(title) + '&url=' + encodeURI(url));
        d.setAttribute('type', 'text/javascript');
        document.head.appendChild(d);
    }
</script>
<a href="#" onclick="joyify('<?php echo $title?>', '<?php echo $url?>')"><div id="button" class="btn <?php if ($you) { ?>joyified<?php } ?>"><span id="result"><div style="padding: 0px; padding-left: 3px; margin-left: -2px; margin-top: -1px; height: 19px" class="joyified"><img id="icon" src="img/icbtn18.png" style="float: left"/></div><span id="label">Joyify</span></span></div></a> <div class="eX">&nbsp;</div><div id="counter" class="counter"><?php echo $count?></div>
<?php } ?>
