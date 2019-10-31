<?php
if(!isset($_COOKIE['login']))
{
	header("Location:index.php");
}
else
{
$cname="";
include 'db.php';
if(isset($_POST['save']))
	{
		
		if(preg_match('/^[0-9]{10}+$/',$_POST['contact'])==true)
			{
		$sql3="select cname from customer where cname='".$_POST['cname']."'";
		$result2=mysql_query($sql3);
		$data=mysql_num_rows($result2);
		if($data==0)
		{
		$sql="insert into Customer(cname,address,contact,state,gstno,uid) values('".strtoupper($_POST['cname'])."','".strtoupper($_POST['address'])."','".$_POST['contact']."','".$_POST['state']."','".strtoupper($_POST['gstno'])."','".$_COOKIE['uid']."')";
		$result=mysql_query($sql);
		echo "<script>alert('Customer is Added'); </script>";
		}
		else
		{
			echo "<script>alert('Customer is Allready in List'); </script>";
		}
			}
			else{
				echo "<script>alert('Invalid Mobile Number'); </script>";
			}
	}
}
?>
<html>
<head>
<title>SRM | Customer</title>
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
                     <div class="panel" style='border:1px solid #FF5050;color:white'>
					<div class="panel-heading" style='background-color:#FF5050'>Customer Details</div>
						<div class="panel-body" style='color:black'>

                        <div class="row">
                        <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 title">
                            Name <span class="required"> *</span>
                        </div>
                        <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4 s">
                            <input type=text name=cname required autofocus class="us">
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 s title">
                            Address <span class="required"> *</span>
                        </div>
                        <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4 s">
                            <input type=text name=address class="us" required>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 s title">
                            Contect <span class="required"> *</span>
                        </div>
                            <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4 s">
                            <input type=text name=contact  class="us" required maxlength="10">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 s title">
                            GSTIN <span class="required"> *</span>
                        </div>
                        <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4 s">
                            <input type=text name=gstno maxlength=15 class="us">
                        </div>
                            <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 s title">
                                State <span class="required"> *</span>
                            </div>
                            <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4 s">
                                <select name=state required>
                                    <option>Gujarat</option>
                                    <option>Other State</option>
                                </select>
                            </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 ">
                            <input type=Submit name=save value=Save  class="b">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 ">
                            <input type=reset name=reset value=Clear  class="b">
                        </div>
						</form>
						<form name=f1 method=post action=Customer_display.php>
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
							
											else{
												echo "</div>";
												echo '<div class="column middle">';
												echo "<center><h1>Unauthorized Access</h1></center>";
												echo "</div>";
											}
												
							?>	
							
			
		    
				
	
		 </div>
        <?php
        include 'footer.php';
        ?>
    </div>
</div>


</body>
</html>