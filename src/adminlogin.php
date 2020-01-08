<?php
        session_start();

$conn =new mysqli("127.0.0.1","root","","bikeshowroom");

$usname=$_POST["username"];
$uspass=$_POST["psw"];
if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
	
	$sql ="SELECT a_username,a_password,a_id FROM admin WHERE a_username='$usname' and a_password='$uspass' ";
    $result =$conn->query($sql);
	if($result->num_rows==1)
	{
        while($row=$result->fetch_assoc()){
	echo"<script>alert('WELCOME ADMIN'); window.location.href='../modules/admin_page1.html';</script>";
        $aid=$row["a_id"];
        $_SESSION["aid"] = $aid;
        
	}}
	else
	{
		echo "<script>alert('wrong details');  window.location.href='adminlogin.html'; </script>";
	}
	
$conn->close();
?>
