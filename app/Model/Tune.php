<?php
class Tune extends AppModel {
    var $belongsTo = 'User';
    var $hasOne = array(
        'Level' => array(
            'foreignKey' => 'id'
        )
    ); 
}

