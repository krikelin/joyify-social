<?php
class Joy extends AppModel {
    public $name = 'Joy';
    public $belongsTo = 'User';
    var $fields = array(
        'url' => array(
            'type' => 'text'
        )
    );
    
}
