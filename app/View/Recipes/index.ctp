<h2> List of Recipes<h2>

<?php echo $this->Html->link(
    'Add Recipe',
    array('controller' => 'recipes', 'action' => 'add')
); ?>

<table>
	<tr>
		<th>Name</th>
		<th>Picture</th>
		<th>Decription</th>
	</tr>
	<?php foreach ($recipes as $recipe) : ?>
	<tr>
		<td><?php 
				echo $this->Html->link(
					$recipe['Recipe']['title'],
					array('action'=>'view', $recipe['Recipe']['id'])
				); 
			;?> 
		</td>
		<td><?php echo $recipe['Recipe']['image']; ?></td>
		<td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $recipe['Recipe']['id'])
                );
            ?>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $recipe['Recipe']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
	</tr>

	<?php endforeach; ?>

</table>