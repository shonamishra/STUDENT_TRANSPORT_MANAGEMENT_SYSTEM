<html>
<head>
</head>
<h1 style="font-family:garamond; color:olive;"><center> <b>Welcome To HITK Transport Department</b></center></h1>
<style type="text/css">
h1{
    color:black;
	background:black;
	font-size:50;
   }
   body{
        background-image:url('bg1.jpg');
        background-repeat:no-repeat;
        background-size:cover;
      }
	  .topnav {
  overflow: hidden;
  background-color: #333;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.footer {
   position: fixed;
   color: white;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   text-align: center;
   }
   .slide{
          position:fixed;
		  color:white;
		  
   }
</style>
<div class="navbar">
  <a href="index.php">HOME</a>
  <a href="about_us.php">ABOUT</a>
	  <!-- <a href="contact_us.php">CONTACT</a> -->
	  <!-- <a href="regis1.html"></a> -->
	    
  <!-- <div class="dropdown">
    <button class="dropbtn">LOGIN 
      <i class="fa fa-caret-down"></i>
    </button>
	<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
   <div class="dropdown-content">
      <a href="login1.php">ADMIN</a>
      <a href="login.php">USER</a>
    </div> 
    <a href="contact_us.php">CONTACT</a>
    <a href="logout.php">LOGOUT</a>
	</div>
	<br>
	</div>
 
	
<body>


<div class="footer" >
<p> @COPYRIGHT 2023 <a class="github" target="_blank" href="http://github.com/shonamishra/STUDENT-TRANSPORT-MANAGEMENT-SYSTEM">SONALI</a></p>
</div>
	</html>


<?php
session_start();
include("connection.php");
$userprofile = $_SESSION['user_name'];
if($userprofile==true)
{
}
else{
	header('location:login.php');
}

$query = "SELECT * FROM student WHERE name='$userprofile'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
echo "welcome"  .$result['name'];
?>
<center>
<div style="background-color:yellow; width: 630px; height: 550px;  align-content: center;">
<table border="2" align="center">
<tr>
	<th>NAME</th>
	<th>FATHER NAME</th>
	<th>DOB</th>
	<th>PICKUP</th>
	<th>DROP</th>
	<th>CATEGORY</th>
	<th>AMOUNT</th>
	
	</tr>
<?php
echo "<tr>
				<td>".$result['name']."</td></br>
				<td>".$result['fathername']."</td></br>
				<td>".$result['dob']."</td>
				<td>".$result['pickup']."</td>
				<td>".$result['drop1']."</td>
				<td>".$result['choose']."</td>
				<td>".$result['amount']."</td>
			</tr><br><br><br><br><br><br><br>";

?>
<html>
</table>
<br><br><br>
<center>
  <div style="font-size: 30px;">
  <?php
  echo "<B>PLEASE PAY RS ".$result['amount']." AT THE OFFICE</B>" ;
  ?>
</div>
</center>
<!-- <body background="texture.jpg" > -->
<!-- <table align="center" border="1">
<center><h3>PAYMENT METHOD</h3></center>
<tr>
<th>DEBIT CARD</th>
<td><input type="radio" name="debitcard"></td>
</tr>
<tr>
<th>VISA</th>
<td><input type="radio" name="visa" ></td>
</tr>
<tr>
<th>BHIM</th>
<td><input type="radio" name="bhim"></td>
</tr>
<tr>
<th>CASH</th>
<td><input type="radio" name="cash"></td>
</tr>
</table><br><br><input type="submit" name="submit" value="PAY"> -->
</body>
</div>
</center>
</html>