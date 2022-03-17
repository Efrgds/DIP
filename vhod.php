<!DOCTYPE html>
<html lang="ru">
	<head>
		
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Регистрация</title>
	</head>
<?php echo "<link rel='stylesheet' href='css/style.css'>"?>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<div class="container">
  <div class="frame">
    <div class="nav">
        <ul class="links">
			<li class="signin-active"><a href="login.php" class="bth">Авторизация</a></li>
			<li class="signup-inactive"><a href="vhod.php" class="bth">Регистрация</a></li>
		</ul>
	</div>
<div ng-app ng-init="checked = false">
	<form class="" action="login.php" method="post" name="form">
          <label for="name">Имя</label>
		  <input class="form-styling" type="text" name="name" placeholder=""/>
          <label for="email">Email</label>
          <input class="form-styling" type="text" name="email" placeholder=""/>
          <label for="password">Пароль</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <label for="confirmpassword">Повторите пароль</label>
          <input class="form-styling" type="text" name="confirmpassword" placeholder=""/> 
		  <label for="id_group">Доступ</label><input class="form-styling" type="text" name="fullname" placeholder=""/>
          <a ng-click="checked = !checked" class="btn-signup" type="submit">Зарегистрироваться</a>
		  
<?php require_once("php/dbconnect.php");
if(isset($_POST["name"])){$name = $_POST["name"];}
if(isset($_POST["email"])){$login = $_POST["email"];}
if(isset($_POST["access"])){$login = $_POST["access"];} 
if(isset($_POST["password"])){$password = md5($_POST["password"]);}
if(isset($_POST["confirmpassword"])){$confirmpassword = md5($_POST["confirmpassword"]);}
if(isset($_POST["submit"])){$submit = $_POST["submit"];}
if(isset($submit)){
$result = mysqli_query($connect,"INSERT INTO user (name, access, email, password, confirmpassword ) VALUES ('$name','$access','email','$password','$confirmpassword')") or die ("Error " .mysqli_error() );
if($result){
echo "Регистрация завершена <a href='index.php'> главная страница </a>";exit();}} else{echo "заполните поля";}?>	
		
</form>
   <div  class="success">
              <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                 <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
                  c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
                  c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
                
             </div>
      </div>
<div class="forgot">
        <a href="#">Forgot your password?</a>
      </div>
      

  </div>
    
  <a id="refresh" value="Refresh" onClick="history.go()">
    <svg class="refreshicon"   version="1.1" id="Capa_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;"
         xml:space="preserve">
         <path  d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224
                c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5
                c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5
                c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025
                c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614
                l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z"/>
    </svg>
  </a>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>

    <script src="js/index.js"></script>	  
</body>
</html>