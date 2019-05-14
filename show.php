<?php include 'menu.php'; include 'DBClass.php';?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<meta charset="utf8">
	</head>
	<body bgcolor="gold">
	<center>
<?php
$table =$tmp->review_users();
echo "<div class='user'>Users: ";
echo "<div class='text'>Details:<br> ";
       
        foreach($table  as $tab){
          echo "NAME: {$tab['name']} <a href='update_user.php'>Update</a>
		  <br>MAIL: {$tab['email']}<br>country: {$tab['country']}
		 <br><a href='add.php'>ADD new USER</a><br><br>";
		  
		}
		
?>