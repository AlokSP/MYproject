<?php
session_start();
header('location:index.html');
$con= mysqli_connect('localhost','root');
if ($con) {
	echo "connection Successful";
}else{
	echo "connetion is not established";
}
mysqli_select_db($con,  'mydatabase');

$name= $_POST['username'];
$pass=$_POST['password'];

$q=" select * from registerationtable where  name='$name' && password='$pass' ";
$result= mysqli_query($con, $q);
$num=mysqli_num_rows($result);


if($num==1){
	echo "Duplicate Data";
}else{
	$qy="insert into registerationtable(name,password) values ('$name','$pass')";
	mysqli_query($con, $qy);
}



?>