<h1>Add Twist</h1>
<?php
echo $this->Form->create('Twist', array('action'=>'add'));
echo $this->Form->input('title');
echo $this->Form->input('image');
echo $this->Form->input('description');
echo $this->Form->end('Save Post');
?>