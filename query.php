<!DOCTYPE html>
<html>
	<head>
		
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
		<title></title>
		<link rel="stylesheet" href="style.css" type="text/css" />	
		<link rel="stylesheet" href="css/styles.css" type="text/css">
		<style type="text/css">
      <?php 
      include "styleNe.css" 
      ?>
  </style>
	</head>
	<body>		

<div id="heading">
	<h1>Вход</h1>
</div>
	<center>
	<form action="query.php" method="post" name="l_form" >	
        <div class="form-item form-type-textfield form-item-name">
            <label for="edit-name">ФИО автора или научного руководителя: </label><br>
            <input placeholder="Введите ФИО" type="text" id="edit-name" name="name" value="" size="20" maxlength="128" class="form-text" />
        </div>
        <div class="form-item form-type-textfield form-item-title">
             <label for="edit-title">Название статьи: </label><br>
             <input placeholder="Введите название статьи" type="text" id="edit-title" name="title" value="" size="20" maxlength="512" class="form-text" />
        </div>
        <input type="submit" name="l_send" value="Ввод" />



<?php
require_once("php/dbconnect.php");
if(isset($_POST["name"])){ $name = $_POST["name"]; }
if(isset($_POST["title"])){ $name = $_POST["title"]; }
if(isset($_POST["doc"])){ $name = $_POST["doc"]; }
if(isset($_POST["l_send"])){ $l_send = $_POST["l_send"]; }
if(isset($l_send)){
$result = mysqli_query($connect, "SELECT * FROM file WHERE name like '$name'") or die ( "Error : ".mysqli_error() ); 
//Печатаем содержимое таблицы
if(mysqli_num_rows($result)<1)
{echo"Нет данных";}
else{
$_SESSION['name'] = $name;
echo"Результаты запроса";
}
	if($result)
{
	$numrows = mysqli_num_rows($result);
			echo "<br>";	echo "doc";		echo "<br>";	
	for ($i=0; $i<$numrows; ++$i)
{	
	$row = mysqli_fetch_array($result);
				//echo "{$row["title"]}";
    $a = $row['title'];
            echo "<br>";echo "$a";
            echo "<br>";
    $b = $row['doc'];
            echo "<br>";echo "$b";echo "<br>";
}
    // очищаем результат
    mysqli_free_result($result);
}
    mysqli_close($connect);
}else{
echo"нет данных для обработки";
}
?>
    </form>
</center>
</body>
</html>