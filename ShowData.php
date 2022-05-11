<?php
include "ConnectToDB.php";

$ViewData=mysql_query("SELECT Book_Title,Price,Author,Countity FROM Books") or die("error");
echo"<table>";
while($row=mysql_fetch_assoc($ViewData)){
  echo"  <tr><td>".$row['Book_Title']."</td></tr>
    <tr><td>".$row['Price']." $</td></tr>
    <tr><td>".$row['Author']."</td></tr>
    <tr><td>".$row['Countity']."</td></tr>";
}
echo"</table>";



?>