<?php
class JoysController extends AppController {
    var $uses = array('Joy', 'User');
    var $components = array('Auth');
    public function index() {
    }
    public function joyify() {
        $url = $this->request->query('url');
        $title = $this->request->query('title');
        $this->set('url', $url);
        $this->set('title', $title);
    }
    public function widget() {
        
        $this->layout = 'widget';    
        $url = $this->request->query('url');
        $title = $this->request->query('title');
        $this->set('url', $url);
        $this->set('title', $title);
        // Get count of joy
        $countJoys = $this->Joy->find('count', array('conditions' => array('url' => $url)));
        $this->set('count', $countJoys);
        $you = $this->Joy->find('count', array('conditions' => array('url' => $url, 'user_id' => $this->Auth->user('id'))));    
        $this->set('you', $you > 0);  
        $this->set( 'loggedIn', $this->Auth->loggedIn() );  
    }   
    /**
    RPC view for joy.
    Allowing for jsonp interaction with widgets.
    **/
    public function rpc() {
        $this->layout = 'rpc';
        $this->response->type('application/javascript');
        $status = 200;
        try {
            $url = $this->request->query('url');
            $title = $this->request->query('title');
            $data = array(
                'url' => $url,
                'title' => $title,
                'user_id' => $this->Auth->user('id')
            );
            $count = $this->Joy->find('count', array(
                'conditions' => array(
                    'user_id' => $this->Auth->user('id'),   
                    'url' => $url
                )
            ));
            if($count > 0)
            {
                throw new Exception('Same added twice');
            }
               
            $this->Joy->save($data);
        } catch (Exception $e) {
            $status = 500;
        }
        $this->set('status', $status);
       
    }
    public function add() {
        $url = $this->request->query('url');
        $this->set('url', $url);
    }
}
