<?php
$name=$_POST['UserName'];
$pwd=$_POST['password'];
$con = mysql_connect("localhost","root","parva");
if($con){
echo "conn success<br>";
}
$sql = "create database form2";
mysql_query($sql,$con);
echo "database created<br>";

mysql_select_db("form2", $con);
echo"database selected<br>";

$sql1 = "create table user(uname varchar(20), password varchar(20))";
mysql_query($sql1,$con);
echo"table created<br>";

$sql3 = "insert into user values('$name','$pwd')";
mysql_query($sql3,$con);
echo"data inserted<br>";

$sql2 = "select * from user";
$result=mysql_query($sql2,$con);
echo"<table border='2' style='border-color:red;'>";
while($row = mysql_fetch_array($result))
{
	echo"<tr>";
	echo "<td>$row[0]</td><td>$row[1]</td>";
	echo"</tr>";
}
echo"</table>";
?>

Php Login file
<?php
$a1=$_POST['username'];
$b1=$_POST['password'];

$con = mysql_connect("localhost","root","parva");
if($con)
{
echo "conn success<br>";
}
mysql_select_db("form2", $con);
echo"database selected<br>";

$sql2 = "select * from user";
$result=mysql_query($sql2,$con);
$flag=0;
while($row = mysql_fetch_array($result))
{
	if($row[0]==$a1 && $row[1]==$b1)
	{
		$flag=1;
	}
	else
	{
	$flag=0;
	}
}
if($flag==1)
echo"valid user";
else
echo"invalid user";
?>
