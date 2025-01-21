<!DOCTYPE html>
<html lang="en">
<head>
  <title>Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="stylesheet.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sarpanch&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="li-img" ><img src="logo.png" ></li>
       <li ><a href="home.php">Home</a></li>
        <li><a href="customer.php">Customer</a></li>
        <li class="active"><a href="history.php">Transaction History</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      
    </div>
  </div>
</nav>
   <div class="animation-area1">
<div class="col-sm-12 ">
  <div class="col-sm-6 history-container">


<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "banking_sys";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT transferID,sender,reciever,amount,currentDate   FROM transaction";

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) >= 0) {
  // output data of each row
  echo "<table ><tr><th>Transaction ID</th> <th>Sender </th> <th>Reciever </th> <th>Amount (Rs.) </th> <th>Date </th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr><td> " . $row["transferID"]. "</td> <td>" . $row["sender"]. "</td> <td>" . $row["reciever"]."</td> <td>" . $row["amount"]. "</td> <td>"  . $row["currentDate"]. "</td></tr> ";
  }

   echo "</table>";

} else {
  echo "0 results";
}


mysqli_close($conn);
?>
    	
		<ul class="box-area">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
    </div>
</div>

<footer class="container-fluid ">
 
 <div class="img">
<ul >
      <li><img src="fb.png"></li>
      <li><img src="insta.png"></li>
      <li><img src="t.png"></li>
      
    </ul>
<h4>HOME &nbsp;&nbsp;&nbsp; MENU &nbsp;&nbsp;&nbsp; STORY &nbsp;&nbsp;&nbsp;   LOCATION &nbsp;&nbsp;&nbsp; ABOUT </h4>
<h5> Contact  |  About  |  Blog | Banking Advice </h5>

  </div>
</footer>
</body>
</html>
