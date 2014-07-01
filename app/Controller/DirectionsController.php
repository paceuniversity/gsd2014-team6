<?php

class DirectionsController extends AppController{
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

	var $name = 'Directions';

	public function index() {
        $this->set('directions', $this->Direction->find('all'));
    }

	public function view($id = NULL) {
        //$this->set('direction_item', $this->Direction->read(NULL, $id));
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $direction = $this->Direction->findById($id);
        if (!$direction) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('direction_item', $direction);
    }
     public function add() {
        if ($this->request->is('post')) {
            $this->Direction->create();
            if ($this->Direction->save($this->request->data)) {
                $this->Session->setFlash(__('Your direction has been added.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your direction.'));
        }
    }

    public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid Direction'));
	    }

	    $direction = $this->Direction->findById($id);
	    if (!$direction) {
	        throw new NotFoundException(__('Invalid Direction'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Direction->id = $id;
	        if ($this->Direction->save($this->request->data)) {
	            $this->Session->setFlash(__('Your direction has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $direction;
	    }
	}
	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }

	    if ($this->Direction->delete($id)) {
	        $this->Session->setFlash(
	            __('The direction with id: %s has been deleted.', h($id))
	        );
	        return $this->redirect(array('action' => 'index'));
	    }
	}
}