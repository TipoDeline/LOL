<?php
	require('DB.php');

	$data = $_POST;
	if (isset($data['do_signup'])) {
		//Проверки на мусор
		$errors = array();
		if(trim($data['username']) == '') {
			$errors[] = 'Введите логин';
		}
		if(($data['email']) == '') {
			$errors[] = 'Введите почту';
		}
		if(($data['password']) == '') {
			$errors[] = 'Введите пароль'; 
		}
		if($data['password2'] !== $data['password']) {
			$errors[] = 'Повторный пароль введён не верно!';
		}
		if(R:: count('users', "login = ? OR email = ?", array($data['username'], $data['email'])) > 0){
			$errors[] = 'Логин или почта уже были зарегестрированы!';
}
		if( empty($errors)){
			$user = R::dispense('users');
			$user->login = $data['username'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
			R::store($user);
			header('Location: index1.php');
			echo"Вы успешно зарегестрированы!";
		} else {
			echo "" .array_shift($errors);
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>
	<div class="input-group mb-3">
		<form method="post" action="index2.php" class="reg">
				<label>
					Придумайте логин: <input type="text" name="username" maxlength="55" value="<?php echo @$data['username']?>">
			    </label>
			    <label>
			    	Введите вашу почту: <input type="email" name="email" value="<?php echo @$data['email'] ?>">
			    </label>	 
				<label>
					Введите ваш пароль: <input type="password" name="password" maxlength="32" value="<?php echo @$data['password'] ?>">
			    </label>
			    <label>
			    	Повторите пароль: <input type="password" name="password2" maxlength="32" value="<?php @$data['password2'] ?>">
			    </label>
			    	<input type="submit" name="do_signup" value="Зарегестрироваться" class="btn btn-success">
			    	<a href="index1.php" class="btn btn-secondary">Назад</a>
		</form>					
	</div>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>