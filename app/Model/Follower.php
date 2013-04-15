<?php
class Follower extends AppModel {
    var $belongsTo = array(
        'User' => array(
            'foreignKey' => 'follower_id'
        )
    );
    var $hasOne = array(
        'User' => array(
            'model' => 'User',
            'foreignKey' => 'user_id'
        ),
        'Follower' => array(
            'model' => 'User',
            'foreignKey' => 'user_id'
        )
    );
