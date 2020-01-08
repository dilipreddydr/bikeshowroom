<?php
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");

if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
	
	$sql ="SELECT p.*,b.b_name,b.b_description,c.c_contactno FROM payment p, bike b,customer c WHERE p.b_id=b.b_id and p.c_id=c.c_id ";
    $result =$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
        {
        echo '<center>
        </center><br>';
            echo"<u>PAYMENT DETAILS</u> <br>";
            echo" Payment ID:" .$row["p_id"]. "<br>";
             echo" Price:" .$row["p_price"]."<br>";
            echo" Name:" .$row["p_name"]. "<br>";
             echo" Address:" .$row["p_address"]."<br>";
             echo" City:" .$row["p_city"]."<br>";
             echo" State:" .$row["p_state"]."<br>";
             echo" Zip:" .$row["p_zip"]."<br>";
             echo" Contact no:" .$row["c_contactno"]."<br>";
            echo" Email:" .$row["p_email"]."<br>";
            echo"<u>BIKE DETAILS</u> <br>";
          echo"Bike name:" .$row["b_name"]."<br>";
        echo" Desctiption:" .$row["b_description"]."<br><br><br>";


            

        
            
        }
                echo"<center><button onclick='back()' name='back'>back</button><script>function back(){window.history.back();}</script><br><br> </center>";        

	}
	else
	{
		echo "no bookings are present";
	}
	
$conn->close();
?>
