<?php
$login="";
session_start();
require_once 'db.php';
if(isset($_SESSION['login']))
{
	header("Location:homepage.php");
}
else
{
		if(isset($_POST['login']))
		{
			$username=$_POST['uname'];
			$password=$_POST['password'];
			$sql="select username,password,userid,status from user where (username='".$username."' and password='".$password."')";
			$result=mysql_query($sql);
			$dataset=mysql_fetch_row($result);
			if(($dataset[0]==$username) && ($dataset[1]==$password))
			{
					if($dataset[3]=="Active")
					{	
						setcookie("login",$dataset[0],(time()+(86400 * 30)));
						setcookie("uname",$dataset[0],(time()+(86400 * 30)));
						setcookie("uid",$dataset[2],(time()+(86400 * 30)));
						header('Location:SelectTaluka.php');
						$_SESSION['login']=$dataset[0];
					}
					else
					{
						echo '
							<script>
								alert("Please Contact to Admin");
							</script>
						';
					}
			}
			else
			{
					$login="Login Faild";
			}

		}
}
?>
<html>
<head>
<title> Government | Login</title>

<script>
function showpassword()
{
	var d=document.getElementById("password");
	if(d.type=="password")
	{
		d.type="text";
	}
	else
	{
		d.type="password";
	}
}

</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class="container">
	<center><h2>કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</h2></center>
	<center>
	<div class=login>
	
		<form name=f1 method=post>
					<table>
						<tr>
							<td colspan=2>
								<center><img src="logo.png" width="150px" height="100px"></center>
							</td>
						</tr>
						<tr>
							<td colspan=2>
								<input type=text name=uname required placeholder="Username" class="uslogin">
							</td>
						</tr>
						<tr>
							<td colspan=2>
								<input type=password name=password id=password required placeholder="Password" class="uslogin">
							</td>
							
						</tr>
						<tr>
							
							<td colspan=2>
								<input type=checkbox onclick=showpassword()> Show Password
							</td>
							
						</tr>
						<tr>
							<td><center><input type=Submit name=login value=Login class="btnlogin"></center></td>
							<td><center><input type=Reset name=reset value=Reset class="btnlogin"></center></td>
						</tr>
						<tr>
							<td colspan=2><center><?php echo "<p class=loginfail>".$login."</p>"; ?></center></td>
						</tr>
					</table>

						
		</form>
		</div>
		<center>
	</div>
</body>
</html>
<style>
.login{
	height:400px;
	width:300px;
}

.loginfail{
	color:yellow;
	font-size:22px;
	
}

td{
	padding:10px;
	font-size:20px;
	color:red;	
	font-style:oblique;
}

.btnlogin{
	font-size:16px;
    border:2px solid;
    background-color: #F08080; 
    color: #ffffff;
    border-radius: 8px;
    padding: 8px 40px;
    cursor: pointer;
	
}
.btnlogin:hover{
	font-size:16px;
    background-color: #ffffff;
    color: blue;
    border-radius: 8px;
    padding: 8px 40px;
    cursor: pointer;
    border:2px solid;
    border-color:blue;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


.btnlogin:focus{
	font-size:16px;
    background-color: #ffffff;
    color: orange;
    border-radius: 8px;
    padding: 8px 40px;
    cursor: pointer;
    border:2px solid;
    border-color: orange;
}

.uslogin{
    margin: 0px 0px;;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
	width:80%;
	font-size:24px;
}
body{
	background-image:url(11.jpg);
	background-repeat:no-repeat;
	height:auto;
}
.uslogin:focus{
	 background-color: lightblue;
}
.login{
	width:300px;
	height:400px;
	background-color:rgba(0,0,0,0.3);
	margin-top:80px;
	
}

input[type=checkbox]{
	height:20px;
	width:20px;
}


input[type=text] {
    width: 100%;
	padding: 4px 8px;
    box-sizing: border-box;

}

input[type=password] {
    width: 100%;   
	padding: 2px 8px;
    box-sizing: border-box;
}
</style>