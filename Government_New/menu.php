<?php
if(isset($_SESSION['login']))
{
	
}
else
{
		header("Location:index.php");
}
?>
<html>
<head>
<title> Government | Home </title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 100%;
  background-color: #4c4c4c; 
}
li a {
  display: block;
  padding: 8px 16px;
  text-decoration: none;
  color:#ffffff;
  font-size:16px;
  transition: 0.2s;
}
li a:hover{
	text-decoration: none;
	color:#ffffff;    
}
li {
   transition: 0.3s;
   text-align: center;
}
li:hover {
  text-decoration: none;
  background-color: #ff3a3a; 
  padding-left: 1.5vw;
}
    .subli{
        transition: 0.2s;
        background-color: #727272;
    }
    .subli:hover{
        padding-left: 1vw;
    }
    li a:active{
        font-size: 22px;
    }
</style>
</head>
<body>
<?php

    include 'config.php';
    include 'db.php';
?>
	<ul><li>		   
	<a href="dashboard.php"> DashBoard </a>
	<li><a data-toggle="collapse" data-target="#User">User <i class="fa fa-caret-down"></i></a></li>
		<div id="User" class="collapse">
		<ul>
	<li><a href="taluka.php"> Taluka</a></li>
	<li><a href="create_user.php"> User</a></li>
	 </ul>
		</div>
		<li><a data-toggle="collapse" data-target="#Question">Question <i class="fa fa-caret-down"></i></a></li>
		<div id="Question" class="collapse">
		<ul>
    <li><a href="QuestionCategory.php"> Question Category</a></li>
    <li><a href="questions.php"> Questions </a></li>
		 </ul>
		</div>
		
    <li><a data-toggle="collapse" data-target="#demo">Master <i class="fa fa-caret-down"></i></a></li>
		<div id="demo" class="collapse">
		
		<ul>
        <li><a href="PHC_Create.php"> PHC </a></li>
		 <li><a href="Sub_Center.php"> Sub Center</a></li>
			 <li><a href="Village.php"> Village </a></li> 
       </ul>
		</div>
		
		 <li><a href="report.php">Reports</a></li>
		 <li><a href="GraphReports.php">Graph Reports</a></li>
		  <li><a href="Excel_Reports.php">Excel Reports</a></li>
    
	<li><a href="deletecookie.php">Logout</a></li>
	</ul>

</body>
</html>

