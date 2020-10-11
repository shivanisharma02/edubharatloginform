<?php
$firstName = $_POST['firstName'];
$lasttName = $_POST['lastName'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$emailadd = $_POST['emailadd'];
$pass = $_POST['pass'];
//DATABASE CONNECTION 
$conn =new mysqli('localhost','root','YES','test');
if($conn->connect_error)
{ echo " $conn->connect_error";
	die('Connection Failed :'.$conn->connect_error);
}else{
	$stmt =$conn->prepare("insert into registration(firstName,lastName,age,gender,class,emailadd,pass) values(?,?,?,?,?,?,?)");
	$stmt->bind_param("ssisiss",$firstName,$lastName,$age,$gender,$class,$emailadd,$pass);
	$execval=$stmt->execute();
	echo $execval;
	echo"Registration Successful";
	$stmt->close();
	$conn->close();
}
?>