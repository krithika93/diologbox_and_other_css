<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
#hello
{ 
display: <?php
		if(isset($_GET['count']))
		{
		$count=$_GET['count'];
		if($count==1)
		{
			echo "block";
			
		}
		}
		else
		{
			echo "none";
			
		}	
		
		?> 	


}
#hello1
{
display:<?php
		if(isset($_GET['count']))
		{
		$count=$_GET['count'];
		if($count==1)
		{
			echo "block";
			
		}
		}
		else
		{
			echo "none";
		}	
		
		?> 	


}


</style>
<script>
//php// $hello1="hello23"; ?>
//var hello2=<?php //echo "good"; ?>  

/*function showdiv(val)  

{	

var div = document.getElementById("hello");
div.style.display="block";
var div2=document.getElementById("hello1");
div2.style.display="block";
/*var hello2="good";
div.innerHTML=""+hello2+"";*/
}
/*function good()

{
var hello="hello";
var div1 = document.getElementById("set");
var srcc='trail1.html?count='+hello;//can there be function within fucntion
div1.setAttribute('href',srcc);
}
function closediv()
{
var div2=document.getElementById("hello1");
div2.style.display="none";
var div=document.getElementById("hello");
div.style.display="none";  //onclick setattribute div hello on appear if it appears
}
window.onload=good;*/*/
</script>


</head>

<body>
<a id="set" href="tri.php?count=<?php $count=1; echo $count; ?>"><div id="main"  style="height:200px; width:300px; background-color:#FFFF00;">
</div> </a>

<div id="hello" style="height:500px; width:600px; background-color:#00FFFF; display:none">

 

 <div id="hello1" style="background:#FF0000; height:10px;width:10px;display:none" ">
 </div>
</div>









</body>
</html>
