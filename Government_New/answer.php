<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
include 'db.php';
	if(isset($_POST['save']))
	{
		$result=mysql_query("insert into health(weight,height,bmi,uid,childname,hdate,checkupreq,taluka) values('".$_POST['weight']."','".$_POST['height']."','".$_POST['bmi']."','".$_COOKIE['uid']."','".$_POST['cname']."','".$_POST['hdate']."','".$_POST['checkupreq']."','".$_COOKIE['taluka']."')");
		$result2=mysql_query("select hid from health where uid='".$_COOKIE['uid']."' order by hid desc limit 1");
		$hid=mysql_fetch_array($result2);
			$q=$_POST['answer'];
			foreach($q as $question)
			{
				$result=mysql_query("insert into answer(mainid,questionid,answer) values('".$hid[0]."','".substr($question,1,10)."','".substr($question,0,1)."')");
			}
			if($_POST['checkupreq']=="Yes")
			{
				header("location:child.php");
			}
			else
			{
				
			}
	}
}
?>
<html>
<head>
<title> Question Answers | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ </title>
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
			<form name=f1 method=post>
			
			
			 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Health Details Of 6 To 12 Years </div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Child Name :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s ">
								<input type=text name="cname" autofocus class="us" required >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Weight :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s ">
								<input type=text name="weight" class="us" required >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Height :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s ">
								<input type=text name="height" class="us" required>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								BMI :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s ">
								<input type=text name="bmi" class="us">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Date :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s ">
								<input type=date name="hdate" class="us">
							</div>
						</div>
						</div>
			</div>
			
					 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Questions</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
                        <?php
						
						$sql="select qid,question from question where cid='1'";
						$result=mysql_query($sql);
						$srno=0;
						echo "<table class='table table-bordered'>";
						echo "<tr><th>Srno</th><th>Question</th><th>Yes / No</th></tr>";
						while($question=mysql_fetch_array($result))
						{
							$srno+=1;
						echo '<tr><td>'.$srno.'</td>';
                        echo '<td>'.$question['question'].'</td>';
						
						echo '<td><input type=radio name=answer['.$question[0].'] value="Y'.$question[0].'"> 
								Yes <input type=radio name=answer['.$question[0].'] value="N'.$question[0].'"> No </td><tr>';
						}
						
						echo '</table>';
						
						?>
					
		</div>
		</div>
		
		
		</div>
		
		
		
		<div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Madical Checkup Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Required Medical Checkup ? :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s title">
								<input type=radio name=checkupreq value="Yes"> Yes
								<input type=radio name=checkupreq value="No"> No
							</div>
						</div>
						<div class="row">
						<div class="col-md-2 col-sm-3 col-xs-12 col-lg-4 s text-center">
                            <input type=Submit name=save value=Save  class="b" >
                        </div>
						 <div class="col-md-2 col-sm-3 col-xs-12 col-lg-4 s text-center">
                            <input type=reset name=reset value=Clear  class="b">
                        </div>
							</form>
						<form name=f1 method=post action=answer_display.php>
						 <div class="col-md-2 col-sm-3 col-xs-12 col-lg-4 s text-center">
                           <input type=submit name=display value=Display  class="b">
                        </div>
						</form>
		</div>
						</div>
						</div>
			</div>
				</div>
			</div>
			</div>
</body>
</html>

