<?php

	$users =$tmp->review_users();
	echo "<div class='users'>User: ";
	
	foreach($users  as $user){
?>
	    <form action='update_user.php' method='POST'>
		
		<div id=#textbox>
			Usr name: <input type='hidden' name='name1' value="<?=$user['name']?>" ><?=$user['name']?></input>
			<br>
			Usr email: <input type='hidden' name='email' value="<?=$user['email']?>" ><?=$user['email']?></input>
			<input type='hidden' name='country_id' value="<?=$user['country_id']?>" ></input>
			<br>	
			Country:  <input type='hidden' name='country' value="<?=$user['country']?>" ><?=$user['country']?></input>
			<br>	
			<input type='hidden' name='user_id' value="<?=$user['user_id']?>" ></input>
			<nobr>
			<input type='submit' name="submit" value='Update'></input>
		</div>
	</form>
<?php
    	// echo "Country: {$tab['country']} <a href='update_country.php?'>Update</a><br>|<br>";		  
	}
?>