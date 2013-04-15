<article class="joy entry">
    <h4><a href="<?php echo $joy['Joy']['url']?>"><?php echo $joy['Joy']['title']?></a></h4>
    <table width="100%">
        <tr>
            <?php if(isset($joy['Joy']['image'])):?>
            <td><img width="128" height="128" src="<?php echo $joy['Joy']['image']?>" /></td>
            <?php endif; ?>
            <td><p><?php echo $joy['Joy']['comments']?></p>
        </tr>
    </table>
    <button class="btn btn-delete" onclick="self.location='<?php echo Router::Url('/joys/delete/'.$joy['Joy']['token'])?>'">Delete</button>
</article>
    
