<?php
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");


if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
  else {
	  echo "conneceted!!!!";
  }
	$d_id=$_POST["id"];
	
	$sql ="delete from dealer where d_id='$d_id'";
	if($conn->query($sql)===TRUE)
	{
		echo "<script>alert('Dealer removed!!!!'); window.location.href='admin_page1.html';</script>";
	}
	else
	{
		echo "Error in deletion". $sql.$conn->error;
	}
	
$conn->close();
?>
