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
			<form name=f1 method=post action="primarycheckingdetails.php">
			 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Children Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								Date :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=date name="Date" class="us" >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								જિલ્લો/કોર્પોરેશન :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s title">
								<input type=text name="district" class="us" required >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								મોબાઇલ હેલ્થ ટીમ આઈ.ડી :
							</div>
							
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s title">
								<input type=text name="ContactHealTeam" class="us" >
							</div>
							</div>
							<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								AWCનું નામ :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="AWSName" class="us">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								AWC આઈ.ડી :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="AWSID" class="us">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								આશાનું નામ અને સંપર્ક નંબર :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s title">
								<input type=text name="AshaName" class="us" required >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								આશા આઈ.ડી :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="AshaId" class="us" required >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								બાળકનું નામ :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="ChildName" class="us" required placeholder="Child Full Name">
							</div>
							
						</div>
						<div class="row">
							
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								માતા-પિતા/વાલીનું નામ :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="ParentsName" class="us" required placeholder="Parents Full Name">
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								બાળકનું ઉંમર(વર્ષ) :   (in Month 0.1 is 1 Month)
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="ChildAge" class="us" required placeholder="Full Name of Father">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								જાતિ  :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=radio name="gender" required> પુરૂષ 
								<input type=radio name="gender" required> સ્ત્રી
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								સંપર્ક નંબર: :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="ContactNo" class="us" placeholder="Full Name of Mother">
							</div>
							
							
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								ઈ-મમતા નંબર: :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="EmamtaNo" class="us" >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								આધાર નંબર:
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<input type=text name="AdharNo" class="us" required >
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s title">
								સરનામું:
							</div>
							<div class="col-md-6 col-sm-12 col-xl-8 col-lg-8 s">
								<textarea name=address class=us></textarea>
							</div>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								વજન(કિ.ગ્રા) : 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=text name="weight" class="us" placeholder="KG" >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								વેઈટ ફોર એજ વર્ગીકરણ:(જોબ એઈડ્સમાં ચાર્ટ રીફર કરવો)  : 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								સામાન્ય <input type=checkbox name="mediamw"> 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								<-૨SD <input type=checkbox name="twosdw"> 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								<-૩SD  <input type=checkbox name="threesdw"> 
							</div>
							
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								ઊંચાઈ/લંબાઈ(સેમી)માં
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=text name="length" class="us" placeholder="cm" >
							</div>
							
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								વેઈટ ફોર એજ વર્ગીકરણ:(જોબ એઈડ્સમાં ચાર્ટ રીફર કરવો)  : 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								સામાન્ય <input type=checkbox name="mediaml"> 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								<-૨SD <input type=checkbox name="twosdl"> 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								<-૩SD  <input type=checkbox name="threesdl"> 
							</div>
							</div>
						<div class="row">
							
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								માથાનો ઘેરાવો(સેમી)
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=text name="head" class="us" placeholder="cm" >
							</div>
							
							
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								વેઈટ ફોર એજ વર્ગીકરણ:(જોબ એઈડ્સમાં ચાર્ટ રીફર કરવો)  : 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								સામાન્ય <input type=checkbox name="mediamh"> 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								<-૨SD <input type=checkbox name="twosdh"> 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								<-૩SD  <input type=checkbox name="threesdh"> 
							</div>
							
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								MUAC(સેમી)
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s">
								<input type=text name="MUAC" class="us" placeholder="cm" >
							</div>
							
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								વેઈટ ફોર એજ વર્ગીકરણ:(જોબ એઈડ્સમાં ચાર્ટ રીફર કરવો)  : 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								સામાન્ય <input type=checkbox name="mediamm"> 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								<-૨SD <input type=checkbox name="twosdm"> 
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								<-૩SD  <input type=checkbox name="threesdm"> 
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

