<h2><?php echo h($recipe_item['Recipe']['title']); ?></h2>

<p>
	<?php echo h($recipe_item['Recipe']['image']); ?>
	<br/><br/>
	<?php echo h($recipe_item['Recipe']['description']); ?>

</p>
<?php echo $this->Html->link('Twist', array('action' => 'twist', $recipe_item['Recipe']['id']));?>