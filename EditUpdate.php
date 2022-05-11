<?php
include "ConnectToDB.php";

$ViewData=mysql_query("SELECT Book_Title,Price,Author,Countity FROM Books") or die("error");
echo"<table>";
while($row=mysql_fetch_assoc($ViewData)){
  echo"  <tr><td>".$row['Book_Title']."</td></tr>
    <tr><td>".$row['Price']." $</td></tr>
    <tr><td>".$row['Author']."</td></tr>
    <tr><td><input type="text" name="Bcount" value='".$row['Countity']."'/></td></tr>
    <tr>
    <td><input type="submit" name="Bcount" value="Edit"/></td>
    <td><input type="submit" name="Bcount" value="Delete"/></td>
    </tr>
    ";
}
echo"</table>";

$getCountity=$_Get['Bcount'];

if(isset($_POST['Edit'])){
    $EditeQuery=mysql_query("UPDATE Books SET Countity='$getCountity' WHERE Countity='".$row['Countity']."' ") or die("error");
    if(isset($EditeQuery)){
        echo"update do";  
    }
}

if(isset($_POST['Delete'])){
    $DeleteQuery=mysql_query("DELETE Books WHERE Countity='".$row['Countity']."' ") or die("error");
    if(isset($DeleteQuery)){
        echo"Delete do";  
    }
}
?>