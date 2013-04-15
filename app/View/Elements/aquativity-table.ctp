<table class="aquativity table table-striped table-condensed table-bordered">
    <thead> 
        <th></th>
        <td>Title</td>
        <td>Strikes</td>
        <td>d</td>
        <td></td>
    </thead>
    <tbody>
        <?php foreach($aquativities as $aquativity):?>
        <?php echo $this->element('aquativity-row', array('aquativity' => $aquativity, 'owner' => true));?>
        <?php endforeach; ?>
    </tbody>
</table>
