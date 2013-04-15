<?php

class PlayerController extends AppController {
    var $components = array('Auth');
    var $uses = array('User', 'Track', 'Joy');
    public function index() {
        $this->layout = 'player';
    }
}
