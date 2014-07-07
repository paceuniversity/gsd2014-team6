<h1>Add Recipe</h1>
<?php
echo $this->Form->create('Recipe', array('action'=>'add'));
echo $this->Form->input('title');
echo $this->Form->input('ingredients');
echo $this->Form->input('description');
echo $this->Form->end('Save Recipe');
?>