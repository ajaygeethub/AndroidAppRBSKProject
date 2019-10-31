<?php
if(!isset($_COOKIE['login']))
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
<title> Primary Checking | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ </title>
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
			<form name=f1 method=post action="ServiesDetails.php">
			 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Primary Checking Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Contact No of Health Team :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="contact" class="us" required autofocus>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Primary Checking Date :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=date name="checkingdate" value="<?php echo date("Y-m-d"); ?>" required class="us">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								બાળકને પ્રાથમિક તપાસમાં જોવા મળેલ રોગ :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="child" class="us" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								પ્રાથમિક તપાસમાં આપેલ સારવાર :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="child1" class="us" required>
							</div>
							
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								સંદર્ભ સેવા માટે કઈ હોસ્પિટલ / DEIC મા રીફર કર્યા  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="refer" class="us" required>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								પ્રાથમિક તપાસ કરનાર તબીબ ની સહી :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="sign" class="us" required>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								નામ:   <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="name" class="us" required placeholder="Full Name">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								હોદ્દો :   <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="designation" class="us" required placeholder="Designation">
							</div>
							
					
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

