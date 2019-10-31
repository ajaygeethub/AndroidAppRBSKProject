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
<title>Multiple Question Wise Reports | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
</head>
<body>

<?php
include 'mainpage.php';
?>
		<form name=f2 method=post action=report.php>
			
				<input type=submit name=backtoreport value="<<Back to Reports" class="b1">
			
		</form>


<form name=f1 method=post>	
		
              <div class="panel" style='border:1px solid #FF5050;color:white'>
					<div class="panel-heading" style='background-color:#FF5050'>Party Wise Stock</div>
						<div class="panel-body" style='color:black'>
                <div class="panel-body">
                    <div class="row">
						<div class="col-md-2 col-sm-3 col-xs-12 col-lg-1 s title">
							To:
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 col-lg-2 s">
							  <input type="date" name="todate"  value="<?php echo date("Y-m-01") ?>">
						</div>
						<div class="col-md-2 col-sm-3 col-xs-12 col-lg-1 s title">
							From:
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 col-lg-2 s">
							  <input type="date" name="fromdate"  value="<?php echo date("Y-m-d") ?>">
						</div>
						<div class="col-md-4 col-sm-3 col-xs-12 col-lg-3 s">
							<input type=submit name=find value="Search" class=b>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>

                <?php
                if(isset($_POST['find'])) 
				{
					$total=0;
					
					echo '<div class="panel" style="border:1px solid #FF5050;color:white">
					<div class="panel-heading" style="background-color:#FF5050"><center><h3>Question Wise Report of '.date("d-m-Y",strtotime($_POST['todate']))." to ".date("d-m-Y",strtotime($_POST['fromdate'])).'</h3></center></div>
					<div class="panel-body" style="color:black">
					<div class="panel-body">
					<div class="table-responsive">
					<div class="table-fixed"><table class="table table-bordered border-0">';
                    include 'db.php';
					echo "<form name=f2 method=post>";
                    echo "<tr><th>Select Choice</th><th>Question</th></tr>";
                    $result1 = mysql_query("select question,qid from question where cid=1");
                    while ($dataset = mysql_fetch_row($result1)) 
					{
					
						echo "<tr><td><input type=checkbox name=product[] value='".$dataset[0]."'></td><td>".$dataset[0]."</td></tr>";
                    }
                }
				echo '</div>';
				echo ' </table>';
				echo "<div class='col-md-4 col-sm-3 col-xs-12 col-lg-3 s'>
							<input type=submit name=search value='Search Selection' class=b>
						</div>";
				echo "</form>";
				echo '</div></div>';
				
				echo '</div>';
                ?>
				<?php
				
				if(isset($_POST['search']))
				{
				echo '<div class="table-responsive">
  
            <div class="table-fixed"><table class="table table-bordered border-0">';
					  echo "<thead ><tr style='position:sticky; top:0;'><th>Questions</th><th>Yes</th><th>No</th></tr><thead>";
					$d=$_POST['product'];
					$total=0;
					$yes=0;
					$no=0;
					foreach($d as $question)
					{
							
							$sql="select question from question where question='".$question."'";
							
							$result=mysql_query($sql);
							$question1=mysql_fetch_array($result);
							
							
							echo "<tr><td class=title>".$question1[0]."</td>";
							
							
							
							$sql1="select count(a.answer) from answer a,question q where q.qid=a.questionid and q.question='".$question."' and answer='Y'";
							$result1=mysql_query($sql1);
							$answerY=mysql_fetch_array($result1);
							$yes+=$answerY[0];
							
							
							$sql2="select count(a.answer) from answer a,question q where q.qid=a.questionid and q.question='".$question."' and answer='N'";
							$result2=mysql_query($sql2);
							$answerN=mysql_fetch_array($result2);
							$no+=$answerN[0];
							
							echo "<td class=titlegreen>".$answerY[0]."</td><td class=titlered>".$answerN[0]."</td></tr>";
							
							

                    }
                    echo "<tr><th></th><th><center>" .$yes. "</center></th><th><center>" .$no. "</center></th></tr>";
                }
				echo ' </table></div>';
				echo '</div>';
				echo '</div>';
				
				?>
</body>
</html>

