<?php
include 'db.php';
$result=mysql_query("insert into health(weight,height,bmi,uid,chilname,fathername,mothername,dob,gender,contact,emamta,adhar,address,hdate,date) values('".$_POST['weight']."','".$_POST['height']."','".$_POST['bmi']."','1','".$_POST['name']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['contact_no']."','".$_POST['e_mamta']."','".$_POST['adhar']."','".$_POST['address']."','".date('y-m-d')."','".date('y-m-d')."')");
$result2=mysql_query("select hid from health where uid='1' order by hid desc limit 1");
$hid=mysql_fetch_array($result2);
$j=0;
for($i=0;$i<25;$i+=1)
{
		$j+=1;
		$result=mysql_query("insert into answer(mainid,questionid,answer) values('".$hid[0]."','".$j."','".$_POST['q'.$j]."')");
}
echo "success";
	
?>