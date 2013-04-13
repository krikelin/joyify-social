<?php
class Joy extends AppModel {
    public $name = 'Joy';
    var $components = array('Auth');
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );
    
    var $fields = array(
        'url' => array(
            'type' => 'text'
        )
    );
    
}
