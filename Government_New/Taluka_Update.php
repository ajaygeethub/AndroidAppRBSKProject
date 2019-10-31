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
$sql="select * from taluka where tid='".$id."'";
$result1=mysql_query($sql);
$dataset=mysql_fetch_row($result1);

if(isset($_POST["updatebtn"]))
{
	$sql1="update taluka set taluka='".$_POST['taluka']."',uid=".$_COOKIE['uid']." where tid='".$id."'";
	if(mysql_query($sql1))
	{
		header('Location:taluka.php');
	}
	
}
}
?>

<html>
<head>
<title> Update Taluka Details | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
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
						<div class="panel-heading" style='background-color:#FF5050'>Update Taluka Details</div>
							<div class="panel-body" style='color:black'>
							<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								Taluka :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								<input type=text name=taluka value="<?php echo $dataset[1]; ?>" required class=us autofocus>

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
