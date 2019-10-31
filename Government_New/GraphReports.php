<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
	
}
?>
<html>
<head>
	<title> Graph Report | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
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
<div class=r>
	
		<table class='table table-bordered '>
			<tr>
				<th colspan=2>0-6 Years Form Report</th>
			</tr>
			<form  method=post action="QuestionWiseGraph.php">
			<tr>
				<td>Question Wise Graph</td>
				<td><input type=Submit name=show value=Show class="b"></td>
			</tr>
			</form>
			
		</table>
</div>
<div class=r>
	<table class='table table-bordered '>
		<tr>
			<th colspan=2>6-18 Years Report</th>
			</tr>
		<tr>
		<form  method=post action="6-18YearsGraph.php">
			<td>Question Wise Graph</td>
			<td><input type=Submit name=show value=Show class="b"></td>
		</tr>
		<tr>
		</form>
		
		</table>
		</div>
		
		<div class=r>
	<table class='table table-bordered '>
		<tr>
			<th colspan=2>Case Report</th>
			</tr>
		<tr>
		<form  method=post action="CashGraph.php">
			<td>Case Graph</td>
			<td><input type=Submit name=show value=Show class="b"></td>
		</tr>
		<tr>
		</form>
		
		</table>
		</div>
		
</body>
</head>
</html>