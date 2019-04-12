<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

/* вариант для маленьких проектов
require_once __DIR__ . '/classes/Form.php';
require_once __DIR__ . '/classes/FormField.php';
require_once __DIR__ . '/classes/InputFormField.php';
*/

spl_autoload_register(function ($name) {
	require __DIR__ . '/classes/' . $name . '.php';
});

Registry::getInstance()->setFormElementClass('form-control');

$form = new Form('post', 'form.php');
$email = new InputFormField('email', 'Email');
$email->addValidator(new \Form\Validators\EmptyValidator());
$email->addValidator(new EmailValidator());
$form->addField($email);

$firstName = new InputFormField('firstName', 'Имя');
$firstName->addValidator(new EmptyValidator());
$form->addField($firstName);

$form->addField(new PasswordFormField('password', 'Пароль'));
$form->addField(new PasswordFormField('passwordConfirmation', 'Подтверждение пароля'));
$form->addField(new FormButton('Зарегистрироваться'));
$form->processRequest();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<h2>Classes</h2>
	<?= $form->render() ?>
	<hr>
	<h2>HTML</h2>
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

