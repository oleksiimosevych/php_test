<?php include 'menu.php'; include 'DBClass.php';?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<meta charset="utf8">
	</head>
	<body bgcolor="gold">
	<center>
	<form action='' method='POST'>
	
	<div id=#textbox>
	COUNTRIES</br></br> <input type='text' name='country' value="<?=$_POST['country']?>" ></input></br>
	
	 
	<input type='submit' name="submit" value='Add your Country'></input></div>
</form>
<?php

$data= array ($_POST['country']);

$tmp->insert_country($data);

$table =$tmp->review_countries();
echo "<div class='diary'>Countries: ";
        foreach($table  as $tab){
          echo "{$tab['country']} <a href='update_country.php'>Update</a><br>";
		  
		}
		//endforeach;
?>