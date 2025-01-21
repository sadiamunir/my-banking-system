 <?php
// including the database connection file
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



if(isset($_POST['submit'])){

    $from = $_GET['personID'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];


    $query = mysqli_query($conn,"SELECT * from customers where personID=$from");
    $sql1 = mysqli_fetch_array($query);
     

  /*  while($row = mysqli_fetch_array( $result,MYSQLI_ASSOC)){
printe_r($row);
}*/
    $query = mysqli_query($conn,"SELECT * from customers where personID=$to");
   $sql2 = mysqli_fetch_array($query);


    //Conditions
    //For negative value
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }
    //Insufficient balance
    else if($amount > $sql1['amount']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }
    //For 0 (zero) value
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred !')";
         echo "</script>";
     }


    else {
                $newbalance = $sql1['amount'] - $amount;
                $sql = "UPDATE customers set amount=$newbalance where personID=$from";
                mysqli_query($conn,$sql);
             
                $newbalance = $sql2['amount'] + $amount;
                $sql = "UPDATE customers set amount=$newbalance where personID=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['first_name'];

                $reciever = $sql2['first_name'];
                $sql = "INSERT INTO transaction(transferID,personID, sender, reciever, amount, currentDate) VALUES (((SELECT max(transferID) from (SELECT * FROM transaction) as x)+1), $from ,'$sender','$reciever','$amount', (SELECT CURDATE()))";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script>
                                     window.location='history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        
    }
   mysqli_close($conn);
  
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
        <li><a href="home.php">Home</a></li>
        <li><a href="customer.php">Customer</a></li>
        <li ><a href="history.php">Transaction History</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      
    </div>
  </div>
</nav>


<div class="animation-area1">
  <div class="col-sm-12"> 

     <div class="col-sm-6 container"> 

     
<?php
// including the database connection file
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

$id = $_GET['personID'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT first_name, last_name, contact, email, amount FROM customers WHERE personID=$id");


while($res = mysqli_fetch_array($result)){
  $first_name = $res['first_name'];
  $last_name = $res['last_name'];
  $contact = $res['contact'];
  $email = $res['email'];
  $amount = $res['amount'];
  $name = $first_name .' '. $last_name;
}

mysqli_close($conn);
?>


<div class="transact-form">
<?php 


echo '
    <table >     
        <tbody>
            <tr>
                <th><b>Customer Name:</th><td> '.$name.'</td>
            </tr>
            <tr>
                <th><b>Amount Available:</th><td> Rs. '.$amount .'</td>
            </tr>
            <tr>
                <th><b>Email:</th><td> Rs. '.$email .'</td>
            </tr>
            <tr>
                <th><b>Contact no.:</th><td> Rs. '.$contact .'</td>
            </tr>

             <tr>
                <th><b>Transfer To:</th><td> ';?>
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

$sid=$_GET['personID'];
$sql = "SELECT * FROM customers where personID !=$sid";

echo '<form action="" method="POST">  
<select name="to">
';
 
$sqli = "SELECT personID, first_name FROM customers";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
   $rcvID = $row['personID'];
echo '<option value="'.$rcvID.'" >'. $row['personID'].'- '.$row['first_name'].'</option>';
}
 
echo '</select>';
 
 mysqli_close($conn);
?>




                  <?php echo'</td>
            </tr>

             <tr>
                <th><b>Trasnfer Amount: </th><td> 
                <label for="amount"></label><br>
  <input type="text" id="amount" name="amount" placeholder="Enter Amount in Rs. "><br>
    
  </td>
         </tr>

       <tr> <td> <input id="submit" type="submit" value="Submit" name="submit">    </form>  </td>
         </tr>


        </tbody>
    </table>
'; ?>
</div>


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
