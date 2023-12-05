<?php
session_start();
include("connection.php");
?>


<html>
<head>
<title>
LOGIN PAGE
</title>
</head>
<style type="text/css">
 body
 {
        background-image:url('bg1.jpg');
        /* background-image:url('images/texture.jpg'); */
        background-repeat:no-repeat;
        background-size:cover;
 }
   button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
   }
.cancel{
        background-color:red;
        width:10%;
        }

</style>
<body background="a.jpg">
<form action="" method="post">

<marquee>WELCOME TO LOGIN PAGE</marquee><center>
<br/>
<br/>
<br/><br/>
<div style="background-color:yellow; width: 497px; height: 525px;">
        <img src="admin.jpg" alt="image not found" height="150" width="150"> 
        <p>USERNAME</p><br/>
        <input type="text" type="text" name="username" value=""><br/><br/>
        <p>PASSWORD</p>
        <input type="text" name="password" value=""><br/><br/>
        <input type="submit" name="submit" value="Login"><br/>
        <input type="checkbox">Remember me 
        <br/><br/>
        <!-- <button class="cancel">cancel</button>
        <button type="button">cancel</button> -->
        <input type ="submit" class ="cancel" value="CANCEL" style="width: 75px; color:white">
        <!-- &nbsp&nbsp&nbspforgot<a href="a.html">   password?</a> -->
        </center>
 </div>

</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$user= $_POST['username'];
	$pwd= $_POST['password'];
	$query="SELECT * FROM admin WHERE username='$user' && password='$pwd'";
	
	$data = mysqli_query($conn , $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$user;
		header('location:dashboard.php');
	}
	else
	{
		echo "<script type='text/javascript'>alert('incorrect password')</script>";
	}
}
?>
