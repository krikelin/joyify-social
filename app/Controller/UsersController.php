<?php
// app/Controller/UsersController.php
class UsersController extends AppController {

    // app/Controller/UsersController.php
    var $uses = array('Joy', 'User', 'Tune', 'Level');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'home', 'add'); // Letting users register themselves
    }
public function view($user = null) {
        $users = $this->User->find('first', array('conditions' => array('User.username' => $user)));
        $user = $users['User'];
        $joys = $this->Joy->find('all', array(
            'conditions' => array(
                'user_id' => $user['id']
            ),'order' => 'time DESC'));
        $this->set('joys', $joys);
        $this->set('user', $user);
        
    }
    public function tunes() {
        $this->layout = 'wide';
        $stunes = $this->Tune->find('all', array('conditions' => array('user_id' => $this->Auth->user('id'))));
        $tunes = Array();
        foreach($stunes as $tune) {
            $level = $this->Level->find('first', array('conditions' => array('id' => $tune['Tune']['level'])));
            
            $tune['Level'] = $level['Level'];
            $tunes[] = $tune;   
           
        }
        $this->set('tunes', $tunes);    
    }
   
}
