<?php
session_start();
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");



if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
  
	$p_name=$_POST["name"];
	$p_email=$_POST["email"];
	$p_address=$_POST["address"];
	$p_city=$_POST["city"];
    $p_state=$_POST["state"];
    $p_zip=$_POST["zip"];
    $b_id=$_POST["bid"];
	$p_nameoncard=$_POST["cardname"];
	$p_cardno=$_POST["cardnumber"];
	$p_expmonth=$_POST["expmonth"];
	$p_expyear=$_POST["expyear"];
	$p_cvv=$_POST["cvv"];
    $p_price=$_POST["price"];
    $customerid=$_SESSION["cid"];
	$sql = "insert into payment (p_name,p_email,p_address,p_city,p_state,p_zip,p_nameoncard,p_cardno,p_expmonth,p_expyear,p_cvv,p_price,c_id,b_id) values ('$p_name','$p_email','$p_address','$p_city','$p_state','$p_zip','$p_nameoncard',$p_cardno,'$p_expmonth','$p_expyear','$p_cvv','$p_price','$customerid','$b_id')";
	if($conn->query($sql)===TRUE)
	{
		echo "<script>alert('Order placed successfully!!!!');</script>";
        echo"THANK YOU, OUR DEALER WILL CONTACT YOU SOON.....<br><br>";
echo"<center><button onclick='back()'>logout</button><script>function back(){window.location.replace('../index.html');}</script><br>
<br><br> </center>";        
        session_destroy();
  	unset($_SESSION['cid']);
	}
	else
	{
		echo "Error in insertion". $sql.$conn->error;
	}
	
	
	
$conn->close();
?>
