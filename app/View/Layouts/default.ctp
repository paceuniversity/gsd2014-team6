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
echo $this->Html->css('jquerycss');
echo $this->Html->css('custom');

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>

<div data-role="page" id="pageone">
<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->
<div data-role="header">
    <h1>This is the Header<h2>
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