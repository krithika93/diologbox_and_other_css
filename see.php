<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
//php// $hello1="hello23"; ?>
//var hello2=<?php //echo "good"; ?>  

function hello()
{
document.write("hello");
}
/*var count=1;
function showdiv(val)  
{	
var div = document.getElementById("hello");
div.style.display="block";
//var hello2="good";
//div.innerHTML=""+hello2+" ";
var div2=document.getElementById("hello1");
div2.style.display="block";
return val;
/*if(count==1)
{
var div1 = document.getElementById("set");
var srcc='?count=1';
div1.setAttribute('href',srcc);

count=count+1;
}*///on click for which all divs
//}
/*var hep=1;
if(hep==1)
{
function good()
{

}
}*/
/*function closediv()
{
var div1=document.getElementById("main");
div1.setAttribute('href','try.php?count=2');
var div2=document.getElementById("hello1");
div2.style.display="none";

var div=document.getElementById("hello");
div.style.display="none";  
}*/
/*window.onload=good; on load a function to set aattribute on click load a fucntion on a particular condition end on a particular condition*/
/*
function good()
{
var div2=document.getElementById("hello");
var div3=document.getElementById("hello1");
div2.style.display="none";
div3.style.display="none";//form validation
return;
}


body.onload=good;*/
</script>


</head>

<body>
<?php if(isset($_POST['goo'])){ echo $_POST['goo']; }?>
<div id="main" class="p1" style="height:200px; width:300px; background-color:#FFFF00;opacity:<?php if(isset($GET['count'])) { if($_GET['count'] == 1){ echo "0.4"; } } else { echo "1"; } ?> <?php if(isset($GET['count'])) { ?>filter:<?php if($_GET['count'] == 1){ echo "alpha(opacity=40)"; } } else { echo "alpha(opacity=100)"; } ?>">
<a href="try.php?count=1"><img  src="cartshop/images/3446548-open-purse-feminine-red-with-money.jpg"/></a>
</div>
<br>
<div id="main" class="p2"  style="height:200px; width:300px; background-color:#99FF33;opacity:<?php if(isset($GET['count'])) { if($_GET['count'] == 1){ echo "0.4"; } } else { echo "1"; } ?> <?php if(isset($GET['count'])) { ?>filter:<?php if($_GET['count'] == 1){ echo "alpha(opacity=40)"; } } else { echo "alpha(opacity=100)"; } ?>">
<a href="try.php?count=2"><img  src="cartshop/images/bag.jpg"/></a>
</div>
<br>
<div id="main" class="p3" style="height:200px; width:300px; background-color:#33FFFF;opacity:<?php if(isset($GET['count'])) { if($_GET['count'] == 1){ echo "0.4"; } } else { echo "1"; } ?> <?php if(isset($GET['count'])) { ?>filter:<?php if($_GET['count'] == 1){ echo "alpha(opacity=40)"; } } else { echo "alpha(opacity=100)"; } ?>">

<a href="try.php?count=3"><img  src="cartshop/images/book.jpg" /></a>
</div>
<?php if(isset($_GET['count']))
{ ?>
<div id="hello" style="height:100px; width:100px; background-color:#00FFFF;opacity:<?php if(isset($GET['count'])) { if($_GET['count'] == 1){ echo "0.4"; } }?> position:<?php if($_GET['count'] == 1) { echo "absolute"; } else {echo "relative"; } ?> z-index:<?php if($_GET['count'] == 1) { echo "5000"; } else { echo "auto"; } ?> display:<?php if($_GET['count'] == 1) {  echo "block"; } else { echo "none";  } ?>">
<?php echo "how are you?"; ?>
<?php
if(isset($_GET['count']))
{
 if($_GET['count']==1)
{
echo "good";//href and show div too 
}
 if($_GET['count']==2)
{
echo "good1";
}
 if($_GET['count']==3)
{
echo "good2";
} //return true
}
?>

<?php 
if(isset($_POST['hello1']))
{
if($_POST['hello1'] == "good")
		{
		echo "good1";
		}
}		
		?>
		
<form method="post" action="<?php if(isset($_POST['goo'])) {echo "try.php?count=1";  }  else { echo "try.php?count=2" ;} ?>" > 
<input type="text" id="hello1" name="hello1" />
<input type="submit" name="goo" value="one" />

<input type="submit" name="goo1" value="two" />
</form>
 
<!--<a href="try.php?count=2"> -->
<div id="hello1" style="background:#FF0000; height:10px;width:10px; opacity:<?php if(isset($GET['count'])) { if($_GET['count'] == 1){ echo "1"; } } else { echo "0";}?> <?php if(isset($GET['count'])) { ?>position:<?php if($_GET['count'] == 1) { echo "absolute"; } } else { echo "relative"; } ?> z-index:<?php if($_GET['count'] == 1) { echo "5000"; } else { echo "auto"; } ?> display:<?php if(isset($GET['count'])) {  if($_GET['count'] == 1) {  echo "block"; } } else { echo "none";  } ?>" >


</div> </a>
</div>
<?php  //if isset here } ?>










</body>
</html>
