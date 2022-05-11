<!DOCTYPE html>
<html>

    <head>
    <title>Wrould of Readers</title>
  
	<link href="animation.gif" type="image/gif" rel="shortcut icon" />
    <style>
       *{ margin:0px;padding:0px;}
body{
	Background-color:#EADCB9;
 
}

#header{
	 width:100%;
	 height:60px;
	 background:#D5B48A;
	 box-shadow: 0px 2px 4px gray;
 }
 #navbar{
	 width:1200px;
	 height:50px;
	 float:right;	 
 }
 #navbar>li{
	 width:200px;
	 list-style:none;
	 float:left;	 
 }
 li>a{
	 display:block;
	 color:black;
	 line-height:60px;
	 text-align:center;
	 font-family:cursive;
	 font-size:15px;
	 text-decoration:none;
	 
 }
  li>a:hover{
	  background:#EADCB9;
	  color:blue;
  }

nav .logo, nav ul{
    display: inline-block;
    
}
nav ul{
    float: left;
     list-style: none;
}
nav ul li{
    float: right;
    margin-top:10px;
    padding: 15px;
}
nav ul li a {
  
    text-decoration: none;
}

h1{
    padding-left: 10px;
}
.box{
    width: 310px;
	height:300px;
    float: right;
    margin: 10px;
 
    font-weight: bold;
    
}
.box p{
    margin: 10px;
}
.box img{
    max-width: 80%;
    max-height: 100%;
}
.box a {
    text-decoration: none;
    background: #000;
    color: #fff;
    padding: 8px;
    display: block;
}
.box a:hover{
    background:#556;
    
}





.boox{
    border: 2px solid #eee;
    padding: 15px;
    margin: 15px;
    height: 300px;
    box-shadow: 1px 1px 6px #000;
    
}

.details , .img{
    display: inline-block;
}
.details{
    width: 100%;
    float: left;
    text-align: center;
}

.details h2{
    padding: 10px; 
    text-align: center; 
}
.details h5{
    padding: 5px; 
    text-align: center; 
}
.author{
    color: blue;
    font-weight: 700;
}
.details p{
    margin: 7px;
    text-align: center;
}
.price{
    color: red;
    font-weight: bold;
}
.download{
    background:#707;
    color: #fff;
    padding: 10px;
    display: block;
    text-align: center;
    border-radius: 7px;
    margin-top: 50px;
}
.download:hover{
    background: #ad0dad;
    
}
.shopping{
    background:#707;
    color: #fff;
    padding: 10px;
    display: block;
    text-align: center;
    border-radius: 7px;
    margin-top: 10px;
    width: 100%;
}
.shopping:hover{
    background: #ad0dad;
    
}
.countity{
    text-align: center;
    width: 30px;
}
#pmsg{
    text-align: center;
    font-size:30px; 
    font-style:bold; 
}
/* css contact form */









        </style> 
    </head>
    <body>
	    <div id="header">
        <div id="logo">
        <img src="book.png" width ="60px">
        </div>
          
        <ul id="navbar">
        <li><a href="BuyingCart.php">Buying Cart</a></li>
           <li><a href="home.html">Home</a></li>
		   <li><a href="#">Contact page</a></li>
		   <li><a href="#Most popular books">Most popular books</a></li>
	       <li><a href="#">Contact page</a></li>
	       <li><a href="#">Log Out</a></li>    
        </ul>
        </div>
        
     
            
        <div class="details">
            <h2>Programming in Python </h2>
            <h5>Lisa Taglievere</h5>  
            <p class="price">50ريال</p>
            <form method="post" action="Python.php">
            <input class="countity" type="text" name="pcon" value="1" /> :الكمية<br><br>
            <input class="shopping" type="submit" name="add" value="أضف الى العربة"/>
            <a class="download" href="file:///C:/Users/dell/Downloads/code-in-python-3-ar-v1.0.0.pdf">تحميل الكتاب </a>

            </form>
          
            </div>
        </div>
        <?php
include "ConnectToDB.php";
$p1="Programming in Python";
$p2="Lisa Taglievere";
$p3=50.0;
$p4=$_POST['pcon'];
$p5=$p4*$p3;
if(isset($_POST['add'])){
$Insert=mysql_query("INSERT INTO Books(Book_Title,Author,Price,Countity,Total_Price)
VALUES('$p1','$p2','$p3','$p4','$p5')") or die("<p id='pmsg'>  تمت الاضافة بالفعل انتقل الى سلة المشتريات</p>");
if(isset($Insert)){
    echo"<p id='pmsg'>تمت الاضافة</p>";
}
}
mysql_close($ConectDB);
?> 
		
    <br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<footer>
	 &copy2022<br>
	All rights reserved
	</footer>
		
    </body>
    </html>