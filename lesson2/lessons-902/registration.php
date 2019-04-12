<?php

require_once __DIR__ . '/classes/Form.php';

$form = new Form('post', 'action.php');

$formGet = new Form('get', 'action.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Form class</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<?= $form->render() ?>

	<?= $formGet->render() ?>

</body>
</html>
