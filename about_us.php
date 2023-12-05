<html>
<head>
</head>
<h1 style="font-family:garamond; color:olive;"><center> <b>Welcome To HITK Transport Department</b></center></h1>
<style type="text/css">
h1{
    color:blue;
	background:lightblue;
	font-size:50;
   }
   div
   {
    background-image:url('mybg.jpg');
   }
   body{
        background-image:url('mybg.jpg');
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
   background-color: blue;
   text-align: center;
   font-size= 60px;
   }
    #banner{
               width:50%;
            
                height:auto;
                margin:opx auto;
                float:clear;
                 background: #C27212;
                float:left;
             
                
            } 
             #bannerimg{
               
               width:100%;
                height:auto;
               border: 3px solid black;
         
                
            }
 #news{
                background:lightblue;
               
                width:49%;
               
                  height:auto;
               
                 border: 1px solid black;
                overflow: hidden;
                float:right;
           
               
            }
            			
</style>
<div class="navbar">
  <a href="index.html">HOME</a>
  <!-- <a href="about_us.php">ABOUT</a> -->
	  <!-- <a href="contact_us.php">CONTACT</a> -->
  <div class="dropdown">
    <button class="dropbtn">LOGIN 
      <i class="fa fa-caret-down"></i>  
    </button>
    <div class="dropdown-content">
      <a href="login1.php">ADMIN</a>
      <a href="login.php">USER</a>
    </div>
	</div>
  <a href="contact_us.php">CONTACT</a>
	</div>
<body background="a.jpg">
<div id="banner" class="slide" style="width:850px; height: 509px;">

  <img class="mySlides" src="s1.jpg" style="width:850px; height: 509px;;">
  <img class="mySlides" src="s2.jpg" style="width:850px; height: 509px;;">

    </div> 
	 <div id="news" style="height : 509px;">
    <hr>  <h2  id="h1" style="color: black"> <center>About Us</center></h2> <hr>
      <marquee direction="up" align="right"><h2 style="text-align:center ">The objective of this application is to automate the details of transportation 
		 (pick and drop) services provided by an organization to its employees and to manage the 
		 related information in a convenient manner.The purpose is to design a system that allows
		 one to manage the relevant information. This system allows the user view all information 
		 of services provided by the organization. The User can make a request to Administrator for
		 cab. This  system allows the user could make updation  to cab request. This system allows 
		 the administrator to maintain and update all information of cab details. The cabs are assigned
		 by administrator to user cab request. This system allows user to make complaint for service and
		 the administrator take action on complaint. The informations of cab request details of day user 
		 and regular user are maintained by administrator and the administrator can view all or selected
		 informations.The purpose to design the system that allows search and retrive related data easily..</h2></marquee><hr><hr>
    </div>

    <script>   
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    
<div class="footer">
<p> @COPYRIGHT 2023 <a class="github" target="_blank" href="http://github.com/shonamishra/STUDENT-TRANSPORT-MANAGEMENT-SYSTEM">SONALI</a></p>
</div>
</html>
	
