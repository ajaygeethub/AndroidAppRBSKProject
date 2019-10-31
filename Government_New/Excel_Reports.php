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
	<title> Excel Report | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
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
				<th colspan=2>Excel Download</th>
			</tr>
			<form  method=post action="Taluka_Excel.php">
			<tr>
				<td>Taluka List</td>
				<td><input type=Submit name=show value=Show class="b"></td>
			</tr>
			</form>
			<form  method=post action="PHC_Excel.php">
			<tr>
				<td>PHC List</td>
				<td><input type=Submit name=show value=Show class="b"></td>
			</tr>
			</form>
			<form  method=post action="Sub_Center_Excel.php">
			<tr>
				<td>Sub Center List</td>
				<td><input type=Submit name=show value=Show class="b"></td>
			</tr>
			</form>
			<form  method=post action="Village_Excel.php">
			<tr>
				<td>Village List</td>
				<td><input type=Submit name=show value=Show class="b"></td>
			</tr>
			</form>
			<form  method=post action="Question_Category_Excel.php">
			<tr>
				<td>Question Category List</td>
				<td><input type=Submit name=show value=Show class="b"></td>
			</tr>
			</form>
			<form  method=post action="Question_Excel.php">
			<tr>
				<td>Question List</td>
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