<?php
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");

$usname=$_POST["uname"];
$uspass=$_POST["psw"];
if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
	
	$sql ="SELECT c_username,c_password,c_id FROM customer WHERE c_username='$usname' and c_password='$uspass' ";
    $result =$conn->query($sql);
	if($result->num_rows==1)
	{
        while($row=$result->fetch_assoc()){
	echo"<script>alert('WELCOME CUSTOMER'); window.location.href='customer_page1.php';</script>";
        $cid=$row["c_id"];
        session_start();
        $_SESSION["cid"] = $cid;
        
	}}
	else
	{
		echo "<script>alert('wrong details');  window.location.href='customerlogin.html';</script>";
	}
	
$conn->close();
?>
