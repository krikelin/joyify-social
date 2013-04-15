<?php
class TunesController extends AppController {
    var $uses = array('Tune', 'User');
    var $components = array('Auth');
    public function submit() {
        if($this->request->is('post')) {
            $data = $this->request->data['Tune'];
            $data['user_id'] = $this->Auth->user('id');
            $data['streamUrl'] = '';
          
            $this->Tune->save($data, false, array('title', 'youtubeID', 'user_id', 'streamUrl')); 
            $this->redirect('/users/tunes');      
        }
    }
    public function view($id) {
        $tune = $this->Tune->findById($id);
        $this->set('tune', $tune);
    }
}
