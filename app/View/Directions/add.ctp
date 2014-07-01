<h1>Add Direction</h1>
<?php
echo $this->Form->create('Direction', array('action'=>'add'));
echo $this->Form->input('step');
echo $this->Form->input('stepnumber');
echo $this->Form->input('recipe');
echo $this->Form->end('Save Post');
?>