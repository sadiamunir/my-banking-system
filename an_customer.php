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
        <li ><a href="home.php">Home</a></li>
        <li class="active"><a href="customer.php">Customer</a></li>
        <li><a href="transaction.php">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center  ">    
  <div class="row content">
    <div class="col-sm-2 sidenav ">
      <img src="logo.png" class="navbar-brand logo"  >
      <h2 class="h2_text"> Banking</h2>

     <a href="customer.html"><button type="button" class="btn btn-primary">View Cutomers</button></a>
      
    </div>


    <div class="col-sm-10 "> 
    	<div class="animation-area">

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


$sql = "SELECT personID,first_name,last_name,contact,email ,amount  FROM customers";

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) >= 0) {
  // output data of each row
  echo "<table ><tr><th>Person ID</th> <th>First Name </th> <th>Last Name </th> <th>Contact </th> <th>Email </th> <th>Amount (Rs.) </th> <th> Update </th> </tr>";
  while($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr><td> " . $row["personID"]. "</td> <td>" . $row["first_name"]. "</td> <td>" . $row["last_name"]."</td> <td>" . $row["contact"]. "</td> <td>"  . $row["email"]. "</td> <td>" . $row["amount"]. "</td> <td><a href=\"transaction.php?personID=$row[personID]\">Edit</a></td>></tr> ";
  }

   echo "</table>";

} else {
  echo "0 results";
}


mysqli_close($conn);
?>

    		</div>
    		


    		

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
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
