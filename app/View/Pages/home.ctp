<div class="row-fluid">
    <div class="span12 hero-unit">
        <h1>Welcome to Joyify</h1>
        <p>Innovative service for musicians, Aqua Joggers and social people</p>
    </div>
</div>
<div class="row-fluid">
    <div class="span4 page">
        <h3>Aquativity tracker</h3>   
        <p>For Aqua Joggers</p>
    
    </div>
    <div class="span4 page">
        <h3>Five step promotion</h3>   
        <p>For musicians</p>
    
    </div>
    <div class="span4 page">
        <h3>Latest joyed</h3>   
        <table>
            <tbody>
                <?php foreach($joys as $joy):?>
                <tr>
                    <td><?php echo $joy['Joy']['time']?></td>
                    <td><?php echo $this->Html->link($joy['Joy']['title'], '/joys/click/'.$joy['Joy']['token'])?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    
    </div>
</div>
