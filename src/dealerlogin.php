<?php
session_start();
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");

$usname=$_POST["uname"];
$uspass=$_POST["psw"];
if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
	
	$sql ="SELECT * FROM dealer WHERE d_username='$usname' and d_password='$uspass' ";
    $result =$conn->query($sql);
	if($result->num_rows==1)
	{
        while($row=$result->fetch_assoc()){
	echo"<script>alert('WELCOME DEALER'); window.location.href='../modules/dealer_page1.php';</script>";
        $d_id=$row["d_id"];
        echo $d_id;
       
        $_SESSION["did"] = $d_id; 
	}}
	else
	{
		echo "<script>alert('wrong details');  window.location.href='dealerlogin.html';</script>";
	}
	
$conn->close();
?>
