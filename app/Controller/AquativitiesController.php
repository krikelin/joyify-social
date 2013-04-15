<?php
class AquativitiesController extends AppController {
    var $components = array('Auth');
    var $uses = array('User', 'Aquativity');
    public function add() {
        if ($this->request->is('post')) {
            $data = $this->request->data['Aquativity'];
            $data['user_id'] = $this->Auth->user('id');
            $data['description'] = '';
            $data['token'] = md5("".date('Ymd H:i:s')."2".rand());
            if($this->Aquativity->save($data, false, array('title', 'token', 'public', 'clothes', 'strikes', 'laps', 'duration', 'user_id', 'time', 'description'))) {
                $this->redirect('/Account/Aquativity');
            
            } else {
                die('error');     
            }
        }    
    }
    public function view($token) {
        $aquativity = $this->Aquativity->find('first', array('conditions' => array('token' => $token, 'OR' => array('user_id' => $this->Auth->user('id'), 'public' => true))));
        $this->set('aquativity', $aquativity);    
    }
}
?>
