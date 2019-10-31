<html>
<head>
<title>SRM | Customer Display</title>
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
        <div class="column middle" style="padding:10px;padding-top:0px;">
			
	<?php

	if(!isset($_COOKIE["login"]))
	{
		header("Location:index.php");
	}
	else
	{
		
	include 'db.php';
	$sql="select * from customer order by cname asc";
	$result=mysql_query($sql);
	echo "<div class='table-responsive'>";
	echo "<table class='table table-bordered'>";
	echo "<tr><th>SRNO</th><th>Customer Name</th><th>Contact</th><th>State</th><th>GSTIN</th><th>Update</th><th>Delete</th></tr class=dtr>";
	$srno=0;
	while($dataset=mysql_fetch_row($result))
	{
		$srno+=1;
		echo "<tr><td>".$srno."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td><td>".$dataset[4]."</td><td>".$dataset[5]."</td><td><a href=customer_update.php?n=".$dataset[0].">Update</a></td><td><a href=customer_update.php?n=".$dataset[0].">Delete</a></td></tr>";
	}
	echo "</table>";
	echo "</div>";
	echo "</form>";
}
?>

        <?php
        include 'footer.php';
        ?>
		</div>
		
</div>
</div>
</body>
</html>