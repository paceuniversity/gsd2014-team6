<?php

class IngredientsController extends AppController{
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

	var $name = 'Ingredients';

	public function index() {
        $this->set('ingredients', $this->Ingredient->find('all'));
    }

	public function view($id = NULL) {
        //$this->set('ingredient_item', $this->Ingredient->read(NULL, $id));
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $ingredient = $this->Ingredient->findById($id);
        if (!$ingredient) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('ingredient_item', $ingredient);
    }
     public function add() {
        if ($this->request->is('post')) {
            $this->Ingredient->create();
            if ($this->Ingredient->save($this->request->data)) {
                $this->Session->setFlash(__('Your ingredient has been added.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your ingredient.'));
        }
    }

    public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid Ingredient'));
	    }

	    $ingredient = $this->Ingredient->findById($id);
	    if (!$ingredient) {
	        throw new NotFoundException(__('Invalid Ingredient'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Ingredient->id = $id;
	        if ($this->Ingredient->save($this->request->data)) {
	            $this->Session->setFlash(__('Your ingredient has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $ingredient;
	    }
	}
	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }

	    if ($this->Ingredient->delete($id)) {
	        $this->Session->setFlash(
	            __('The ingredient with id: %s has been deleted.', h($id))
	        );
	        return $this->redirect(array('action' => 'index'));
	    }
	}
}