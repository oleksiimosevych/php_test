<?php include 'menu.php'; require_once 'DBClass.php';?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<meta charset="utf8">
	</head>
	<body bgcolor="gold">
	<center>
	<form action='show.php' method='POST'>
	
	<div id=#textbox>
	Are you sure you want to delete 
	<br>	
	<input type='hidden' name='name1' value="<?=$_POST['name1']?>" > <?=$_POST['name1']?> </input>
	<input type='hidden' name='id' value="<?=$_POST['user_id']?>" ></input></br>
	<input type='hidden' name='email' value="<?=$_POST['email']?>" ></input></br>

	<input type='submit' name="submit" value='Yes I AM!'></input></div>
</form>

<?php
$id=$_POST['user_id'];
if (isset($id)){
	$tmp->destroy_user($id);
	$infoLogger->info('User data is deleted by IP ', array('user'=>$_SERVER['SERVER_ADDR'], 'date'=>date('H:i:s d.m.Y'), 'Additional info'=>array('name was'=>$_POST['name1'],'email was'=>$_POST['email'] ) ) );
}