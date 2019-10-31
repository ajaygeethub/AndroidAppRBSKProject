<?php
include 'config.php';

if(isset($_SESSION['login']))
{
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-sm-2 col-xl-2 col-lg-2 s text-center">
			<img src="logo.png" height="100px" width="120px">
		</div>
		<div class="col-md-10 col-sm-10 col-xl-10 col-lg-10 s text-center" style="top:20px">
			<font style="color:rgb(20,20,150);font-size:40px;">કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</font>
		</div>
	</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xl-12 col-lg-12 s status">
	<div class="col-md-2 col-sm-2 col-xl-2 col-lg-2 ssize text-left">
		Taluka :
	</div>
	<?php
	if(isset($_COOKIE['taluka']))
	{
		include 'db.php';
		$result=mysql_query("select taluka from taluka where tid=".$_COOKIE['taluka']."");
		$data=mysql_fetch_array($result);
		echo '<div class="col-md-4 col-sm-4 col-xl-4 col-lg-6 ssize text-left">';
			 echo $data['taluka'];
		echo 	'</div>';
		
	}
	?>
	<div class="col-md-2 col-sm-3 col-xl-2 col-lg-2 ssize text-right">
		Username :
	</div>
	<?php
	if(isset($_COOKIE['taluka']))
	{
		
		echo '<div class="col-md-4 col-sm-3 col-xl-4 col-lg-2 ssize  text-right">';
			 echo $_COOKIE['uname'];
		echo 	'</div>';
		
	}
	?>
	
</div>
</div>
</div>
<br>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

}
else
{
	header("location:index.php");
}
?>