<?php
class Song extends AppModel {
    var $belongsTo = array(
        'Artist' => array(
            'foreignKey' => 'artist_id'
        ),
        'Release' => array(
            'foreignKey' => 'release_id'
        )
    );
    var $hasMany = array(
        'Track' => array(
            'foreignKey' => 'song_id'
        )
    );
}
