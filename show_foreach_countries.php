<?php
	$table =$tmp->review_countries();
	echo "<div class='user'>Countries: <br>";       
    foreach($table  as $tab){
?>
    	<form action='update_country.php' method='POST'>
	
	<div id=#textbox>
	Country: </br>	<input type='hidden' name='country' value="<?=$tab['country']?>" ></input>
	<input type='hidden' name='id' value="<?=$tab['id']?>" ></input>
	<?=$tab['country']?></br>
	
	<input type='submit' name="submit" value='Update'></input></div>
</form>
<?php
    	// echo "Country: {$tab['country']} <a href='update_country.php?'>Update</a><br>|<br>";		  
	}
?>