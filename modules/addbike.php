<?php
session_start();
 
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");



if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
	$b_id=$_POST['id'];
	$check = getimagesize($_FILES["image"]["tmp_name"]);
	if($check !==false){
		$image=$_FILES['image']['tmp_name'];
		$imageContent = addslashes(file_get_contents($image));
	}
	
	$b_name=$_POST["name"];
	$b_price=$_POST["price"];
    $b_description=$_POST["description"];
    $d_id=$_SESSION['did'];

	$sql ="insert into bike (b_id,b_image,b_name,b_price,b_description,d_id) values('$b_id','$imageContent','$b_name','$b_price','$b_description','$d_id')";
	if($conn->query($sql)===TRUE)
	{
		echo "<script>alert('Bike Added Successfully'); window.location.href='dealer_page1.php';</script>";
	}
	else
	{
		echo "Error in insertion"."   " .$sql.$conn->error;
	}
	
$conn->close();
?>
