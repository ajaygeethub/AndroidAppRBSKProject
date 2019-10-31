<?php
session_start();
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
<title>
	DashBoard | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
</title>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<?php
	include 'db.php';
	$sql1="select tid from taluka";
	$result1=mysql_query($sql1);
	$i=1;
	while($d=mysql_fetch_array($result1))
	{
	?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Question', 'Answer'],
		  <?php
		  include 'db.php';
		   $sql = "select sum(newcase),sum(folloupcase) from rog where taluka='".$d[0]."' and date between '".date('Y-m-01')."' and '".date('Y-m-d')."'";
		  
		   $result = mysql_query($sql);
		  while($answer=mysql_fetch_array($result))
		  {
			echo ' ["New Case",'.$answer[0].'],["FollowUp Case",'.$answer[1].']';
		  }

		  ?>
         
         
        ]);

        var options = {
          title: 'Answer'
        };
		
		
     var chart = new google.visualization.PieChart(document.getElementById('piechart<?php echo $i; ?>'));
       

        chart.draw(data, options);
      }
	  

    </script>
	
	<?php
	$i+=1;
	}
	?>
	

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
	<div class="container-fluid">
	<div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'><center><font size=4>New and FollowUp Case of <?php echo date('01-M-Y')." To ".date('d-M-Y'); ?></font></center></div>
						<div class="panel-body" style='color:black;radius:0px'>
	<?php
	include 'db.php';
	$sql1="select tid,taluka from taluka";
	$result1=mysql_query($sql1);
	$i=1;
	echo "<div class='col-md-12 col-sm-12 col-xl-12 col-lg-12 s title'>";
	while($d=mysql_fetch_array($result1))
	{
	echo "<div class='col-md-1 col-sm-12 col-xl-1 col-lg-1 s' >";
		echo $d[1];
		echo "</div>";
	
	echo "<div class='col-md-5 col-sm-12 col-xl-5 col-lg-5 s' id='piechart".$i."'>";
	
		echo "</div>";
	
	$i+=1;
	}
	echo "</div>";
	?>

</div>		
</div>
</body>
</html>