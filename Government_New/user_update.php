<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
	
include 'db.php';
$id=$_GET["n"];
$sql="select * from user where userid='".$id."'";
$result1=mysql_query($sql);
$dataset=mysql_fetch_row($result1);

if(isset($_POST["updatebtn"]))
{
	$sql1="update user set username='".$_POST['username']."',password='".$_POST['password']."',contact='".$_POST['contact']."',email='".$_POST['email']."',usertype='".$_POST['utype']."',status='".$_POST['status']."',taluka=".$_POST['taluka']." where userid='".$id."'";
	if(mysql_query($sql1))
	{
		header('Location:create_user.php');
	}
	
}
}
?>

<html>
<head>
<title> SRM | User Update </title>
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
					   <div class="panel" style='border:1px solid #FF5050;color:white'>
						<div class="panel-heading" style='background-color:#FF5050'>User Details Update</div>
							<div class="panel-body" style='color:black'>
							<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								Username :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								<input type=text name=username value="<?php echo $dataset[1]; ?>" required class=us autofocus>

							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								Password :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								<input type=password name=password required class=us>
							</div>
							</div>	
							<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								Email :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								<input type=text name=email value="<?php echo $dataset[4]; ?>" class=us >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								Contect :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								<input type=text name=contact value="<?php echo $dataset[3]; ?>" class=us>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								User Type :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								<select name=utype>
									<option <?php if($dataset[5]=="Super Admin"){ echo "selected"; } ?>>Super Admin</option>
									<option <?php if($dataset[5]=="Admin"){ echo "selected"; } ?>>Admin</option>
									<option <?php if($dataset[5]=="User"){ echo "selected"; } ?>>User</option>
								</select>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								Status :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								<select name=status>
									<option>Active</option>
									<option>Deactive</option>
								</select>
							</div>
							<div class="col-md-2 col-sm-12 col-xl-2 col-lg-2 s title">
                            Taluka : <span class="required"> *</span>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xl-4 col-lg-4 s">
                            <select name=taluka required>
                               <?php
									include 'db.php';
									echo "<option value=''>Select Taluka</option>";
									$result=mysql_query("select tid,taluka from taluka");
									while($data=mysql_fetch_array($result))
									{
										
										if($data[0]==$dataset[7])
										{
											echo "<option selected value='".$data['tid']."'>".$data['taluka']."</option>";
										}
										else
										{
											echo "<option value='".$data['tid']."'>".$data['taluka']."</option>";
										}
									}
							   
							   ?>
                            </select>
                        </div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 s text-center">
								<input type=Submit name=updatebtn value=Update  class="b">
							</div>
							<div class="col-md-6 col-sm-6 col-xl-6 col-lg-6 s text-center">
								<input type=reset name=reset value=Clear  class="b">
							</div>
						</div>
						</div>
					</div>
                </div>
            </form>
        </div>
		</div>
		</div>
</div>


</body>
</html>
