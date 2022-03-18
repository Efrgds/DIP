<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title></title>
<?php echo "<link rel='stylesheet' href='css/poisk.css'>"?>
</head>
<body>
<div class="header"><div class="page-header"><div class="header-top clearfix">
	<a href="index.php"><img src="LOGO.jpg"alt="Логотип Discuss" width="7%"></a>
       <span  class="bg-light border"><a href="login.php">Войти в систему</a></span >
	   <span  class="bg-light border"><a href="vhod.php">Регистрация</a></span >
</div></div></div>
<center>
<form>
<div class="content">
<div>
<div class="form-item form-type-textfield form-item-name">
  <label for="edit-name">ФИО автора или научного руководителя: </label><br>
 <input placeholder="Введите ФИО" type="text" id="edit-name" name="name" value="" size="20" maxlength="128" class="form-text" />
</div>
<div class="form-item form-type-textfield form-item-title">
  <label for="edit-title">Название статьи: </label><br>
 <input placeholder="Введите название статьи" type="text" id="edit-title" name="title" value="" size="20" maxlength="512" class="form-text" />
</div>
 <div class="form-group">
    <label for="exampleFormControlSelect1">Наука:</label><br>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Информационные технологии</option>
      <option>Культурология</option>
      <option>Математика</option>
      <option>Библиотечные системы</option>
      <option>Информационная безопасность</option>
    </select>
  </div><br>
    <div class="form-group row">
      <button type="submit" class="btn btn-primary">Найти</button>
    </div>
  </div></center>
  <?php
  
  
  
  
  ?>
  
  
</form>







  
 </body>
</html>
