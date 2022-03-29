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
                <a href="index.php"><img src="images/LOGO.jpg"alt="Логотип Discuss" width="7%"></a>
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

          
         <div id="Profile" class=" tabcontent">
            <h3>Профиль</h3>
            <div class="photo" id="photo">
                <div class="">
                <a href="images/user.png" target="_blank"><img src="images/user.png"></a>
                <a href="#openModal">Выбрать аватар</a>
                <div id="openModal" class="modal">
                    <div>
                        <p class="ava">Выберете аватар</p><hr>
                        <a href="#close" title="Закрыть" class="close">X</a>
                        <a href="" class="r"><img src="https://bootstraptema.ru/snippets/icons/2017/smtb/elliot.jpg" class="img-responsive" alt="SMTB иконка 1" /></a>
                        <a href="" class="r"><img src="https://bootstraptema.ru/snippets/icons/2017/smtb/elyse.png" class="img-responsive" alt="SMTB иконка 2" /></a>
                        <a href="" class="r"><img src="https://bootstraptema.ru/snippets/icons/2017/smtb/helen.jpg" class="img-responsive" alt="SMTB иконка 3" /></a>
                        <a href="" class="r"><img src="https://bootstraptema.ru/snippets/icons/2017/smtb/jenny.jpg" class="img-responsive" alt="SMTB иконка 4" /></a>
                        <a href="" class="r"><img src="https://bootstraptema.ru/snippets/icons/2017/smtb/matthew.png" class="img-responsive" alt="SMTB иконка 5" /></a>
                        <a href="" class="r"><img src="https://bootstraptema.ru/snippets/icons/2017/smtb/molly.png" class="img-responsive" alt="SMTB иконка 6" /></a>
                        <a href="" class="r"><img src="https://bootstraptema.ru/snippets/icons/2017/smtb/steve.jpg" class="img-responsive" alt="SMTB иконка 7" /></a>
                        <a href="" class="r"><img src="https://bootstraptema.ru/snippets/icons/2017/smtb/stevie.jpg" class="img-responsive" alt="SMTB иконка 8" /></a>
                        <a href="" class="r"><img src="https://bootstraptema.ru/snippets/icons/2017/smtb/veronika.jpg" class="img-responsive" alt="SMTB иконка 9" /></a>
                    </div>
                </div>  


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
                <p>Tokyo is the capital of Japan.</p>
            </div>
         </div>



         <script src="js/lk.js"></script>	
         
    

         <style>
	.modal {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		display: none;
		pointer-events: none;
	}

	.modal:target {
		display: block;
		pointer-events: auto;
	}

	.modal > div {
		width: 50%;
		height: 60%;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #fff;
	}
    .ava{
        text-align: center;
    }
	.close {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}
            
        .r {
		background: #737373;
    float: left;
    position: relative;
    width: 30%;
    padding-bottom: 30%;
    margin: 1.66%;  
		}
		.r:hover {
		background: black;
		}
		.r img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
		
		
		
		
	.close:hover { background: #00d9ff; }
	</style>
