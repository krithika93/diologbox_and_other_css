<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Display Items </title>
<style>
#hello:hover
{
<?php  $var="images/lap.jpg";  ?>
}

#hello1:hover
{
<?php $var="images/gal.jpg"; ?>
 }

#hello2:hover
{
<?php $var="images/cam.jpg";  ?> 
 }
</style>
</head>
<body>
<div id="main" style="height:210px; width:727px;"> 
<img src="<?php echo $var; ?>"/>
</div>
<div id="hello" style="top:200px; float:left;">
<img src="images/lap1.jpg" />
</div>
<div id="hello1" style="top:200px; float:left;">
<img src="images/gal1.jpg" />
</div>
<div id="hello2" style="top:200px;float:left;">
<img src="images/cam1.jpg" />
</div>
</body>
</html>

