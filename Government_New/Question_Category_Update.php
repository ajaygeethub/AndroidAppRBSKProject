<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
$cname="";
include 'db.php';
$id=$_GET["n"];
$result1=mysql_query("select * from question_category where cid='".$id."'");
$dataset=mysql_fetch_row($result1);
if(isset($_POST['save']))
	{
		$sql="update question_category set question='".$_POST['question']."',uid='".$_COOKIE['uid']."' where cid='".$id."'";
		$result=mysql_query($sql);
		if($result)
		{
			header("Location:QuestionCategory.php");
		}
	}
}
?>
<html>
<head>
<title>Update Question | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
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
				 <div class="panel" style='border:1px solid #FF5050;color:white'>
					<div class="panel-heading" style='background-color:#FF5050'>Question Update</div>
						<div class="panel-body" style='color:black'>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
                            Name :
                        </div>
                        <div class="col-md-10 col-sm-10 col-xl-10 col-lg-10 s">
                            <input type=text name=question required autofocus class="us" value="<?php echo $dataset[1]; ?>">

                        </div>
                        <div class="col-md-2 col-sm-2 col-xl-12 col-lg-2 s">
                            <input type="submit" name="save" value="Update"  class="b">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xl-12 col-lg-2 s">
                            <input type="reset" name="reset" value="Clear"  class="b">
                        </div>
						</form>
						<form name=f1 method=post action=QuestionCategory_Display.php>
						<div class="col-md-2 col-sm-3 col-xs-12 col-lg-2 ">
                            <input type=submit name=display value=Display  class="b">
                        </div>
						
                    </div>
                </div>
				</div>
				</div>
            </form>
            
        </div>
       
    </div>
</div>
</body>
</html>