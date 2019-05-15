<?php include 'menu.php'; include 'DBClass.php';?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<meta charset="utf8">
	</head>
	<body bgcolor="gold">
	<center>
	<form action='' method='POST'>
	
	<div id=#textbox>
	NAME</br>	<input type='text' name='name1' value="<?=$tab['name']?>" ></input></br>
	EMAIL</br> <input type='text' name='email' value="<?=$tab['email']?>" ></input></br>
	SELECT NEW Country
	<select name="country_id">
	<?php
	 	$table1 =$tmp->review_countries();// 
	 	foreach($table1  as $tab){
	        ?>
	        <option name="country_id" value="<?=$tab['id']?>"> <?=$tab['country']?> </option>

	        <?php
		}
 	?>
	<input type='submit' name="submit" value='Update'></input></div>
</form>
<?php

$data= array ($_POST['name'],$_POST['email'],$_POST['country_id']);
$id=$_POST['id'];
$tmp->update_user($data,$id);

$table =$tmp->review_users();
echo "<div class='users'>User: ";
        foreach($table  as $tab){
          echo "{$tab['name']} <a href='update_user.php'>Update</a>
		  <div class='text'>{$tab['email']}COUNTRY: {$tab['country']}</div><br>
		  <a href='add.php'>Add one more user</a></div>";
		  
		}
		//endforeach;
?>
