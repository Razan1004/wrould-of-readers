<?php
include "ConnectToDB.php";
$b1=2;
$b2="Digital Design";
$b3=50.0;
$b4="أحمد رمضان الزهراني";
$b5=1;
$InsertData=mysql_query("INSERT INTO Books(Book_ID,Book_Title,Price,Author,Countity)
VALUES('$b1','$b2','$b3','$b4','$b5')") or die("error");
if(isset($InsertData)){
    echo"ok";
}
mysql_close($ConectDB);
?>