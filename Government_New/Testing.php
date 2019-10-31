<?php
include 'db.php';
$sql="select qid,question from question";
$heroes = array(); 	 
//creating an statment with the query
$temp
$result=mysql_query($sql);

//looping through all the records
while($stmt=mysql_fetch_array($result)){
	
	//pushing fetched data in an array 
	$temp = [
		'qid'=>$id,
		'question'=>$name
	];
	
	//pushing the array inside the hero array 
	array_push($heroes, $temp);
}
 
//displaying the data in json format 
echo json_encode($heroes);
?>