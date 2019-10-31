<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
include 'db.php';
	if(isset($_POST['save']))
	{
			$sql5="select username from user where username='".$_POST['username']."'";
			$result2=mysql_query($sql5);
			$data=mysql_num_rows($result2);
			if($data==0)
			{
				$username=$_POST['username'];
				$sql="insert into user(username,password,contact,email,usertype,status,taluka) values('".$username."','".$_POST['password']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['utype']."','".$_POST['status']."','".$_POST['taluka']."')";
				$result=mysql_query($sql);
					if($result)
					{
						echo "<script> alert('User is Created'); </script>";	
					}
			}
			else
			{
				echo "<script> alert('Username is Allready Exist'); </script>";	
			}
	}
}
?>
<html>
<head>
<title> User | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ </title>
</head>
<body>
        <?php
			include 'mainpage.php';
		?>
<div class="container-fluid">
		<div class="row">
			<div class="column side">
				<?php
					include 'menu.php';
				?>
			</div>
		<div class="column middle">
			<form name=f1 method=post>
					 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>User Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
                        <div class="col-md-2 col-sm-12 col-xl-2 col-lg-2 s title">
                            Username <span class="required"> *</span>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xl-4 col-lg-4 s">
                            <input type=text name=username required class=us autofocus>

                        </div>
                        <div class="col-md-2 col-sm-12 col-xl-2 col-lg-2 s title">
                            Password <span class="required"> *</span>
                        </div>
						
                        <div class="col-md-10 col-sm-12 col-xl-4 col-lg-4 s">
                            <input type=password name=password required class=us >
                        </div>
						</div>
						<div class="row">
                        <div class="col-md-2 col-sm-12 col-xl-2 col-lg-2 s title">
                            Email <span class="required"> *</span>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xl-4 col-lg-4 s ">
                            <input type=text name=email class=us maxlength=30>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xl-2 col-lg-2 s title">
                            Contect <span class="required"> *</span>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xl-4 col-lg-4 s">
                            <input type=text name=contact class=us maxlength=10 required>
                        </div>
						 <div class="col-md-2 col-sm-12 col-xl-2 col-lg-2 s title">
                            Taluka : <span class="required"> *</span>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xl-4 col-lg-4 s">
                            <select name=taluka>
                               <?php
									include 'db.php';
									echo "<option value=''>Select Taluka</option>";
									$result=mysql_query("select tid,taluka from taluka");
									while($data=mysql_fetch_array($result))
									{
										echo "<option value='".$data['tid']."'>".$data['taluka']."</option>";
									}
							   
							   ?>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xl-2 col-lg-2 s title">
                            User Type <span class="required"> *</span>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xl-4 col-lg-4 s">
                            <select name=utype>
                                <option>Super Admin</option>
                                <option>Admin</option>
                                <option>User</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xl-2 col-lg-2 s title">
                            Status <span class="required"> *</span>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xl-4 col-lg-4 s">
                            <select name=status>
                                <option>Active</option>
                                <option>Deactive</option>
                            </select>
                        </div>
                        
                    
		
							<div class="col-md-3 col-sm-3 col-xl-2 col-lg-2 s ">
								<input type=Submit name=save value=Save  class="b">
							</div>
							</form>
							<div class="col-md-3 col-sm-3 col-xl-2 col-lg-2 s ">
								<input type=reset name=reset value=Clear  class="b">
							</div>
							<form name=f1 method=post action=user_display.php>
								<div class="col-md-3 col-sm-3 col-xl-2 col-lg-2 s ">
									<input type=submit name=display value=Display  class="b">
								</div>
							</form>
							</div>
                    </div>
					</div>
			</form>
							
						</div>
						</div>
		 </div>
		</div>
		</div>
		</div>
</div>
</body>
</html>

