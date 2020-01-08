<?php
session_start();
$cid=$_SESSION["cid"];

$conn =new mysqli("127.0.0.1","root","","bikeshowroom");

if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
	
	$sql ="CALL `mybookings`($cid) ";
    $result =$conn->query($sql);
	if($result->num_rows>0)
	{
         echo"<center><u>MY BOOKINGS</u></center>";
		while($row=$result->fetch_assoc())
        {
            echo" payment id:" .$row["p_id"]. "<br>";
            echo" Name:" .$row["p_name"]. "<br>";
             echo" Price:" .$row["p_price"]."<br>";
             echo" Address:" .$row["p_address"]."<br>";
            echo" bike name:" .$row["b_name"]."<br>";
            echo" bike description:" .$row["b_description"]."<br><br><br>";

        
            
        }
        echo"<center><a href='customer_page1.php'><button class='cancelbtn' type='submit' name='back'>Back</button></a><br><br> </center>";        

	}
	else
	{
		echo "no bookings are present";
	}
	
$conn->close();
?>
