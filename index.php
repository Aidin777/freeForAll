<!DOCTYPE html>
<?php
	require ('bd_model.php');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Список статей1</title>
</head>
<body>
<?php
select_all();
?>

<a href="inde.php">Список статей</a>
<a href="add.php">Добавить статью</a>
<a href="delete.php">Удалить статью</a>
<a href="article.php">Одна статья</a>
<a href="edit.php">Редактировать статью</a>
</body>
</html>