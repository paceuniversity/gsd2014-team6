<?php

class RecipesController extends AppController{
	public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

	var $name = 'Recipes';

	public function index() {
        $this->set('recipes', $this->Recipe->find('all'));
    }

	public function view($id = NULL) {
        //$this->set('recipe_item', $this->Recipe->read(NULL, $id));
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $recipe = $this->Recipe->findById($id);
        if (!$recipe) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('recipe_item', $recipe);
        echo debug($this->Recipe->find());
    }
     public function add() {
        if ($this->request->is('post')) {
            $this->Recipe->create();
            if ($this->Recipe->save($this->request->data)) {
                $this->Session->setFlash(__('Your recipe has been added.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your recipe.'));
        }
    }

    public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid Recipe'));
	    }

	    $recipe = $this->Recipe->findById($id);

	    if (!$recipe) {
	        throw new NotFoundException(__('Invalid Recipe'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Recipe->id = $id;
	        if ($this->Recipe->save($this->request->data)) {
	            $this->Session->setFlash(__('Your recipe has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $recipe;
	    }
	}
	public function twist($id = null) {
		
       if (!$id) {
	        throw new NotFoundException(__('Invalid Recipe'));
	    }

	    $recipe = $this->Recipe->findById($id);
	    
	    
	    if (!$recipe) {
	        throw new NotFoundException(__('Invalid Recipe'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Recipe->id = $id;
	        if ($this->Recipe->save($this->request->data)) {
	            $this->Session->setFlash(__('Your recipe has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $recipe;
	    }
    }
	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }

	    if ($this->Recipe->delete($id)) {
	        $this->Session->setFlash(
	            __('The recipe with id: %s has been deleted.', h($id))
	        );
	        return $this->redirect(array('action' => 'index'));
	    }
	}
}