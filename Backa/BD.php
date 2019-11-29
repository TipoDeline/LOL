<?php
	$link = mysqli_connect('localhost', 'root', '', 'lun');//Подключение к БД
	if($link == false){		//Скрипт для проверки подключения к БД
	print ("Ошибка при подключении к БД");	
	}
	
	