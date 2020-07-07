<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "server not connected";

}
if(!mysqli_select_db($con,'criminal investigation command'))
{
	echo "not database";

}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$subject=$_POST['subject'];
$sql="INSERT INTO illegal_weapon(firstname,lastname,Email,Mobile,subject) VALUES('$firstname','$lastname','$Email','$Mobile','$subject')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";

}
else
{
	echo "inserted";
}
header("refresh:5;url=ILLEGAL WEAPON.php");
?>