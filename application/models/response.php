<?php 

print_r($_REQUEST);


$servername = "localhost";
$username = "marriage_shadi";
$password = "Shadi@123";
$dbname = "marriage_shadi";


$conn = mysqli_connect($servername, $username, $password, $dbname);


$email=$_POST['email'];
$password=$_POST['password'];
$query=mysqli_query($conn, "select * from user WHERE email='$email' && password='$password'");
if($result=mysqli_fetch_array($query)){
	print_r($query);
}
else{
	echo "false";
}
?>