<?php include 'menu.php'; include 'DBClass.php';?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<meta charset="utf8">
	</head>
	<body bgcolor="gold">
	<center>
	<form action='' method='POST'>
	
	<div id=#textbox>
	USER name</br> <input type='text' name='name1' value="<?=$_POST['name1']?>" ></input></br>
	email</br> <input type='text' name='email' value="<?=$_POST['email']?>" ></input></br>
	
	choose country:</br> 
	<select name="country_id">
	<?php
	 	$table1 =$tmp->review_countries(); 
	 	foreach($table1  as $tab1){
	        ?>
	        <option name="country_id" value="<?=$tab1['id']?>"> <?=$tab1['country']?> </option>

	        <?php
		}
 	?>
	</select>	
	 
	<input type='submit' name="submit" value='Register new user'></input></div>
</form>
<?php

$data= array ($_POST['name1'],$_POST['email'],$_POST['country_id']);
if (isset($data)){
	echo '<h1>OK';
	$tmp->insert_user($data);
}

?>