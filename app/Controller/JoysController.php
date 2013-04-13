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
        $status = 200;
        try {
            $url = $this->request->query('url');
            $title = $this->request->query('title');
            $data = array(
                'url' => $url,
                'title' => $title,
                'user_id' => $this->Auth->user('id')
            );
            $this->Joy->save($data);
            $this->layout = 'rpc';
            $this->response->type('application/javascript');
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
