<h2><?php echo h($recipe_item['Recipe']['title']); ?></h2>

<p>
	<?php echo h($recipe_item['Recipe']['image']); ?>
	<br/><br/>
	<?php echo h($recipe_item['Recipe']['description']); ?>

</p>

<div class="ui-btn ui-btn-inline">
	<?php 
		if ($recipe_item['Recipe']['twisted'] == '1'){

			echo $this->Html->link('Edit', array('action' => 'edit', $recipe_item['Recipe']['id']));
		}
	?>

	<?php
			echo $this->Html->link('Twist', array('action' => 'twist', $recipe_item['Recipe']['id']));
	?>
</div>
