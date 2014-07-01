<?php

class Ingredient extends AppModel {
	var $name = 'Ingredient'; 
	public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'description' => array(
            'rule' => 'notEmpty'
        )
    );

}