<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $this->fetch('title'); ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<!--link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css" /-->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>


<?php

echo $this->Html->css('jquery.mobile');
echo $this->Html->css('jquery.mmenu.all');

echo $this->Html->script('jquery-2.1.1.min');
echo $this->Html->script('jquery.mmenu.min.all');

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>

<div data-role="page" id="pageone">

  <div data-role="panel" id="myPanel"> 
    <h2>Panel Header</h2>
    <ul data-role="listview">
		    		<li><?php echo $this->Html->link('Traditional Recipes',array('controller' =>'recipes', 'action' => 'index'));?></li>
		    		<li><a href="#">Twist List</a></li>
		    		<li><?php echo $this->Html->link('Ingredients', array('controller' => 'ingredients', 'action' => 'index')); ?></li>
		    		<li><?php echo $this->Html->link('Add Ingredient', array('controller' => 'ingredients', 'action' => 'add')); ?></li>
		    	</ul>
  </div> 

<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->
	<div data-role="header">
	<div data-role="navbar">
	<ul>
		<li><a href="#myPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Menu</a></li>
	</ul>
	</div>	
	</div>    

<div data-role="main" class="ui-content">
	
		
<!-- Here's where I want my views to be displayed -->
<?php echo $this->fetch('content'); ?>
</div>
<!-- Add a footer to each displayed page -->
<div data-role="footer">
    <h1>Insert Footer Text Here</h1>
 </div>

</div>
</body>

</html>