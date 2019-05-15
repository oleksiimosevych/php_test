<?php include 'menu.php'; require_once 'DBClass.php';?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<meta charset="utf8">
	</head>
	<body bgcolor="gold">
	<center>
	<form action='show_countries.php' method='POST'>
	
	<div id=#textbox>
	Are you sure you want to delete </br>	<input type='hidden' name='country' value="<?=$_POST['country']?>" > <?=$_POST['country']?> </input><input type='hidden' name='id' value="<?=$_POST['id']?>" ></input></br>

	<input type='submit' name="submit" value='Yes I AM!'></input></div>
</form>

<?php
$id=$_POST['id'];

$tmp->destroy_country($id);


