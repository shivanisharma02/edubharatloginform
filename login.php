<?php
$a=$_REQUEST["emailadd"];
$b=$_REQUEST["pass"];

$connection=mysql_connect("localhost","root","") or die ("could'nt select server");
$db=mysql_select_db("db1",$connection) or die ("could'nt select database");
$query="select emailadd,pass from registration where(emailadd='$a')";
$result=mysql_query($query) or die("Query failed");
$row=mysql_fetch_array($result);

if(($row['emailadd']==$a) AND ($row['pass']==$b))
echo "welcome ",$a;
else
echo "try again";                                                                                        
mysql_close($connection);
?>
