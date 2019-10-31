<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
include 'db.php';
	
}
?>
<html>
<head>
<title> Children Information | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ </title>
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
			<form name=f1 method=post action="test1.php">
			 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Children Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								1 :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="q1" class="us" >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								2 :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s title">
								<input type=text name="q2" class="us" required >
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
						<form name=f1 method=post action=question_display.php>
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

