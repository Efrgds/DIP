<!DOCTYPE html>
<html>
	<head>
		
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Авторизация</title>
	</head>
<?php echo "<link rel='stylesheet' href='css/style.css'>"?>
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
  <form class="form" action="login.php" method="post" name="form">
    <div class="vhod">
      <h1>Вход</h1>
      <hr>
	      <label for="login">Логин</label>
        <input class="form-styling" type="text" name="login" placeholder=""/>
        <label for="password">Пароль</label>
        <input class="form-styling" type="text" name="password" placeholder=""/>
        <input class="submit" type="submit" name="submit" value="Войти">
        <div class="container signin">
            <p>Впервые пользуетесь Discuss?&nbsp;<a href="vhod.php">Бесплатная регистрация</a></p>
        </div>

      <?php
      require_once("dbconnect.php");
      if(isset($_POST["login"])){ $login = $_POST["login"]; }
      if(isset($_POST["password"])){ $password = md5($_POST["password"]); }
      if(isset($_POST["submit"])){ $submit = $_POST["submit"]; }
      if(isset($submit)){
        $result = mysqli_query($connect, "SELECT * FROM user WHERE login = '$login' AND password = '$password'"); 
        if(mysqli_num_rows($result)<1)
	        {echo"Неправильный логин или пароль";}
    	    else{
    	      $_SESSION['login'] = $login;
    	      $_SESSION['password'] = $password;
    	      echo"Авторизация прошла успешно!<script>window.location = 'lk.php';</script>";}
          	}else{
    	            echo"";} ?>
  </form>
</div>
     <script src="js/index.js"></script>

</body>
</html>