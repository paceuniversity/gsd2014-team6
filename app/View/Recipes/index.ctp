
<!--?php echo $this->Html->link(
    'Add Recipe',
    array('controller' => 'recipes', 'action' => 'add')
); ?-->
<ul data-role="listview">
	<?php foreach ($recipes as $recipe) : ?>
	<li>	<?php 
				echo $this->Html->link(
					$recipe['Recipe']['title'],
					array('action'=>'view', $recipe['Recipe']['id'])
				); 
			;?> 
	</li>
	
	<?php endforeach; ?>
</ul>