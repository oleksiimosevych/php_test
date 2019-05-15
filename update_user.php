<?php include 'menu.php'; include 'DBClass.php';?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<meta charset="utf8">
</head>
<body bgcolor="gold">
	<center>
	<form action='' method='POST'>
		<div id=#textbox>
			<?php
				if ((isset($_POST['name1']))&&(isset($_POST['user_id']))&&(isset($_POST['email']))&&(isset($_POST['country_id']))){
				$data= array ($_POST['name1'], $_POST['email'], $_POST['country_id']);			
				// print_r($data);
				$user_id=$_POST['user_id'];
				// echo "ID is ".$user_id." or "; print_r($user_id);
				$tmp->update_user($data, $user_id);
				$infoLogger->info('User data is updated by IP ', array('user'=>$_SERVER['SERVER_ADDR'], 'date'=>date('H:i:s at d.m.Y'), 'Date'=>array('new name'=>$_POST['name1'],'new email'=>$_POST['email'], 'new country_id'=>$_POST['country_id'],) ) );
			}else
			{echo 'oops. no data received';  }

			?>
			<input type='hidden' name='user_id' value="<?=$_POST['user_id']?>" ><?=$_POST['user_id']?></input>
			NAME</br>	<input type='text' name='name1' value="<?=$_POST['name1']?>" ></input></br>
			EMAIL</br> <input type='text' name='email' value="<?=$_POST['email']?>" ></input></br>
			
			RESELECT Country
			<br><br>
			<select name="country_id">
				<option name="country_id" value="<?=$_POST['country_id']?>"> select </option>
			<?php
				$countries =$tmp->review_countries();// 
			 	foreach($countries  as $country){
			        ?>
			        <option name="country_id" value="<?=$country['id']?>"> <?=$country['country']?> </option>

			        <?php
				}

				
			 	
		 	?>
			<input type='submit' name="submit" value='Update'></input>
		</div>
	</form>

<br> DESTROY|DELETE|ERASE<br><br>
	<form action='delete_user.php' method='POST'>
		<div>
			DESTROY <?=$_POST['name1']?> for now? </br>
			<input type='hidden' name='user_id' value="<?=$_POST['user_id']?>" ></input>
			<input type='hidden' name='name1' value="<?=$_POST['name1']?>" ></input></br>
			<input type='hidden' name='email' value="<?=$_POST['email']?>" ></input></br>
			<input type='submit' name="submit" value='DESTROY'></input>
		</div>
	</form>
<?php



include 'show_foreach_users.php';
?>
