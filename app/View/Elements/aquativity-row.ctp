<tr>
    <td></td>
    <td><?php $aquativity['Aquativity']['title']?></td>
    <td><?php echo $aquativity['Aquativity']['strikes']?></td>
    <td><datetime><?php echo $aquativity['Aquativity']['time']?></datetime></td>
    <td>
        <?php if($owner):?>
        <button class="btn btn-danger" onclick="self.location='<?php echo Router::Url('/aquativities/delete/'.$aquativity['Aquativity']['id'])?>'">Delete</button>
        <?php endif; ?>
    </td>
    <td></td>
</tr>  

