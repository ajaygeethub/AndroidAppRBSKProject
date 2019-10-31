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
			$sql5="select question from Question_Category where question='".$_POST['question']."'";
			$result2=mysql_query($sql5);
			$data=mysql_num_rows($result2);
			if($data==0)
			{
				$sql="insert into Question_Category(question,uid) values('".$_POST['question']."','".$_COOKIE['uid']."')";
				$result=mysql_query($sql);
					if($result)
					{
						echo "<script> alert('Question Category is Created'); </script>";	
					}
			}
			else
			{
				echo "<script> alert('Question Category is Allready Exist in List'); </script>";	
			}
	}
}
?>
<html>
<head>
<title> Question Category | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ </title>
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
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Questions</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
                        
						 <div class="col-md-2 col-sm-12 col-xl-2 col-lg-2 s title">
                            Question Category :<span class="required"> *</span>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xl-10 col-lg-10 s">
                            <input type=text name=question required class=us autofocus>
                        </div>
						<div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 ">
                            <input type=Submit name=save value=Save  class="b">
                        </div>
						 <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 ">
                            <input type=reset name=reset value=Clear  class="b">
                        </div>
                   
			</form>
						<form name=f1 method=post action=QuestionCategory_Display.php>
						 <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 ">
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
</div>
</body>
</html>

