<?php
class Release extends AppModel {
    var $hasMany = array(
        'Track' => array(
            'foreignKey' => 'release_id'
        )
    );
    var $belongsTo = array(
        'Artist' => array(
            'foreignKey' => 'artist_id'
        )
    );
}
