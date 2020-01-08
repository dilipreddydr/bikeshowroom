<?php
$conn =new mysqli("127.0.0.1","root","","bikeshowroom");

if ($conn->connect_error)
  {
  die("connection failed:".$conn->connect_error);
  }
	
	$sql ="SELECT * FROM bike_logs";
    $result =$conn->query($sql);
	if($result->num_rows>0)
	{
                    echo"<center><u>BIKE LOGS</u> <br><br><br></center>";

		while($row=$result->fetch_assoc())
        {
            echo" <b>Type: </b>" .$row["ins_or_del"]." ";
             echo" <b>Time: </b>" .$row["time"]."  ";
            echo"<b> Bike Name: </b>" .$row["b_name"]." ";
             echo"<b> Bike ID: </b>" .$row["b_id"]." ";
             echo"<b> Dealer ID: </b>" .$row["d_id"]."<br><br>";
            
        }
echo"<center><button onclick='back()' name='back'>back</button><script>function back(){window.history.back();}</script><br><br> </center>"; 
	}
	else
	{
		echo "no logs are present";
	}
	
$conn->close();
?>
