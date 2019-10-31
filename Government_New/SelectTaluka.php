
<?php
if(isset($_POST['go']))
{
	setcookie("taluka",$_POST['taluka'],(time()+(80000*30)));
	header("Location:dashboard.php");
}
?>
<html>
<head>
	<title>Select Taluka | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['login']))
{
	include 'mainpage.php';
}
else
{
		header("Location:index.php");
}
?>
<div class="container-fluid">
    <div class="row">
        

<div class="column middle">
<form method="post">
<div class="panel" style='border:1px solid #FF5050;color:white'>
	<div class="panel-heading" style='background-color:#FF5050'>Taluka Details</div>
	<div class="panel-body" style='color:black'>
<div class="container-fluid">
    <div class="row">
		
		
		<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
			Taluka:<span class="required"> *</span>
		</div>
		<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
			<?php
			include 'db.php';
				echo "<select name=taluka>";
					$sql="select t.tid,t.taluka from taluka t, user u where userid='".$_COOKIE['uid']."' and u.taluka=t.tid ";
					$result=mysql_query($sql);
					while($data=mysql_fetch_array($result))
					{
						echo "<option value=".$data['tid'].">".$data['taluka']."</option>";
					}
				echo "</select>";
			?>
		</div>
		
		
		<div class="col-md-3 col-sm-3 col-xl-2 col-lg-2 s ">
            <input type=Submit name=go value=Go  class="b">
        </div>
		</form>
		</div>
		</div>
		</div>
		</div>
</body>
</html>	