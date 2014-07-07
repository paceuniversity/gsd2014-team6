
<!--?php echo $this->Html->link(
    'Add Twist',
    array('controller' => 'twists', 'action' => 'add')
); ?-->
<ul data-role="listview">
	<?php foreach ($twists as $twist) : ?>
	<li>	<?php 
				echo $this->Html->link(
					$twist['Twist']['title'],
					array('action'=>'view', $twist['Twist']['id'])
				); 
			;?> 
	</li>
	
	<?php endforeach; ?>
</ul>