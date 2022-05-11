<!DOCTYPE html>
<html>
  <head>
       <title>BuyingCart</title>
	   <style>
h3 {
width: 180px;
height: 15px;
background-color:#D5B48A;
color: #fff;

}
#sd{
	width: 100%;

background-color:silver;
}
#total{
	background-color:green;
text-align:center;
color:white;
font-size:25px;
}
table{
	text-align:center;
	margin-left:40%;	
}
.sub{
	background-color:blue;	
	color:white;
	width: 80px;
	height: 30px;

}
.sub:hover{
	background-color:black;	

}
th{
	background-color:yellow;	
	color:black;
	font-size:25px;
	font-style:bold;
}
td{
		
	color:black;
	font-size:20px;
	font-style:bold;
	padding-top:5%;
	text-align:center;
}
#price{
	color:green;	
}
#in{
	text-align:center;
	width: 40px;
}
#order{
	text-align:center;

}
#d{
	text-align:center;
	

}
form{
	
}
</style>
	   <link href="style.css" type="text/css" rel="stylesheet" />
	   <link href="animation.gif" type="image/gif" rel="shortcut icon" />
	   <script scr="" type="text/java"></script>
	   <meta name="viewport" content="width=device-width initial-scale=1"> 
  </head>
      <body>
      <div id="header">
	  <div id="logo">
	  </div>
	  <ul id="navbar">
		<li><a href="BuyingCart.php">Buying Cart</a></li>
	   <li><a href="Home.html">Home</a></li>
	   <li><a href="sing up.html">Sing up</a></li>
	   <li><a href="login.html">login</a></li>
	   <li><a href="#Most popular books">Most popular books</a></li>
	   <li><a href="contact.html">Contact page</a></li>
	   <li><a href="out.php">Log Out</a></li> 
	</ul>
	</div>
	

	
	
    
	<br><br>

	


<?php
include "ConnectToDB.php";




$getCountity =$_POST['Bcount'];

if(isset($_POST['Edit'])){
    $EditeQuery=mysql_query("UPDATE Books SET Countity='$getCountity',Total_Price='$getCountity'*Price WHERE Book_Title=Book_Title ") or die("error");
    if(isset($EditeQuery)){
        echo"update do";  
    }
}

$ViewData=mysql_query("SELECT Book_Title,Author,Price,Countity,Total_Price FROM Books") or die("error");

if(isset($_POST['Delete'])){
	while($row=mysql_fetch_assoc($ViewData)){
    $DeleteQuery=mysql_query("DELETE FROM Books WHERE Book_Title='".$row['Book_Title']."' ") or die("error");
    if(isset($DeleteQuery)){
        echo"Delete do";  
    }
}
}
$ViewData=mysql_query("SELECT Book_Title,Author,Price,Countity,Total_Price FROM Books") or die("error");
echo"<div id='sd'>";
echo"<table >";
while($row=mysql_fetch_assoc($ViewData)){

	
  echo"<tr><th>".$row['Book_Title']."</th></tr>
    <tr><td>".$row['Author']." $</td></tr>
    <tr><td id='price'>".$row['Price']."$</td></tr>
    <tr><td> <form method='post' action='BuyingCart.php'>
	<input id='in' type='text' name='Bcount' value='".$row['Countity']."'/>  :الكمية</td>
	</tr>
	<tr><td>".$row['Total_Price']."$</td></tr>
    <tr>
    <td><input class='sub' type='submit' name='Edit' value='Edit'/>
    <input id='d' class='sub' type='submit' name='Delete' value='Delete'/>
	<input id='order' class='sub' type='button'  value='Order' /><br><br></td>
    </tr><br></form>
    ";

}

echo"</table>"; 
echo"</div>";
$tt=0.0;
$ViewData=mysql_query("SELECT Total_Price FROM Books") or die("error");
while($row=mysql_fetch_assoc($ViewData)){
	$t=$row['Total_Price'];
	$tt=$tt+$t;
	
}
echo"<br><p id='total'>Total Price of all Books:$tt $</p>";

echo"<br><br><br>";

mysql_close($ConectDB);
?>


    <br><br><br><br><br>
	<footer>
	 &copy2022<br>
	All rights reserved
	</footer>
	<script>
	document.getElementById("order").addEventListener("click",()=>{
	alert(" تم تاكيد الطلب الدفع يتم عند الاستلام الرجاء ارسال رسالة عبر الايميل");
	});
</script>
  </body>
  </html>

