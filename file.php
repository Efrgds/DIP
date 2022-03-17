<?php
if(isset($_FILES)) {
$allowedTypes = array('image/jpeg','image/png','image/gif');
$uploadDir = "files/"; 
for($i = 0; $i < count($_FILES['file']['name']); $i++) { 
$uploadFile[$i] = $uploadDir . basename($_FILES['file']['name'][$i]);
$fileChecked[$i] = false;
echo $_FILES['file']['name'][$i]." | ".$_FILES['file']['type'][$i]." — ";
for($j = 0; $j < count($allowedTypes); $j++) { 
if($_FILES['file']['type'][$i] == $allowedTypes[$j]) {
$fileChecked[$i] = true;
break;
}
}
if($fileChecked[$i]) { 
if(move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadFile[$i])) {
echo "Успешно загружен <br>";
} else {
echo "Ошибка ".$_FILES['file']['error'][$i]."<br>";
}
} else {
echo "Недопустимый формат <br>";
}
}
} else {
echo "Вы не прислали файл!" ;
}
?>
