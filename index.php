<!DOCTYPE html>
<html lang="ru">
	<head><link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php echo "<link rel='stylesheet' href='css/index.css'>"?>
</head>
<body>

<div class="header"><div class="page-header"><div class="header-top clearfix">
	<a href="index.php"><img src="images/LOGO.jpg"alt="Логотип Discuss" width="7%"></a>
       <span  class="bg-light border"><a href="login.php">Войти в систему</a></span >
	   <span  class="bg-light border"><a href="vhod.php">Регистрация</a></span >
</div></div></div>
 

<div class="slideshow-container">

  <!-- Полная ширина изображения с номером и текстом подписи -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="3.jpg" style="height: 500px">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="2.jpg" style="height: 500px">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="3.jpg" style="height: 500px">
  </div>

  <!--Далее и предыдущие кнопки-->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!--Точки / круги -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
	var slideIndex = 1;
showSlides(slideIndex);

// Следующий / предыдущий контроль
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Миниатюра управления изображениями
function currentSlide(n) {
  showSlides(slideIndex = n);}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


<hr>
<footer>
		<div id="footer">
			<div id="sitemap">
				<h3>Разделы</h3>
                    <div>				
					<a href="lk.php">Личный кабинет</a>
					<a href="poisk.php">Поиск</a>
					</div>
			</div>

			</div>
		</div>
		<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
	</footer>

</body>
</html>





