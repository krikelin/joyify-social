<?php
class Track extends AppModel {
    var $belongsTo = array(
        'Song' => array(
            'foreignKey' => 'song_id'
        ),
        'Artist' => array(
            'foreignKey' => 'artist_id'
        ),
        'Release' => array(
            'foreignKey' => 'release_id'
        )
    );
}
