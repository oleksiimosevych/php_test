<?php

	$table =$tmp->review_users();
	echo "<div class='users'>User: ";
	    foreach($table  as $tab){
	    	echo "{$tab['name']} <a href='update_user.php'>Update</a>
			  <div class='text'>{$tab['email']}COUNTRY: {$tab['country']}</div><br>
			  <a href='add.php'>Add one more user</a></div>";
		}
		//endforeach;
?>