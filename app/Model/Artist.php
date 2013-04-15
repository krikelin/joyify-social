<?php
class Artist extends AppController {
    var $hasMany = array(
        'Track' => array(
            'foreignKey' => 'artist_id'
        ),
        'Release' => array(
            'foreignKey' => 'artist_id'
        )
    );
}
