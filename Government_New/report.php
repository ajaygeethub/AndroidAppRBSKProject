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
	<title> Reports | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ </title>
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
			<form  method=post action="0-6YearsDatewiseReport.php">
			<tr>
				<td>Date Wise Reports</td>
				<td><input type=Submit name=show value=Show class="b"></td>
			</tr>
			</form>
			<tr>
			<form  method=post action="QuestionAnswerwisereports.php">
				<td>Question Wise Reports</td>
				<td><input type=Submit name=show value=Show class="b"></td>
			</tr>
			</form>
			<form  method=post action="0-6YearsSummeryReports.php">
				<td>Summery Reports</td>
				<td><input type=Submit name=show value=Show class="b"></td>
			</tr>
			</form>
			
		<form name=f1 method=post action="MultipleQuestionWiseReports.php">
		<tr>
		<td>Multiple Question Answer</td>
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
		<form  method=post action="6-18YearsDatewiseReport.php">
			<td>Date Wise Reports</td>
			<td><input type=Submit name=show value=Show class="b"></td>
		</tr>
		<tr>
		</form>
		<form  method=post action="6-18YearsQuestionAnswerWiseReport.php">
			<td>Question Wise Reports</td>
			<td><input type=Submit name=show value=Show class="b"></td>
		</tr>
		</form>
		
		<form  method=post action="6-18YearsSummeryReports.php">
			<td>Summery Reports</td>
			<td><input type=Submit name=show value=Show class="b"></td>
		</tr>
		</form>
		<form name=f1 method=post action="6-18YearsMultopleQuestionReports.php">
		<tr>
		<td>Multiple Question Answer</td>
		<td><input type=Submit name=show value=Show class="b"></td>
		</tr>
		</form>
		</table>
		</form>
		</div>
<div class=r>
		<table class='table table-bordered '>
		<tr>
			<th colspan=2>High Risk Report</th>
			</tr>
		
		<form  method=post action="HighRiskDateWiseReport.php">
			<td>Date Wise Reports</td>
			<td><input type=Submit name=show value=Show class="b"></td>
		</tr>
		<tr>
		</form>
		</div>
		
		<div class=r>
		<table class='table table-bordered '>
		<tr>
			<th colspan=2>Case Report</th>
			</tr>
		
		<form  method=post action="CashReport.php">
			<td>Date Wise Summery Report</td>
			<td><input type=Submit name=show value=Show class="b"></td>
		</tr>
		<tr>
		</form>
		<form  method=post action="CashReportData.php">
			<td>Date Wise Report</td>
			<td><input type=Submit name=show value=Show class="b"></td>
		</tr>
		<tr>
		</form>
		</div>
		
</body>
</head>
</html>
