<?php

class Direction extends AppModel {
	var $name = 'Direction'; 
	public $validate = array(
        'step' => array(
            'rule' => 'notEmpty'
        )
    );

	public $belongsTo = array(
        'Recipe' => array(
            'className' => 'Recipe',
            'foreignKey' => 'recipe_id'
        )
    );
     
}