<?php
	session_start();
	if(isset($_POST['username'])) {
		$username = $_POST['username'];
	}
	if(isset($_POST['password'])) {
		$password = $_POST['password'];
	}
	if(empty($username) or empty($password)) {
		include("index2.php");
		exit();
	}
	$username = stripslashes($username);
	$username = htmlspecialchars($username);
	$username = trim($username);
	$password = stripslashes($password);
	$password = htmlspecialchars($password);
	$password = trim($password);
	//$password = password_hash($password, PASSWORD_DEFAULT);
	$password = hash(md5, $password);
	include("BD.php");
	$prov = mysqli_query($link, "SELECT * FROM signup1 WHERE username='$username'");
    $row = mysqli_fetch_array($prov);
    if (empty($row['password'])){
    exit("Вы где-то ошиблись:(<a href='index2.php'> Вернуться назад<a>");
    }
    if ($row['password']==$password) {
    $_SESSION['username']=$row['username']; 
    $_SESSION['user_id']=$row['user_id'];
    include("Kabinet.html");
    } else {
    	print("Что-то пошло не так");
    }



