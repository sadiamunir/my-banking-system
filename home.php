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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="customer.php">Customer</a></li>
        <li><a href="history.php">Transaction History</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center  ">    
  <div class="row content">
    <div class="col-sm-2 sidenav ">
      <img src="logo.png" class="navbar-brand logo"  >
      <h2 class="h2_text"> Banking</h2>

     <a href="customer.php"><button type="button" class="btn btn-primary">View Cutomers</button></a>
      
    </div>


    <div class="col-sm-10 "> 
    	<div class="animation-area">

    		<div class= "col-sm-6 thrive"> 
    			<div class="oval"> 
    			<h2 > Don't Just Bank, Thrive ! </h2>

    			<p class="line anim-typewriter">A step in the right direction! </p>
    		</div>

    		</div>
  
    		<div class= "col-sm-3 form">
    			<form action="">
    				<h3>  Register Here </h3>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Email</label>
    <input type="text" id="ename" name="lastname" placeholder="Enter EMail">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>

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
