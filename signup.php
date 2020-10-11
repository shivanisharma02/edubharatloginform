<?php 

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$class=$_POST['class'];
$emailadd=$_POST['emailadd'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
if(empty($firstName)||empty($lastName)||empty($age)||empty($gender)||empty($class)||empty($emailadd)||empty($pass)||empty($cpass)){
	die('Please fill all required fields!');
}
if($pass!==$cpass){
	die('Password and Confirm Password should match!');
}
$conn=new mysqli('localhost','root','','db1');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}
else{
	$stml=$conn->prepare("insert into registration(firstName, lastName, age, gender, class, emailadd, pass)
		values(?, ?, ?, ?, ?, ?, ?)");
	$stml->bind_param("ssisiss",$firstName, $lastName, $age, $gender, $class, $emailadd, $pass);
	$stml->execute();
	echo "registration succesful";
	$stml->close();
	$conn->close();
}
?>
