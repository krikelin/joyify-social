<style type="text/css">
    .you:after {
        content: url('img/joy.png');
    }
    body {
    overflow: visible;
    }
    .counter {
        width: 16px;
        height: 16px;
        margin-left: -2px;
        margin-top: 0px;
        background: #ff8282; /* Old browsers */
background: -moz-linear-gradient(top, #ff8282 2%, #a52222 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(2%,#ff8282), color-stop(100%,#a52222)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #ff8282 2%,#a52222 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #ff8282 2%,#a52222 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #ff8282 2%,#a52222 100%); /* IE10+ */
background: linear-gradient(to bottom, #ff8282 2%,#a52222 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff8282', endColorstr='#a52222',GradientType=0 ); /* IE6-9 */
        border: 1px solid #330000;  
        color: #FFFFFF;
        text-align: center;
        border-radius: 100%;
        box-shadow: 1px 1px 3px #444444;
        text-shadow: 0px -1px 0px #110000;
    }
    
</style>
<?php
if(!$loggedIn) {
?>

<a target="_popup" href="http://<?php echo $siteDomain?>/joyify?url=<?php echo urlencode($url)?>&title=<?php echo urlencode($title);?>"><img src="img/icon.png" style="float: left"/><div id="counter" class="counter"><?php echo $count?></div>
<?php } else { ?>
<script type="text/javascript"> 
    function joy_rpc_finished(response) {
        if(response.status == 200) {
            console.log(response);
            document.getElementById('icon').classList.remove('working');
            document.getElementById('icon').classList.add('you');
            var followers = parseInt(document.getElementById('counter').innerHTML);
            document.getElementBtyId('counter').innerHTML = followers + 1;
         }
    }
    function joyify(title, url) {
        document.getElementById('icon').classList.add('working');
        var d = document.createElement('script');
        d.setAttribute('src', 'http://<?php echo $siteDomain ?>/rpc?title=' + encodeURI(title) + '&url=' + encodeURI(url));
        d.setAttribute('type', 'text/javascript');
        document.head.appendChild(d);
    }
</script>
<a href="#" onclick="joyify('<?php echo $title?>', '<?php echo $url?>')"><img src="img/joyify.png" style="float: left" id="icon" class="<?php if($you):?>you<?php endif;?> you"/><div id="counter" class="counter"><?php echo $count?></div>
<?php } ?>
