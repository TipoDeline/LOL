<?php
require('DB.php');

$data = $_POST;
	if(isset($data['do_login'])) {
		$errors = array();
		$user = R::findOne('users', 'login = ?', array($data['username']));
		if($user){
			if(password_verify($data['password'], $user->password)) {
				$_SESSION['logged_user'] = $user;
				header('Location: Kabinet.html');
				echo "Вы успешно вошли!";

			} else{
				$errors[] = '<p>Логин или пароль не верный</p>';
			}
		}else{
			$errors[] = '<p>Логин или пароль не верный</p>';
		}
		if( !empty($errors)){
			echo "" . array_shift($errors);
		} 	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Вход</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>
	<div class="input-group mb-3">
<form action="index1.php" method="POST" class="form-signin, reg" id="Panel_Bxoda">
	<label>Ваше имя:<br> <input type="text" name="username" maxlenght="55"></label>
	<label>Введите пароль: <input type="password" name="password" maxlength="32"></label>
	<input type="submit" name="do_login" value="Войти" class="btn btn-primary">
	<a href="index2.php" class="btn btn-success">Зарегаться</a>

	<a 
</form>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>