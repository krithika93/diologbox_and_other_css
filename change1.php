<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Display Items </title>
<script type="text/javascript">
var hello;
var hello1;
var hello2;
var h;
var g;
function hell()
{
h=document.getElementById("he");
h.src="images/lap.jpg";

}
function hover1()
{
g=document.getElementById("hello");
g.style.backgroundImage='url(images/arrow.png)';
g.style.background-postion=
//how to style these background postion bakcground image height
hello=document.getElementById("he");
hello.src="images/lap.jpg";
}
function hov1()
{
g=document.getElementById("hello");
g.style.backgroundImage='none';
}
function hov2()
{
g=document.getElementById("hello1");
g.style.backgroundImage='none';
}
function hov3()
{
g=document.getElementById("hello2");
g.style.backgroundImage='none';
}
function hover2()
{
g=document.getElementById("hello1");
g.style.backgroundImage='url(images/arrow.png)';
hello1=document.getElementById("he");
hello1.src="images/gal.jpg";
}
function hover3()
{
g=document.getElementById("hello2");
g.style.backgroundImage='url(images/arrow.png)';
hello2=document.getElementById("he");
hello2.src="images/cam.jpg";
}

window.onload=hell;
</script>
<style>
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