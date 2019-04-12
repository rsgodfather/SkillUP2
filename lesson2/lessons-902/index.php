<?php ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>JavaScript</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<form method="post" action="action.php">
		<div class="row">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>">
			<?= !empty($errors['email']) ? $errors['email'] : '' ?>
		</div>

		<div class="row">
			<label for="password">Пароль</label>
			<input type="password" name="password" id="password">
			<?= !empty($errors['password']) ? $errors['password'] : '' ?>
		</div>

		<div class="row">
			<label for="passwordConfirmation">Подтверждение пароля</label>
			<input type="password" name="passwordConfirmation" id="passwordConfirmation">
			<?= !empty($errors['passwordConfirmation']) ? $errors['passwordConfirmation'] : '' ?>
		</div>

		<button>Зарегистрироваться</button>
	</form>
</body>

</html>

