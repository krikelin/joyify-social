<?php
class UsersController extends AppController {
    var $uses = array('User', 'Joy');
    var $components = array('Auth');
    public __beforeFilter() {
        $this->Auth->allow('/');
         
    }
}
