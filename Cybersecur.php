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
		   <li><a href="contact.html">Contact page</a></li>
		   <li><a href="#Most popular books">Most popular books</a></li>
	       <li><a href="#">Contact page</a></li>
	       <li><a href="#">Log Out</a></li>    
        </ul>
        </div>
        
      
            
        <div class="details">
            <h2>Cybersecur Syrvival Guide</h2>
            <h5>Brian Adams</h5>  
            <p class="price">50ريال</p>
            <form method="post" action="Cybersecur.php">
            <input class="countity" type="text" name="Bcon" value="1" /> :الكمية<br><br>
            <input class="shopping" type="submit" name="add" value="أضف الى العربة"/><br>
          
            <a class="download" href="file:///C:/Users/dell/Downloads/Cybersecurity%20Survival%20Guide%203rd%20Ed%20FINAL%20PUBLISH.pdf">تحميل الكتاب </a>

            </div>
        </div>
      </form>	
        <?php
include "ConnectToDB.php";
$b1="Cybersecur Syrvival Guide";
$b2="Brian Adams";
$b3=50.0;
$b4=$_POST['Bcon'];
$b5=$b4*$b3;
if(isset($_POST['add'])){
$InsertData=mysql_query("INSERT INTO Books(Book_Title,Author,Price,Countity,Total_Price)
VALUES('$b1','$b2','$b3','$b4','$b5')") or die("<p id='pmsg'>  تمت الاضافة بالفعل انتقل الى سلة المشتريات</p>");
if(isset($InsertData)){
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