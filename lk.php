<!DOCTYPE html>
<html lang="ru">
	<head>
		
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php echo "<link rel='stylesheet' href='css/index.css'>"?>

</head>
<body>
    <div class="header">
        <div class="page-header">
            <div class="header-top clearfix">
                <a href="index.php"><img src="LOGO.jpg"alt="Логотип Discuss" width="7%"></a>
                <span  class="bg-light border"><a href="login.php">Войти в систему</a></span >
	            <span  class="bg-light border"><a href="vhod.php">Регистрация</a></span >
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tab">
            <button class="tablinks" onclick="openMenu(event, 'Profile')">Профиль</button>
            <button class="tablinks" onclick="openMenu(event, 'Load')">Загрузка файлов</button>
            <button class="tablinks" onclick="openMenu(event, 'Help')">Поддержка</button>
        </div>

        
            <div id="Profile" class="tabcontent"></div>
            <h3>Профиль</h3>
            <div class="photo">
                <a href="images/user.png" target="_blank"><img src="user.png"></a>
                <form action="/accept.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="photo" multiple accept="image/*,image/jpeg"><br> 
                    <input type="submit" value="Загрузить"><br>
                </form>
                <form>
                    <label for="name">Имя</label><br>
                    <input class="form-styling" type="text" name="name" placeholder=""/>
                    <label for="id_group">Номер группы</label><br>
                    <input class="form-styling" type="text" name="id_droup" placeholder=""/>
                    <label for="email">Email</label><br>
                    <input class="form-styling" type="text" name="email" placeholder=""/>
                    <label for="password">Пароль</label><br>
                    <input class="form-styling" type="text" name="password" placeholder=""/>
                    <label for="confirmpassword">Повторите пароль</label><br>
	        	    <input type="submit" value="Сохранить">
                </form>
            </div>
            
            
            <div id="Load" class="tabcontent">
                <h3>Загрузка файлов</h3>
                <form enctype="multipart/form-data" method="post">
                    <p>Загрузите ваши файлы на сервер</p>
                    <p><form method='post' action="file.php" enctype="multipart/form-data">
                        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                        <input type='file' name='file[]' class='file-drop' id='file-drop' multiple required>
                        <input type="submit" value="Отправить"></p>
                </form>
            </div>    
                
            <div id="Help" class="tabcontent">
                <h3>Поддержка</h3>
                <p></p>
            </div>
         </div>



         <script src="js/lk.js"></script>	  



