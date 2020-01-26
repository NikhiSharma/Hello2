<?php


$servername="localhost";
$username="NikksBruh";
$password="Prasousanik";
$dbname="CSE2";

$conn= new mysqli($servername, $username, $password, $dbname);

$c="CREATE TABLE emp(eid int(6), ename VARCHAR(20),desgn VARCHAR(20)";

$q="INSERT INTO emp
VALUES (20,'s','k'),(21,'t','v'),(43,'u','l)";

$r="SELECT ename from emp";

$s="DELETE from emp where ename='a'";

$t="SELECT * from emp";

$u="UPDATE emp set ename='p',desgn='q' WHERE ename='a'";

if($conn->query($u)==TRUE){
	echo "I'm the mannnnn!!!!"."<br>";
}
else{
	echo "bhaad mein gaya maa"."<br>".$sql."<br>".$conn->error;
}

if($conn->query($q)==TRUE){
	echo "new rec created"."<br>";
}
else{
	echo "Error:".$sql."<br>".$conn->error;
}
if($conn->query($r)==TRUE){
	echo "yo man u got selection right"."<br>";
}
else{
	echo "Nope.. Not happening".$sql."<br>".$conn->error;
}
if($conn->query($s)==TRUE){
	echo "man! you won earth"."<br>";
}
else{
	echo "No maaa.... again not happening".$sql."<br>".$conn->error;
}
if($conn->query($t)==TRUE){
	echo "Man, chalo party"."<br>";
}
else{
	echo "why u alive juz why??".$sql."<br>".$conn->error;
}
$conn->close();

?>