<?php
class JoysController extends AppController {
    var $uses = array('Joy', 'User');
    var $components = array('Auth');
    public function beforeFilter() {    
        $this->set('siteDomain', Configure::read('siteDomain'));
        $loggedIn = $this->Auth->loggedIn();
        $this->set('loggedIn', $loggedIn);
        $this->Auth->allow('index', 'widget');
    }
    public function index() {
    }
    public function joyify() {
        $url = $this->request->query('url');
        $title = $this->request->query('title');
        if ($this->request->is('post')) {
            
            try {
                $url = $this->request->data['Joy']['url'];
                $title = $this->request->data['Joy']['title'];
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
                // Get open graph properties
                $html = file_get_contents($url);
                libxml_use_internal_errors(true); // Yeah if you are so worried about using @ with warnings
                $doc = new DomDocument();
                
                $doc->loadHTML($html);
                $xpath = new DOMXPath($doc);
                
                $query = '//head/title';
                $metas = $xpath->query($query);
                try {
                    foreach ($metas as $meta) {
                      $data['title'] = $meta->nodeValue;
                    }
                } catch (Exception $e) {
                }
                $query = '//*/meta[starts-with(@property, \'og:\')]';
                $metas = $xpath->query($query);
            
                foreach ($metas as $meta) {
                    $property = $meta->getAttribute('property');
                    $content = $meta->getAttribute('content');
                    $rmetas[$property] = $content;
                }
                if(array_key_exists('og:image', $rmetas)) {
                    $data['image'] = $rmetas['og:image'];
                }
                if(array_key_exists('og:description', $rmetas)) {
                    $data['description'] = $rmetas['og:description'];
                }      
                if(array_key_exists('og:title', $rmetas)) {
                    $data['title'] = $rmetas['og:title'];
                }
                $this->Joy->save($data);
            } catch (Exception $e) {
                $status = 500;
            }
            $this->redirect('/');
        } else {
            $this->set('url', $url);
            $this->set('title', $title);
        }
    }
    public function widget() {
        
        $this->set('siteDomain', Configure::read('siteDomain'));
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
        $this->render('widget_joy');
    }   
    public function submit() {
        if ($this->request->is('post')) {
            
            try {
                $url = $this->request->data['Joy']['url'];
                $title = '';
                // die($url);
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
                // Get open graph properties
                $html = file_get_contents($url);
                libxml_use_internal_errors(true); // Yeah if you are so worried about using @ with warnings
                $doc = new DomDocument();
                
                $doc->loadHTML($html);
                $xpath = new DOMXPath($doc);
                
                $query = '//head/title';
                $metas = $xpath->query($query);
                try {
                    foreach ($metas as $meta) {
                      $data['title'] = $meta->nodeValue;
                    }
                } catch (Exception $e) {
                }
                $query = '//*/meta[starts-with(@property, \'og:\')]';
                $metas = $xpath->query($query);
            
                foreach ($metas as $meta) {
                    $property = $meta->getAttribute('property');
                    $content = $meta->getAttribute('content');
                    $rmetas[$property] = $content;
                }
                if(array_key_exists('og:image', $rmetas)) {
                    $data['image'] = $rmetas['og:image'];
                }
                if(array_key_exists('og:description', $rmetas)) {
                    $data['description'] = $rmetas['og:description'];
                }      
                if(array_key_exists('og:title', $rmetas)) {
                    $data['title'] = $rmetas['og:title'];
                }       
                // die(print_r($data));
                $this->Joy->save($data);
            } catch (Exception $e) {
            }
            $this->redirect('/');
        }
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
            // Get open graph properties
            $html = file_get_contents($url);
            libxml_use_internal_errors(true); // Yeah if you are so worried about using @ with warnings
            $doc = new DomDocument();
            
            $doc->loadHTML($html);
            $xpath = new DOMXPath($doc);
            $query = '//*/meta[starts-with(@property, \'og:\')]';
            $metas = $xpath->query($query);
        
            foreach ($metas as $meta) {
                $property = $meta->getAttribute('property');
                $content = $meta->getAttribute('content');
                $rmetas[$property] = $content;
            }
            if(array_key_exists('og:image', $rmetas)) {
                $data['image'] = $rmetas['og:image'];
            }
            if(array_key_exists('og:description', $rmetas)) {
                $data['description'] = $rmetas['og:description'];
            }      
            if(array_key_exists('og:title', $rmetas)) {
                $data['title'] = $rmetas['og:title'];
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
