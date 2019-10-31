<?php
if(!isset($_COOKIE['login']))
{
	header("Location:index.php");
}
else
{
include 'db.php';
	if(isset($_POST['save']))
	{
			
	}
}
?>
<html>
<head>
<title> High Risk | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ </title>
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
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>High Risk Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Date of Visit by RBSK :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=date name="dob" class="us" required>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Last Date of attending mamta session:  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=date name="dob" class="us" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								PHC :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<select name="phcid" id="phcid">
									<?php
									include 'db.php';
									$result=mysql_query("select phcid,phcname from phc order by phcname");
									echo "<option value=''>Select PHC</option>";
									while($data=mysql_fetch_array($result))
									{
										echo "<option value=".$data[0].">".$data[1]."</option>";
									}
									?>
								</select>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Sub Center:  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<select name=scid id=scid>
									
								</select>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Village:  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<select name=vid id=vid>
								<?php
									include 'db.php';
									$result=mysql_query("select vid,vname from village order by vname");
									echo "<option value=''>Select Village Name</option>";
									while($data=mysql_fetch_array($result))
									{
										echo "<option value=".$data[0].">".$data[1]."</option>";
									}
									?>
								</select>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Checked Mother Name :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="mothername" class="us" required >
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Contact no :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="contact" class="us" required placeholder="Phone No of High Risk Mother Check By RBSK Doctor: ">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Reasion of High Risk :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="reasion" class="us" required>
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								LMP and Expected Delivery Date :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Yes <input type=radio name="LMP" value="Yes">
								No <input type=radio name="LMP" value="No">
								
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								
								<input type=date name="ddate" class="us" required>
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Does BP Match with that recorded in Mamta :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Yes <input type=radio name="BPMatch" value="Yes">
								No <input type=radio name="BPMatch" value="No">
								
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								BP / PEDAL EDEMA :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								BP <input type=radio name="BP" value="BP">
								PEDAL EDEMA <input type=radio name="BP" value="PEDAL EDEMA ">
								
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								HB % / Blood Group:  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="HBPercentage" class="us" required>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<select name="BloudGroup">
									<option value="A+"> A +</option>
									<option value="A-"> A -</option>
									<option value="B+"> B +</option>
									<option value="B-"> B -</option>
									<option value="AB+"> AB +</option>
									<option value="AB-"> AB -</option>
									<option value="O+"> O +</option>
									<option value="O-"> O -</option>
									
								</select>
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Does HB Match with that recorded in Mamta :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								Yes <input type=radio name="HBMatch" value="Yes">
								No <input type=radio name="HBMatch" value="No">
								
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								If HB Grater Then 7, IRON SUCROSE I/V given ? with Date :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								 If HB Grater Then 7 : Yes <input type=radio name="HBG" value="Yes">
								No <input type=radio name="HBG" value="No">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								<input type=date name="irondate" class="us">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Diabetes / Blood Sugar :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="Diabetes" class="us">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Thalassemia Test:  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								Yes <input type=radio name="Thalassemia" value="Yes">
								No <input type=radio name="Thalassemia" value="No">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								Minor <input type=radio name="ThalassemiaT" value="Minor">
								Major <input type=radio name="ThalassemiaT" value="Major">
								Negative <input type=radio name="ThalassemiaT" value="Negative">
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								HIV Test :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								Yes <input type=radio name="HIVT" value="Yes">
								No <input type=radio name="HIVT" value="No">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								Positive <input type=radio name="HIVTR" value="Positive">
								
								Negative <input type=radio name="HIVTR" value="Negative">
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Sonography Done Or Not?-If,Yes Mention Date.If no :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								Yes <input type=radio name="Sonography" value="Yes">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								How much Done ?:  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=text name="SonographyDone" value="Yes">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=date name="SonographyDate">
							</div>
							</div>
						<div class="row">
							
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Gravida/Para :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<select name=gravide>
									<?php
										for($i=1;$i<=20;$i+=1)
										{
											echo "<option>".$i."</option>";
										}
									?>
								</select>
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								TT Dose With Date :  <span class="required"> *</span>
							</div>
							
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="TTDoes" class="us">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=date name="TTDate" class="us">
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Was High Risk Mother Made Aware Of Her Condition :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="hbmatch" class="us" required>
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								H/O Previons Deliveryie :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="hbmatch" class="us" required>
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Any Addition ie Tobacco,Smoking :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="hbmatch" class="us" required>
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Delivery Plan(Hospital) :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="hbmatch" class="us" required>
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								No.Of Visit by :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="hbmatch" class="us" required>
							</div>
							
					
						<div class="col-md-2 col-sm-3 col-xs-12 col-lg-4 s text-center">
                            <input type=Submit name=save value=Save  class="b" >
                        </div>
						 <div class="col-md-2 col-sm-3 col-xs-12 col-lg-4 s text-center">
                            <input type=reset name=reset value=Clear  class="b">
                        </div>
							</form>
						<form name=f1 method=post action=HighRiskMother.php>
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

