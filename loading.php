<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Загрузка файла</title>
<?php echo "<link rel='stylesheet' href='css/loading.css'>"?>
</head>


<body>
<div class="header"><div class="page-header"><div class="header-top clearfix">
	<a href="index.php"><img src="images/LOGO.jpg"alt="Логотип Discuss" width="7%"></a>
       <span  class="bg-light border"><a href="login.php">Войти в систему</a></span >
	   <span  class="bg-light border"><a href="vhod.php">Регистрация</a></span >
</div></div></div>
	   <form enctype="multipart/form-data" method="post">
   <p>Загрузите ваши файлы на сервер</p>
   <p><form method='post' action="file.php" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
<input type='file' name='file[]' class='file-drop' id='file-drop' multiple required>
<input type="submit" value="Отправить"></p>
</form>
<div class='message-div message-div_hidden' id='message-div'></div>




</body>
</html>