<html>
<head>
<title>REGISTRATION FORM</title>
<center><body background="a.jpg">
<table border="2" align="center">
<form method="GET" action="">
<!-- we will create registration.php after registration.html -->
<center><h3>REGISTRATION</h3></center>
<tr>
<th>NAME:</th>
<td><input type="text" name="name" value=""required></br></td>
</tr>

<tr>
<th>FATHER NAME:</th>
<td><input type="text" name="fathername" value=""required></br></td>
</tr>
<tr>
<th>DOB:</th>
<td><input type="text" name="dob" value=""required></br></td>
</tr>
<!-- <tr>
<th>PICKUP</th>
<td><input type="text" name="pickup" value=""required></br></td>
</tr> -->
<tr>
<th>ROUTE</th>
<td><select name="cars" id="cars">
  <option value="HIT-HOWRAH">HIT-HOWRAH</option>
  <option value="HIT-TOLLYGUNGE">HIT-TOLLYGUNGE</option>
  <!-- <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option> -->
</select></td>
</tr>
<tr>
<th>PASSWORD</th>
<td><input type="text" name="password" value=""required></br></td>
</tr>
<tr>
<th>RE-PASSWORD</th>
<td><input type="text" name="rpassword" value=""required></br></td>
</tr>

<tr>
<th>CHOOSE</th>
<td><select name="choose">
<option>FACULTY</option>
<option>STUDENT</option>
</select></td>
</tr>

<tr>
<th><input type="submit" name="submit" value="submit" onclick="fun()"></th>
<td><a href="login.php">click here for login</a></td>
</tr>
</form>

</table>
</body>
</center>
</head>
</html>
<?php
include("connection.php");
error_reporting(0);
?>

<?php
//print_r($_GET);
print("<br>");
print(gettype($_GET['route']));
if($_GET['submit'])
{
  echo "IF SATISFIED";
  //print_r($_GET);
	$fn = $_GET['name'];
	$fnm =  $_GET['fathername'];
	$db =  $_GET['dob'];
	$pkup = $_GET['cars'];
	$dop =  $_GET['cars'];
	$pass = $_GET['password'];
	$rpass = $_GET['rpassword'];
	$ch =  $_GET['choose'];
    $r1="HIT-HOWRAH";
    $r2="HIT-TOLLYGUNGE";
    if ($dop == $r1)
    $amount = 900;
    if ($dop == $r2)
    $amount = 700;
    print($amount);
	$query=mysqli_query($conn,"insert into student(name,fathername,dob,pickup,drop1,password,rpassword,choose,amount) values('$fn','$fnm','$db','$pkup','$dop','$pass','$rpass','$ch','$amount')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	
}
}
?>



<script>
    function fun(){
    alert("hi");
    var a=document.getelementbyId("cars").text;
    alert(a);}
</script>