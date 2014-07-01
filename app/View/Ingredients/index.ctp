<h2> List of Ingredients<h2>

<?php echo $this->Html->link(
    'Add Ingredient',
    array('controller' => 'ingredients', 'action' => 'add')
); ?>

<table>
	<tr>
		<th>Name</th>
		<th>Picture</th>
		<th>Decription</th>
	</tr>
	<?php foreach ($ingredients as $ingredient) : ?>
	<tr>
		<td><?php 
				echo $this->Html->link(
					$ingredient['Ingredient']['title'],
					array('action'=>'view', $ingredient['Ingredient']['id'])
				); 
			;?> 
		</td>
		<td><?php echo $ingredient['Ingredient']['image']; ?></td>
		<td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $ingredient['Ingredient']['id'])
                );
            ?>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $ingredient['Ingredient']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
	</tr>

	<?php endforeach; ?>

</table>