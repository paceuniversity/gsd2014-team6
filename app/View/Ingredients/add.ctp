<h1>Add Ingredient</h1>
<?php
echo $this->Form->create('Ingredient', array('action'=>'add'));
echo $this->Form->input('title');
echo $this->Form->input('image');
echo $this->Form->input('description');
echo $this->Form->end('Save Post');
?>