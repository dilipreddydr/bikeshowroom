<?php
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");


if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);

  }
     $count="";
	$c_name=$_POST["name"];
	$c_gender=$_POST["gender"];
	$c_contactno=$_POST["contact"];
	$c_username=$_POST["username"];
    $c_password=$_POST["psw"];

$sql ="SELECT * FROM customer WHERE c_username='$c_username' ";
    $result =$conn->query($sql);
	if($result->num_rows==1)
	{
	echo"<script>alert('user already present please choose another username'); window.location.href='customerregister.html';</script>";
        $count++;
        
	}
if($count==0){

	$sql ="insert into customer(c_name,c_gender,c_contactno,c_username,c_password) values('$c_name','$c_gender','$c_contactno','$c_username','$c_password')";
	if($conn->query($sql)===TRUE)
	{
		echo "<script>alert('Registration Successfull'); window.location.href='customerlogin.html';</script>";

	}
	else
	{
		echo "Error in insertion". $sql.$conn->error;
	}
}
$conn->close();
?>
