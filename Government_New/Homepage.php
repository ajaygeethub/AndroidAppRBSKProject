<?php
session_start();
if(isset($_SESSION['login']))
{
	include 'mainpage.php';
}
else
{
		header("Location:index.php");
}
?>
<html>
<head>
<title> Government | Homepage </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="column side">
            <?php
            include 'menu.php';
            ?>
        </div>
        <div class="column middle">
            <?php
           
            ?>
        </div>
    </div>
</div>
</body>
</html>