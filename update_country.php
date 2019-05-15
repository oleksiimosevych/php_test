<?php include 'menu.php'; include 'DBClass.php'; ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<meta charset="utf8">
	</head>
	<body bgcolor="gold">
	<center>
	<form action='' method='POST'>
	
	<div id=#textbox>
	RENAME <?=$_POST['country']?> into </br>	<input type='text' name='country' value="<?=$_POST['country']?>" ><input type='hidden' name='id' value="<?=$_POST['id']?>" ></input></br>
	
	<input type='submit' name="submit" value='Update'></input></div>
	</form>
	<br> DESTROY|DELETE|ERASE<br><br>
	<form action='delete_country.php' method='POST'>
	
	<div id=#textbox>
	DESTROY <?=$_POST['country']?> for now? </br><input type='hidden' name='id' value="<?=$_POST['id']?>" ></input><input type='hidden' name='country' value="<?=$_POST['country']?>" ></input></br>
	
	<input type='submit' name="submit" value='DESTROY'></input></div>
	</form>
<?php
if (isset($_POST['country'])&& (isset($_POST['id']))&&(isset($_POST['submit']))) {
	
	$data= array ($_POST['country']);
	$id=$_POST['id'];
	$tmp->update_country($data,$id);
	$infoLogger->info('Country renamed by ', array('user'=>$_SERVER['SERVER_ADDR'], 'date'=>date('H:i:s d.m.Y'), 'new Country name'=>$_POST['country'] ) );
}
	include 'show_foreach_countries.php';
?>
