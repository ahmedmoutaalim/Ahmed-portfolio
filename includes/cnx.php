<?php
$dsn='mysql:host=sql309.eb2a.com;dbname=eb2a_27006632_portfolio';

$user='eb2a_27006632';

$pass='12345678';

 try {
 
	$pdo = new PDO($dsn , $user , $pass);

 } catch ( Exception $e) {

	echo 'faild : ' . $e->getMessage();
 }


  //host:sql108.eb2a.com
 //db:eb2a_26891220_portfolio
 //user:eb2a_26891220
 //123123