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
$Criminalname=$_POST['Criminalname'];
$Age=$_POST['Age'];
$Place=$_POST['Place'];
$Crime=$_POST['Crime'];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  

$sql="INSERT INTO person1(Criminalname,Age,Place,Crime,name) VALUES('$Criminalname','$Age','$Place','$Crime','$file')";
  
                
                  
                if(!mysqli_query($con,$sql))
{
	echo "not inserted";

}
else
{
	echo "inserted";

}
header("refresh:5;url=database.php");
?>