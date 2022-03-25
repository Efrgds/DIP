<!DOCTYPE html>
<html lang="ru">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Регистрация</title>
	</head>
<?php 
  echo "<link rel='stylesheet' href='css/style.css'>"
?>

<body>

<div class="header">
        <div class="page-header">
            <div class="header-top clearfix">
              <a href="index.php"><img src="images/LOGO.jpg"alt="Логотип Discuss" width="7%"></a>
              <div class="men">
              <span><a href="login.php">Войти в систему</a></span >
	            <span><a href="vhod.php">Регистрация</a></span >
              
              <span><a href="lk.php"><img src="images/user.png" class="img"></a></span >
            </div></div>
        </div>
    </div>


<div class="container">
  <form class="" action="vhod.php" method="post" name="form">
		<div class="vhod">
      <h1>Регистрация</h1>
      <hr>
          <label for="name">Имя</label>
		  <input class="form-styling" type="text" name="name" placeholder=""/>
          <label for="email">Email</label>
          <input class="form-styling" type="text" name="email" placeholder=""/>
          <label for="password">Пароль</label>
          <input class="password" type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
		  title="Должен содержать хотя бы одно число и одину прописную и строчную букву и, 8 или более символов" required>
          <div id="message">
            <h3>Пароль должен содержать следующее:</h3>
            <p id="letter" class="invalid">Содержит строчные (a–z) буквы 
            <p id="capital" class="invalid">Содержит прописные буквы (A–Z)</p>
            <p id="number" class="invalid">Содержит по крайней мере одну цифру (0–9)</p>
            <p id="length" class="invalid">Минимум <b>8 символов</b></p>
           </div>
          <label for="confirmpassword">Повторите пароль</label>
          <input class="form-styling" type="text" name="confirmpassword" placeholder=""/> 
		  
		  <input class="submit" type="submit" name="submit" value="Зарегистрироваться">
		  <div class="container signin">
            <p>Уже есть учетная запись?&nbsp;<a href="login.php">Войти в систему</a>.</p>
        </div>
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// Когда пользователь нажимает на поле пароля, показать окно сообщения
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// Когда пользователь нажимает на за пределами поля пароля, скрыть окно сообщения
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// Когда пользователь начинает вводить что-то внутри поля пароля
myInput.onkeyup = function() {
  // Проверьте строчные буквы
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Проверка заглавных букв
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Проверка номеров
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Проверка длины
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

<?php require_once("dbconnect.php");
if(isset($_POST["name"])){$name = $_POST["name"];}
if(isset($_POST["email"])){$login = $_POST["email"];}
if(isset($_POST["password"])){$password = md5($_POST["password"]);}
if(isset($_POST["confirmpassword"])){$confirmpassword = md5($_POST["confirmpassword"]);}
if(isset($_POST["submit"])){$submit = $_POST["submit"];}
if(isset($submit)){
$result = mysqli_query($connect,"INSERT INTO user (login, password) VALUES ('$login','$password')");
if($result){
echo "<script>window.location = 'login.php';</script>";exit();}} else{echo "";}	
?>	
        </form>

    <script src="js/index.js"></script>	


</body>
</html>