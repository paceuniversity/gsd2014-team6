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

  <!--div data-role="panel" id="myPanel"> 
    <h2>Panel Header</h2>
    <ul data-role="listview">
		    		<li><a href="#">Traditional Recipes</a></li>
		    		<li><a href="#">Twist List</a></li>
		    		<li><a href="#">Ingredients</a></li>
		    	</ul>
  </div--> 

<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->
	<div data-role="header">
	<div data-role="navbar">
	<ul>
		<li><a href="#my-menu">Menu</a></li>
	</ul>
	</div>	
	<!--ul>
	 <li><a href="#myPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Open Panel</a></li>
	</ul-->	
	<nav id ="my-menu">
		    	<ul>
		    		<li><a href="#">Traditional Recipes</a></li>
		    		<li><a href="#">Twist List</a></li>
		    		<li><a href="#">Ingredients</a></li>
		    	</ul>
		    </nav>	
		<script>
		   $(document).ready(function() {
		      $("#my-menu").mmenu();
		      	$("#my-button").click(function() {
		        	$("#my-menu").trigger("open.mm");
		      });
		   });
		</script>
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