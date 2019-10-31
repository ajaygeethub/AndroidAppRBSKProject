<?php
include 'db.php';

	//post set krvu je data android mathi ave e.... pela pn kidhu che and 6-18 year ma joe levu ema set che
	
		//sid primary key autoincrement
		//childid foreign key childrendetails mathi avse 0-6y
		$result2=mysql_query("select hid from health where uid='1' order by hid desc limit 1");
		$childid=mysql_fetch_array($result2);
		$result=mysql_query("INSERT INTO sandarbh_card(child_name, gender, childDOB,  chlidFatherName,childMotherName,address,taluko,schoolName,schoolAdd,cast,uid, ChildId,4d,school) VALUES ('".$_POST['childName']."','".$_POST['gender']."','".$_POST['dob']."','".$_POST['f_name']."','".$_POST['m_name']."','".$_POST['add']."','1','".$_POST['school']."','".$_POST['schoolAdd']."','".$_POST['caste']."','1','".$childid[0]."','".$_POST['4d']."','".$_POST['schooling']."')");
		if($result>0)
		{
			echo "success";
		}
		else
		{
			echo "sory";
		}
		
	
?>

