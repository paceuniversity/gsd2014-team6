<?php

class TwistsController extends AppController{
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

	var $name = 'Twists';

	public function index() {
        $this->set('twists', $this->Twist->find('all'));
    }

	public function view($id = NULL) {
        //$this->set('twist_item', $this->R ecipe->read(NULL, $id));
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $twist = $this->Twist->findById($id);
        if (!$twist) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('twist_item', $twist);
        echo debug($this->Twist->find());
    }
     public function add() {
        if ($this->request->is('post')) {
            $this->Twist->create();
            if ($this->Twist->save($this->request->data)) {
                $this->Session->setFlash(__('Your twist has been added.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your twist.'));
        }
    }

    public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid Twist'));
	    }

	    $twist = $this->Twist->findById($id);

	    if (!$twist) {
	        throw new NotFoundException(__('Invalid Twist'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Twist->id = $id;
	        if ($this->Twist->save($this->request->data)) {
	            $this->Session->setFlash(__('Your twist has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $twist;
	    }
	}
	public function twist($id = null) {
        $twist = $this->Twist->findById($id);
        if (empty($twist)) {
            throw new NotFoundException("Twist not found");
        }

       	unset($twist['Twist']['id']);
        if (!$this->request->is('post')) {
            $this->data = $twist;
            return;
        }
 
        $this->Twist->create();
        if ($this->Twist->save(Hash::merge($twist, $this->data))) {
            $this->Session->setFlash(__('Your twist has been edited.'));
            return $this->redirect(array('action' => 'index'));
        } else {
        	$this->Session->setFlash(__('Poopsicles.'));
        }
    }

	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }

	    if ($this->Twist->delete($id)) {
	        $this->Session->setFlash(
	            __('The twist with id: %s has been deleted.', h($id))
	        );
	        return $this->redirect(array('action' => 'index'));
	    }
	}
}