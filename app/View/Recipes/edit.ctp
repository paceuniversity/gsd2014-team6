<h1>Edit Recipe</h1>
<?php
echo $this->Form->create('Recipe');
echo $this->Form->input('title');
echo $this->Form->input('image', array('rows' => '1'));
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'POST'));
echo $this->Form->end('Save Recipe');
?>