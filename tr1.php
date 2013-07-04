<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php //select from orders using session id or directly from orders details products. and insert qty too.. calc price.. registered customers are few... 
$count=2;
while($count>0)
{
$resu1=mysql_query("select order_detail.oid from order_detail where orders.id=order_detail.oid"); // oid is the end result of inserting from orders 
$resul2=mysql_query("select order_detail.pid,order_detail 
$result=mysql_query("select order_detail.pid,order_detail.qty from order_detail WHERE order_detail.oid=orders.id AND orders.cid=customers.id"); //remove orderid
			$row=mysql_fetch_array($result);
			$qty=$row['qty']; //
			$pid=$row['pid'];
$count--; 
}





?>
 
</body>
</html>
?> 
