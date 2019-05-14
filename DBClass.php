<!doctype html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8">
	<meta http-equiv="Content-Type" content="text/css; charset=utf8">
		<meta charset="utf8">
	</head>
	<body>
	
	<center>
<?php

//дозволяють додавати, видаляти, оновлювати та  переглядати список користувачів

Class DBClass
{
	protected $pdo;
	public function __construct(){
        $dbhost = "localhost";$dbname = "all_users";$dbuser = "root";
		$dbpassword = "Ass222Ass222";
		$dsn = "mysql:host=$dbhost;dbname=$dbname";
		$opt = array(PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
		$this->pdo = new PDO($dsn, $dbuser, $dbpassword, $opt);
		$this->pdo ->query("SET NAMES utf8");
	}

	public function review_countries(){
		$result = $this->pdo->query('SELECT id, country FROM countries');
		$tmp= $result->fetchAll(PDO::FETCH_ASSOC);
		 return $tmp;
	}

	public function review_users(){
		$result = $this->pdo->query('SELECT u.name, u.email, u.country_id, c.country FROM users u left join countries c on u.country_id=c.id');
		$tmp= $result->fetchAll(PDO::FETCH_ASSOC);
		 return $tmp;
	}
	//оновлювати 
	public function update_user($data, $id){//, $bindP, $getP){
		$stmt = $this->pdo->prepare("update users set id=?, name=?, email=?, country_id=? WHERE id= ".$id);
        //$stmt->bindParam($bindP, $getP);
		$stmt->execute($data);//, $bindP, $getP);
	}
	//видаляти
	public function delete_user($id ){
		$stmt = $this->pdo->prepare('Delete FROM users WHERE id = '.$id);
        $stmt->execute();
	}

	//додавати
	public function insert_user($data){
		$shml = $this->pdo->prepare("INSERT INTO users(name,email,country_id) VALUES (?,?,?)");
		$shml->execute($data);
	}
	public function insert_country($data){
		$shml = $this->pdo->prepare("INSERT INTO countries(country) VALUES (?)");
		$shml->execute($data);
	}

	public function insert_country_into_user($country_data){
		$shml = $this->pdo->prepare("INSERT INTO users(country_id) VALUES (?)");
	}



}

$tmp= new DBClass();

?>
