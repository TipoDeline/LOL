<?php 
 	// Выполняется проверка полей и ввод данных в переменные
 	if (isset($_POST['Name'])) {
 		$Name = ['Name'];
 		if(empty($name)) { //В случае пустого значения поля, данные переменной стераются.
 			unset($name);
 		}
 	} else {
 		print ('Error line 2-6');
 		exit();
 	}
 	if (isset($_POST['Familya'])) {
 		$Familya = ['Familya'];
 		if (empty($familya)) {
 			unset($familya);
 		}
 	} else {
 		print ('Error line 10-14');
 		exit();
 	}
 	if (isset($_POST['DataR'])) {
 		$DataR = ['DataR'];
 		if (empty($DataR)) {
 			unset($DataR);
 		}  
 	} else {
 		print ('Error line 18-22');
 		exit();
 	}
 	if (isset($_POST['Email'])) {
 		$Email = ['Email'];
 		if (empty($Email)) {
 			unset($Email);
 		}
 	} else {
 		print ('Error line 29-33');
 		exit();
 	}
 	if (isset($_POST['Inform'])) {
 		$Inform = ['Inform'];
 		if (empty($Inform)) {
 			unset($Inform);
 		}
 	} else {
 		print ('Error line 38-42');
 		exit();
 	}
 	if (isset($_POST['Adress'])) {
 		$Adress = ['Adress'];
 		if(empty($Adress)) {
 			unset($Adress);
 		}
 	} else {
 		print ('Error line 47-51');
 		exit();
 	}
 //Очистка полей от спец.символов и тегов
 	$Name = htmlspecialchars($Name);
 	$Name = stripcslashes($Name);
 	$Familya = htmlspecialchars($Familya);
 	$Familya = stripcslashes($Familya);
 	$DataR = htmlspecialchars($DataR);
 	$DataR = stripslashes($DataR);
 	$Email = htmlspecialchars($Email);
 	$Email = stripcslashes($Email);
 	$Inform = htmlspecialchars($Inform);
 	$Inform = stripslashes($Inform);
 	$Adress = htmlspecialchars($Adress);
 	$Adress = stripcslashes($Adress);
 //Шифрование важных данных
 	$Email = hash(md5, $Email);
 	$Inform = hash(md5, $Inform);
 	$Adress = hash(md5, $Adress);
 //Подлкючение к БД
 	include('BD.php');
 //Проверка данных почты, если такая почта уже есть в БД, то будет выдано сообщение об отказе		
	$proverka = mysqli_query($link, "SELECT user_id FROM kab WHERE Email = '$Email'");
	$proverka2 = mysqli_fetch_array($proverka);
	if (!empty($proverka['user_id'])) {
		exit('Такая уже почта зарегестрирована!<a href="Kabinet.html">Вернуться назад</a>');
	}
//Внос данных БД
	$Bnos = msqli_query($link, "INSERT INTO kab (Name, Familya, DataR, Email, Inform, Adress) VALUES ('$Name', '$Familya', '$DataR', '$Email', '$Inform', '$Adress')");
	if ($Bnos == 'TRUE') {
		print ('Данные успешно сохранены');
		include ('Kabinet.html');
	} else {
		print ('Что-то пошло не так<a href="Kabinet.html">Вернуться назад</a>');
	}

