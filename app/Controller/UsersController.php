<?php
// app/Controller/UsersController.php
class UsersController extends AppController {

    // app/Controller/UsersController.php
    var $uses = array('Joy', 'User');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'home', 'add'); // Letting users register themselves
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }
    }
    public function settings() {
        if($this->request->is('post')) {
            $update = array(
                'id' => $this->Auth->user('id'),
                'bio' => $this->request->data['bio']
            );

            $this->User->save($update, false, array('id', 'bio'));
        }
        $users = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))));
        $user = $users['User'];
        $this->set('user', $user);
    }
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
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

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
