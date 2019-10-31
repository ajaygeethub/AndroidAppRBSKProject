<?php
$cname="";
include 'db.php';
$id=$_GET["n"];
$result1=mysql_query("select * from Customer where cid='".$id."'");
$dataset=mysql_fetch_row($result1);
if(isset($_POST['save']))
	{
		$sql="update Customer set cname='".$_POST['cname']."',address='".$_POST['address']."',contact='".$_POST['contact']."',state='".$_POST['state']."',gstno='".$_POST['gstno']."',uid='".$_COOKIE['uid']."' where cid='".$id."'";
		$result=mysql_query($sql);
		if($result)
		{
			header("Location:customer.php");
		}
	}
?>
<html>
<head>
<title>SRM | Customer Update</title>
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
			$sql="select * from user_permision where uid='".$_COOKIE['uid']."'";
					$result=mysql_query($sql);
					$data=mysql_fetch_array($result);

						if($data['customer']=='Y')
						{
							
		?>
        </div>
        <div class="column middle">
            <form name=f1 method=post>
                <div class="container-fluid">
				 <div class="panel" style='border:1px solid #FF5050;color:white'>
					<div class="panel-heading" style='background-color:#FF5050'>Customer Details Update</div>
						<div class="panel-body" style='color:black'>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
                            Name :
                        </div>
                        <div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
                            <input type=text name=cname required autofocus class="us" value="<?php echo $dataset[1]; ?>">

                        </div>
                        <div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
                            State :
                        </div>
                        <div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
                            <select name=state required>
                                <option>Gujarat</option>
                                <option>Other State</option>
                            </select>
                        </div>
					</div>
						<div class="row">
                        <div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
                            Address :
                        </div>
                        <div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
                            <input type=text name=address class="us" value="<?php echo $dataset[3]; ?>">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
                            Contect :
                        </div>
                        <div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
                            <input type=text name=contact  class="us" value="<?php echo $dataset[2]; ?>">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
                            GSTIN :
                        </div>
                        <div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
                            <input type=text name=gstno class="us" maxlength=15 value="<?php echo $dataset[5]; ?>">
                        </div>
                        <div class="col-md-3 col-sm-6 col-xl-3 col-lg-3 s">
                            <input type="submit" name="save" value="Update"  class="b">
                        </div>
                        <div class="col-md-3 col-sm-6 col-xl-3 col-lg-3 s">
                            <input type="reset" name="reset" value="Clear"  class="b">
                        </div>
						</form>
						<form name=f1 method=post action=customer_display.php>
						<div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 ">
                            <input type=submit name=display value=Display  class="b">
                        </div>
						
                    </div>
                </div>
				</div>
				</div>
            </form>
			<?php
							}
						else
						{
						echo "</div>";
						echo '<div class="column middle">';
						echo "<center><h1>Unauthorized Access</h1></center>";
						echo "</div>";
						}
												
							?>	
            
			</div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </div>
</div>
</body>
</html>