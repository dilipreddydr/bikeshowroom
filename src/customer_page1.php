<?php
session_start();

if($_SESSION["cid"]==""){
    echo"you must login first";
}
else{
    
echo('<html>
<head>
    <title>customer</title>
    <link type="text/css" rel="stylesheet" href="../css/mini.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
<body>
    
    <center><h1 style="font-family:papyrus">ODDS  SHOWROOM <b><i class="fa fa-motorcycle"></i></b></h1>
        <h2 style="color: #ff0505">WELCOME CUSTOMER</h2></center><br><br><br><br><br>
    <div>
        <center>
            <a href=showbike.php><button type="button" class="cancelbtn" style="border-radius: 20%" >view bikes</button></a>
            <button onclick="back()" type="button" class="cancelbtn" style="border-radius: 20%" name="logout">logout</button><script>function back(){window.location.replace("../index.html");}</script><br>

            <a href=mybookings.php><button type="button" class="cancelbtn" style="border-radius: 20%">my bookings</button></a>
        </center></div>
    
    </body>


</html>');
}
?>