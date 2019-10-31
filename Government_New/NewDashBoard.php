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
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Question', 'Answer'],
		  <?php
		  include 'db.php';
		   $sql = "select a.answer,count(a.answer) from answer a,question q where q.qid = a.questionid group by answer";
		   $result = mysql_query($sql);
		  while($answer=mysql_fetch_array($result))
		  {
			echo ' ["'.$answer[0].'",'.$answer[1].'],';
		  }

		  ?>
         
         
        ]);

        var options = {
          title: 'Answer'
        };
		
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
	  
	  
	  
	  
	  
	  
	 
    </script>


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
	<?php
	$sql="select count(question) from question where cid='1'";
	$result=mysql_query($sql);
	$data=mysql_fetch_array($result);
	for($i=0;$i<count($data);$i+=1)
	{
	echo '<div class="col-md-6 col-sm-12 col-xl-6 col-lg-6 s" id="piechart">';
		
	echo '</div>';
	}
	?>
 
</div>		
</div>
</body>
</html>