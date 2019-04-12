<?php
$db = new PDO('msql:host=localhost;dbname=usera' ,'usera', 'usera', [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
]);gi

$sql = 'SELECT id, first_name, last_name, email FROM usersPHP-Storm(Test) ORDER BY last_name';
$result = $db->query($sql);
var_dump($db->errorInfo());
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JavaScript</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>LAstName</th>
        <th>Email</th>
    </tr>
<?php foreach ($result as $row): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['firs_name'] ?></td>
    <td><?= $row['last_name'] ?></td>
    <td><?= $row['email'] ?></td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>

