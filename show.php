<!DOCTYPE html>
<html>
<?php 
include('common/db.php'); ?>
<head>
<title>Shopping cart</title>
    <!-- Bootstrap -->
    <link href="sty.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
	<style>
#menu
{
background-color:##6699CC;
float:left;
text-align:left;
width:100%;

    margin: 10px 10px 0px; 

}
ul 
{
float:left;
list-style-type:none;
}
#sub
{
margin-left:470px;

}
p {
    margin: 10px 10px 10px;
}



#ch
{
margin-right:5px;
background-color:#CCFF66;

}

#div11
{
background-color:#66FF99;
text-align:right;
border-left:10px;
margin-left:20px;
}
#div1
{
padding:50px;
padding-left:20px;
}

</style>





  <style>
  ul li ul li ul li
{
display:none;
}

ul { font-family: Arial, Verdana; font-size: 14px; margin: 0; padding: 0; list-style: none; } ul li { display: block; position: relative; float: left; } li ul { display: none; } ul li a { display: block; text-decoration: none; color: #ffffff; border-top: 1px solid #ffffff; padding: 5px 15px 5px 15px; background: #1e7c9a; margin-left: 1px; white-space: nowrap; } ul li a:hover { background: #3b3b3b; } li:hover ul { display: block; position: absolute; } li:hover li { float: none; font-size: 11px; } li:hover a { background: #3b3b3b; } li:hover li a:hover { background: #1e7c9a; }

ul {
    font-family: Arial, Verdana;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
	
}

ul li {
    display: block;
    position: relative;
    float: left;
	padding:0 0 10px 0;
}


ul li a {
    display: block;
    text-decoration: none;
    color: #ffffff;
    border-top: 1px solid #ffffff;
    padding: 5px 15px 5px 15px;
    background: #1e7c9a;
    margin-left: 1px;
    white-space: nowrap;
}



ul li a:hover {
background: #3b3b3b;
}

li:hover ul {
    display: block;
    position: absolute;
}
li:hover li {
    float: none;
    font-size: 11px;
}
li:hover a 
{ background: #3b3b3b; }
li:hover li a:hover {
    background: #1e7c9a;
}


 ul li ul:hover li
{
display:block;
position:absolute;
}
ul li ul:hover li
{
	float:right;
	font-size:11px;
}
 ul li ul:hover a { background: #3b3b3b; }
ul li hover:ul li a:hover{
    background: #1e7c9a;
	
	
}
ul li hover:ul li:hover ul li {
    background: #1e7c9a;
	float:right; 
	top:-5px;
	left:-10px;
}

 h1 {
	background-color:#FF0000;
 left:-20px;
 }
#list
{
float:left;
}






#ch
{
margin-right:5px;
background-color:#CCFF66;

}

#fix
{
background-color:#66FF99;
text-align:right;
border-left:10;
float:left;
display:block;
height:50px;
width:50px;
}
#category
{
background-color:#99FF33;
	
}	
p:after
{
font-size:8px;
content:"- one stop shopping zone";
} 	
	</style>
	    <link href="public/css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  <body>
  <div id="wrapper" style="margin:auto;width:1000px;">
<div id="nav1" style="width:100%;	height:100px;	position:fixed;	top:0px;	left:0px;margin:0px;	padding:0px;
	width:100%;	background-color:#6699CC;	height:90px;	z-index:3000; 	margin:0 auto;	padding:0;	color:#FFFFFF;">
	
	
	<div id="one"  style="margin-top:0px; float:left; width:100%;">
     <p style="font-size:30px;">SHOPIT.com</p></div>



<div id='menu'>
                        <ul>
								<li><a href="cat2.php">HOME</a></li>
                                <li><a id='products'>Products available</a> 
                                    <ul>
									<li><a href="#">Bag</a>
										<ul>
										<li><a href="#">College</a></li>
										<li><a href="#">School</a></li>
										<li><a href="#">College</a></li>
										</ul>
									</li>
									</ul>						  
								</li>
									
                        	
                                <li><a id='categories'>Categories</a>
									<ul>
									<li><a href="#">Apparels</a></li>
									</ul>		
									
								</li>
																				
                               <li><a>WishList</a></li>
                               <li><a>Bargains</a></li>
                       </ul>
 </div>
 </div>
    

<body>
 
#menu
{
background-color:##6699CC;
float:left;
text-align:left;
width:100%;

    margin: 10px 10px 0px; 

}
ul 
{
float:left;
list-style-type:none;
}
#sub
{
margin-left:470px;

}
p {
    margin: 10px 10px 10px;/*width for paragraph*/
}



#ch
{
margin-right:5px;
background-color:#CCFF66;

}

#div11
{
background-color:#66FF99;
text-align:right;
border-left:10px;
margin-left:20px;
}
#div1
{
padding:50px;
padding-left:20px;
}

</style>





  <style>
  ul li ul li ul li
{
display:none;
}

ul { font-family: Arial, Verdana; font-size: 14px; margin: 0; padding: 0; list-style: none; } ul li { display: block; position: relative; float: left; } li ul { display: none; } ul li a { display: block; text-decoration: none; color: #ffffff; border-top: 1px solid #ffffff; padding: 5px 15px 5px 15px; background: #1e7c9a; margin-left: 1px; white-space: nowrap; } ul li a:hover { background: #3b3b3b; } li:hover ul { display: block; position: absolute; } li:hover li { float: none; font-size: 11px; } li:hover a { background: #3b3b3b; } li:hover li a:hover { background: #1e7c9a; }

ul {
    font-family: Arial, Verdana;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
	
}

ul li {
    display: block;
    position: relative;
    float: left;
	padding:0 0 10px 0;
}


ul li a {
    display: block;
    text-decoration: none;
    color: #ffffff;
    border-top: 1px solid #ffffff;
    padding: 5px 15px 5px 15px;
    background: #1e7c9a;
    margin-left: 1px;
    white-space: nowrap;
}



ul li a:hover {
background: #3b3b3b;
}

li:hover ul {
    display: block;
    position: absolute;
}
li:hover li {
    float: none;
    font-size: 11px;
}
li:hover a 
{ background: #3b3b3b; }
li:hover li a:hover {
    background: #1e7c9a;
}


 ul li ul:hover li
{
display:block;
position:absolute;
}
ul li ul:hover li
{
	float:right;
	font-size:11px;
}
 ul li ul:hover a { background: #3b3b3b; }
ul li hover:ul li a:hover{
    background: #1e7c9a;
	
	
}
ul li hover:ul li:hover ul li {
    background: #1e7c9a;
	float:right; 
	top:-5px;
	left:-10px;
}

 h1 {
	background-color:#FF0000;
 left:-20px;
 }
#list
{
float:left;
}






#ch
{
margin-right:5px;
background-color:#CCFF66;

}

#fix
{
background-color:#66FF99;
text-align:right;
border-left:10;
float:left;
display:block;
height:50px;
width:50px;
}
#category
{
background-color:#99FF33;
	
}	
p:after
{
font-size:8px;
content:"- one stop shopping zone";
} 	
	</style>
	    <link href="public/css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  <body>
  <div id="wrapper" style="margin:auto;width:1000px;">
<div id="nav1" style="width:100%;	height:100px;	position:fixed;	top:0px;	left:0px;margin:0px;	padding:0px;
	width:100%;	background-color:#6699CC;	height:90px;	z-index:3000; 	margin:0 auto;	padding:0;	color:#FFFFFF;">
<div id="one"  style="margin-top:0px; float:left; width:100%;">
     <p style="font-size:30px;">SHOPIT.com</p></div>
<div id='menu'>
                        <ul>
								<li><a href="cat2.php">HOME</a></li>
                                <li><a id='products'>Products available</a> 
                                    <ul>
									<li><a href="#">Bag</a>
										<ul>
										<li><a href="#">College</a></li>
										<li><a href="#">School</a></li>
										<li><a href="#">College</a></li>
										</ul>
									</li>
									</ul>						  
								</li>
									
                        	
                                <li><a id='categories'>Categories</a>
									<ul>
									<li><a href="#">Apparels</a></li>
									</ul>		
									
								</li>
																				
                               <li><a>WishList</a></li>
                               <li><a>Bargains</a></li>
                       </ul>
 </div>
 </div>
 

<div id="category">
<div id="cat">
<form action="" method="post" name="myform">


<select name="skills" onChange="this.form.submit();" >
		<option value="Categories" selected="selected">Categories</option>
		<option value="belt">Belts</option>
		<option value="electronic">Electronic</option>
		<option value="apparels">Apparels</option>
		<option value="studies">Studies</option>
		
</select>
</form>

</div>



<?php
if((!isset($_POST['skills']))&&(!isset($_POST['check1']))&&(!isset($_SESSION['skills'])))
{ 
 $array=array("100-200","200-300","300-400","400-500"); ?>

	
<?php
echo "<br><hr><h3>Refine</h3><table><tr>";
foreach($array as $a)
{
 echo "<input type=checkbox value=readonly />$a</tr><tr>";
 }
 echo "</table>";
 echo "<br><hr>";
 echo "<h3>Brand</h3><table><tr>";
 $bb=array("XX","YY","ZZ","AA","Unisex");
foreach($bb as $a)
{
 echo "<input type=checkbox value=readonly />$a</tr><tr>";
 }
 echo "</table><hr>";
 }
 
?>

<?php if(isset($_POST['skills'])) {  
$skills=$_POST['skills']; ?>
<div id="cat2">

		<h2>Brand</h2>
<form action="" method="post">
		<?php $results=mysql_query("select * from products where cat='$skills'");
	
			$_SESSION['skill']=$skills;
			
			while($array=mysql_fetch_array($results))
			{
			$arr[]=$array['brand'];
			}
			$brand1=array("XX","YY","ZZ","AA");
			$hello=array_diff($brand1,$arr); 
			?>
			
			<table>
			<?php 
			foreach($brand1 as $jj)
				{ ?> 
				<tr>
				<?php 
				
				if(in_array($jj,$hello))
				{
				echo "<input type='checkbox' readonly='true' /><del>$jj</del></tr><tr>";
				}
			
				else
				{
				echo "<input type='checkbox' name='check1[]' value=$jj onchange=this.form.submit(); /><ins>$jj</ins></tr>";
				}		
				
				}
		
			?>
			</table>
			</form>
</div>		
<?php } ?>
<?php if(isset($_POST['check1'])) 
{  ?>
<div id="cat3">
		<h3>Refine </h3>
<?php 
$ran=array("100-200","200-300","300-400","400-500");

function range1($var)
{
if(($var >= 100)&&($var < 200))
{
	return true;

}
}
function range2($var)
{
if(($var >= 200)&&($var < 300))
{
	return true;

}
}

function range3($var)
{
if(($var >= 300)&&($var < 400))
{
	return true;

}
}
function range4($var)
{
if(($var >= 400)&&($var <= 500))
{
	return true;

}
}
if(isset($_POST['check1']))
{
$brand=$_POST['check1'];
$skills=$_SESSION['skill'];
$brand=$brand[0];
$_SESSION['brand']=$brand;


			$results=mysql_query("select * from products WHERE cat ='$skills' AND  brand ='$brand'");
			if((mysql_num_rows($results)) == 0)
			{
				echo "good";
			}
			
			while($arr=mysql_fetch_array($results))
			{
			$ar[]=$arr['price'];
			
			}
			
			$red=$ar;			
			?>
			<form action="" method="post">
			<?php
			if((count(array_filter($ar,"range1")))!=0)
			{	
			$one=array_intersect($red,$ar);
			$varr=$one[0];
			echo $varr;
			 //one.style.top = parseInt(one.style.top)+5+'px';
			 echo "<table><tr><input type='checkbox' name='check2[]' value=$varr onchange=this.form.submit(); /><ins>100-200</ins></tr>";
			 }
			 else
			 {
				echo  "<input type='checkbox' readonly='true' /><del>100-200</del></tr><tr>";
			 }
			 $ar=$red;
			if((count(array_filter($ar,"range2")))!=0)
			{	$array=array_filter($ar,"range2");
				$one=array_intersect($red,$array);
				$varr=$one[0]; echo $one[1];
				echo $varr;
			 echo "<input type='checkbox' name='check2[]' value=$varr onchange=this.form.submit(); /><ins>200-300</ins></tr>";
			}
			 else
			{
				
				echo  "<input type='checkbox' readonly='true' /><del>200-300</del></tr><tr>";
			}
			$ar=$red;
			if((count(array_filter($ar,"range3")))!=0)
			{	
			$one=array_intersect($red,$ar);
			$varr=$one[0];
			echo  $varr;
			 echo "<input type='checkbox' name='check2[]' value=$varr onchange=this.form.submit(); /><ins>300-400</ins></tr>";
			}
			 
			 else
			 {
				echo  "<input type='checkbox' readonly='true' /><del>300-400</del></tr><tr>";
			}
			$ar=$red;
			if((count(array_filter($ar,"range4")))!=0)
			{				
			$one=array_intersect($red,$ar);
			$varr=$one[0];
			
			 echo "<input type='checkbox' name='check2[]' value=$varr onchange=this.form.submit(); /><ins>400-500</ins></tr>";
			 }
			 else
			 {
				echo  "<tr><input type='checkbox' readonly='true' /><del>400-500</tr>";
			}
		
			 
			 
				?>
				</table>
				</form>
		
		
			</div>
			
		
<?php } } ?>
</div> 
<div id="range">
<form action="" method="post">


<select name="ski" onChange="this.form.submit();" >
		<option value="Orderby" selected="selected">Order By</option>
		<option value="pop">Popularity</option>
		<option value="asc">Price Range Ascending</option>
		<option value="des">Price Range Descending</option>
		<option value="brand">Brand Ascending</option>
			
</select>
</form>
</div>
<div id="prod"> 

<?php include('common/db.php'); ?>
	<?php 
if(isset($_POST['ski']))
{
$sot=$_POST['ski'];
if($sot=="pop")
{
$results=mysql_query("select * from products ORDER BY qtyre ASC");
}
if($sot=="asc")
{
$results=mysql_query("select * from products ORDER BY price ASC");
}
if($sot=="des")
{
$results=mysql_query("select * from products ORDER BY price DESC");
}
if($sot=="brand")
{
$results=mysql_query("select * from products ORDER BY brand ASC");
}


} 
?>
<?php if(!(isset($_POST['skills'])) && !(isset($_POST['ski'])) && !(isset($_POST['check1'])) && !(isset($_POST['check2']))) 
 {
 $items=mysql_query("select * from products"); ?>
 <table border="0" cellpadding="10" id="tab" align="center">
 <?php 
 while($result=mysql_fetch_array($items))
{ ?>
<form action="#" method='post'>



<td id="div11"> <img id="div1" src="<?php echo $result['picture']; ?>" /> </td> 
<td id="div11"><b><?php  echo $result['name']?></b><br>
      <b><?php echo $result['description']?></b><br>
      <b><big style="color:#000000">
       $<?php echo $result['price']?></big></b></td> 

	  
		<?php if($result['stock']==0){ echo "<big style='#999999'><b>Out of Stock</b></big>"; } ?>
   <?php if($result['stock']!=0) { ?>  <tr><td></td><td>  <a  href="<cart.php?id=<?php echo $result['serial'];?>&action=add "> <input type="button" name="b1"  value="ADD" /></a></td></tr> <?php } ?>


<tr><td colspan="2"><hr size="1" /></td></tr>
<?php }
 

    echo "<span width='579px'>*Please fill all the quanities</span>";

 
?>

</table>

  <input type='submit' name='formSubmit' value='Submit' id='sub' />
</form>
  
  

<?php 
}


?>
	 
	 <?php if((isset($_POST['skills'])) || (isset($_SESSION['skills'])) || (isset($_SESSION['brand'])) || (isset($_POST['check2'])) )
 {
 

 ?>
	 
	 
	

<?php
	if(isset($_POST['skills']))
	{
	$skills=$_POST['skills'];
	$chec=1;
	$results=mysql_query("select * from products WHERE cat ='$skills'");
	}
	
		
	if(isset($_POST['check1']))
	{
	$skills=$_SESSION['skill'];
	$brandy=$_POST['check1'];	
	$brandy=$brandy[0];
	$results=mysql_query("select * from products WHERE cat='$skills' AND brand ='$brandy'");
	}
	

	
	if(isset($_POST['check2']))
	{
	
	
	$skills=$_SESSION['skill'];
	
	$brandy=$_SESSION['brand'];
	
		$var2=$_POST['check2'];
		$var2=$var2[0];
		
		switch($var2)
		{
		
		case(($var2 >= 100)&&($var2 < 200)):
	  {
		echo "1";
		 $results=mysql_query("select * from  products WHERE ((price >= 100)  AND (price < 200)) AND cat='$skills' AND brand='$brandy'");
		 
		 break;
		 }
		 
		
		 case(($var2 >= 200)&&($var2 < 300)):
		 {
			echo "2";
		$results=mysql_query("select * from products WHERE cat='$skills' AND brand='$brandy' AND ((price >= 200) AND (price < 300))");
		
		
		 break;
		 }
		 
		case(($var2 >= 300)&&($var2 < 400)):
	   {
			echo "3";
		 $results=mysql_query("select * from products WHERE cat='$skills' AND brand='$brandy' AND ((price >= 300) AND (price < 400))");
		 
		 
		 break;
		 }
		 
		case(($var2 >= 400)&&($var2 <= 500)):
	   {
			echo "4";
		 $results=mysql_query("select * from products WHERE cat='$skills' AND brand='$brandy' AND ((price >= 400)  AND (price <= 500))");
				
			break;
		
	}
	
	};
	
}


}

	?>

	

	
	
	
	<?php 
	
	if(isset($results))
	{
	if((mysql_num_rows($results)) != 0)
	{
	//echo mysql_num_rows($results);
		$count=0; 
	 echo "<table border='1' cellpadding='10'  bgcolor='#663399' id='tab'><tr>";
	while($array=mysql_fetch_array($results)) 
	{
	
	?>
	<?php 
	if(($count>0) and (($count%2)==0))
	{
	echo "</tr><tr>";
	}  ?>
	<td id="div11"><img id='div11' src='<?php echo $array['picture']; ?>' /> </td>
	<td id="div11"><?php echo $array['name']; echo "<br>";
	echo " ".$array['description']; echo "<br>";
	echo " ".$array['price']; echo "<br>";
	echo " ".$array['brand']; echo "<br>";
	?>
</td> 
<?php	 
$count=$count+1; 
}
//echo '</tr>';
?>

</table>
<?php }
else
{
	echo "No products found";
	}
	}
 $chec=0;
$chec1=0;
?>



 </div>

<style>


</style>
</div>
</div>
</body>
</html>






        
   
   
<?php 
$count=0;
$results=mysql_query("select * from products");

		$count=0; 
		?>
	<div id="products" class="3-per-row">
	<div id="row">
	<?php 
	while($array=mysql_fetch_array($results)) 
	{
?>

<?php 
	if(($count>0) and (($count%3)==0))
	{
	echo "</div><div class='products'>";
	}  ?>
	<div class='unit'>
	<div class='product'>
	<div class='wrapper'>
	<div class='thumb'>
	<a class="prd-img" style="height:200px;width:200px;" href="#">
<img title="<?php echo $array['name']; ?>" src="<?php echo $array['picture']; ?>">
</a>
<div class="title">
<a class="anchor" href="#"> <?php  echo $array['name']; ?> </a>
</div>

<div class="line1">
<div class="price1">
<span class="price"><?php echo $array['price']; ?></span>
<br>
</div>
</div>

</div>
</div>
</div>
</div>
<?php	 
$count=$count+1; 
}

?>
</body>
</html>
