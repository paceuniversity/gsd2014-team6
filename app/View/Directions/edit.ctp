<h1>Edit Direction</h1>
<?php
echo $this->Form->create('Direction');
echo $this->Form->input('title');
echo $this->Form->input('image', array('rows' => '1'));
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>