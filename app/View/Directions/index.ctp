<h2> List of Directions<h2>

<?php echo $this->Html->link(
    'Add Direction',
    array('controller' => 'directions', 'action' => 'add')
); ?>

<table>
	<tr>
		<th>Step</th>
		<th>Step Number</th>
		<th>Recipe ID</th>
	</tr>
	<?php foreach ($directions as $direction) : ?>
	<tr>
		<td><?php 
				echo $this->Html->link(
					$direction['Direction']['step'],
					array('action'=>'view', $direction['Direction']['id'])
				); 
			;?> 
		</td>
		<td><?php echo $direction['Direction']['stepnumber']; ?></td>
		<td><?php echo $direction['Direction']['recipe_id']; ?></td>
		<td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $direction['Direction']['id'])
                );
            ?>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $direction['Direction']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
	</tr>

	<?php endforeach; ?>

</table>