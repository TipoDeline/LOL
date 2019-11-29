<?php
	if(isset($_POST['username'])){   //Если есть поле с именем username, то выполняется 1 блок кода 
		$username = $_POST['username']; 
		if($username == ''){
			unset($username);
		}
	} else {//Если в коде появиться ошибка, он выполнит второй блок кода
		print("Error line 2-7");
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
		if($password == ''){
			unset($password);
		}		
	} 
	if(isset($_POST['password2'])){
		$password2 = $_POST['password2'];
		if($password2 == '' || $password2 !== $password){
			unset($password2);
		}
	} 
	if(empty($username) or empty($password) or empty($password2)){
		exit ("Провертье правильность веденых данных<a href='index2.php' class='btn btn-secondary'> Назад</a>");
	}
$username = stripslashes($username);
$username = htmlspecialchars($username);
$username = trim($username);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$password = trim($password);
$password2 = stripslashes($password2);
$password2 = htmlspecialchars($password2);
$password2 = trim($password2);
$password = hash(md5, $password);
//Подключаемся к БД
include("BD.php");
//Делаем проверку на повторные данные
$prov = mysqli_query($link, "SELECT user_id FROM signup1 WHERE username = '$username'");
$row = mysqli_fetch_array($prov);
if (!empty($row['user_id'])) {
	exit ("Такое имя уже есть, введите другое<a href='index2.php' class='btn btn-secondary'> Назад</a>");
}
$prov2 = mysqli_query($link, "INSERT INTO signup1 (username, password) VALUES ('$username', '$password')");
if($prov2 == 'TRUE'){
	print ("Вы успешно зареганы!<br> <a class='perehod' href='index2.php'>Вход</a>"); 
}
else {
	print ("Что-то пошло не так:( <a href='index2.php' class='btn btn-secondary'> Назад</a>");
}
