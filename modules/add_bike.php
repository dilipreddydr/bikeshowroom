<!DOCTYPE html>
<html>
<head>
    <title>Add bike</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../css/mini.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-image: url(../img/harley.jpg);">
    <center><h1 style="font-family:papyrus; color:white">ODDS  SHOWROOM <b><i class="fa fa-motorcycle"></i></b></h1>
        <h2 style="color: #ff0505">ADD BIKE</h2></center>
       <h3 style="color:aqua">Please enter the details</h3>
<form action="addbike.php" method="post" enctype="multipart/form-data">
  <div class="container">
  <label for="bike id"><b>Bike Id</b></label>
    <input type="number" placeholder=" Enter Bike Id" name="id" required><br>
    <label for="bike image"><b>Bike Image</b></label>
    <input type="file"  name="image" required>
    
    <label for="bike_name"><b>Bike Name</b></label>
    <input type="text" placeholder="Enter Bike Name" name="name" required><br>

    
      <label for="bike_price"><b>Bike Price</b></label>
    <input type="text" placeholder="Enter Bike Price" name="price" required>
      
      <label for="bike_description"><b>Bike Description</b></label><br>
      <textarea type="textarea" placeholder="Enter Bike Description" name="description" required></textarea>
      
    <button type="submit" class="registerbtn" name="addbike">ADD BIKE</button>
  </div>
  <div class="container">
      <a href="dealer_page1.php"><button type="button" class="cancelbtn">Cancel</button></a>
    
  </div>
</form>
</body>
</html>