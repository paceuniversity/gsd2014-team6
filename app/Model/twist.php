<?php

class Twist extends AppModel {
	var $name = 'Twist';
    public $primaryKey = 'id'; 

	public $hasMany = array(
        'Direction' => array(
            'className' => 'Direction',
            'foreignKey' => 'recipe_id',
            'dependent' => true
        )
    );
     public $hasAndBelongsToMany = array(
        'Ingredient' =>
            array(
                'className' => 'Ingredient',
                'joinTable' => 'ingredients_recipes',
                'foreignKey' => 'recipe_id',
                'associationForeignKey' => 'ingredient_id',
            )
    );
}