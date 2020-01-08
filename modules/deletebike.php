<?php
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");


if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
  else {
	  echo "conneceted!!!!";
  }
	$b_id=$_POST["id"];
	$sql ="delete from bike where b_id='$b_id'";
	if($conn->query($sql)===TRUE)
	{
		echo "<script>alert('Bike removed!!!!');  window.location.href='dealer_page1.php';</script>";
	}
	else
	{
		echo "Error in deletion". $sql.$conn->error;
	}
	
$conn->close();
?>
