<!DOCTYPE HTML>
<html>
<head>
	<title>BikeStore</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="slider.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
	<body>
		<div class="wrap">
			<div class="header">
				<div class="logo">
					<img src="1.jpg">
				</div>
				<div class="search">
					<form>
						<input type="text">
						<input type="submit" value="search">
					</form>
				</div>
			</div>

			<nav>
				<a class="nav1" href="">BIKES & FRAMES</a>
				<a class="nav1" href="">BAKE PARTS</a>
				<a class="nav1" href="">TIRES & TUBES</a>
				<a class="nav1" href=""> SHOES & PEDALS</a>
				<a class="nav1" href="">CLOTHING</a>
				<a class="nav1" href="">HELMETS</a>
				<a class="nav1" href="">ACCESSORIES</a>
			</nav>

			<div class="slider">
				<ul>
					<li><img src="11.jpg" alt=""></li>
					<li><img src="12.jpg" alt=""></li>
					<li><img src="13.jpg" alt=""></li>
					<li><img src="14.jpg" alt=""></li>
					<li><img src="15.jpg" alt=""></li>
				</ul>
			</div>

			<div class="news">
				<div class="left">
					<img class="img" src="21.png">
					<a href="">Brakes</a>
					<img class="img" src="22.png">
					<a href="">Drive Train</a>
					<img class="img" src="23.png">
					<a href="">Forks</a>
					<img class="img" src="24.png">
					<a href="">Handlebars</a>
					<img class="img" src="25.png">
					<a href="">Saddles</a>
					<img class="img" src="26.png">
					<a href="">Seatposts</a>
					<img class="img" src="27.png">
					<a href="">Stems</a>
					<img class="img" src="28.png">
					<a href="">Tires</a>
					<img class="img" src="29.png">
					<a href="">Wheels</a>
				</div>

				<div class="right">
					<span>BRANDS</span>

					<hr>

					<ul class="list">
						<li>Lorem ipsum</li>
						<li>Dolor sit amet conse</li>
						<li>Ctetur adipisicing</li>
						<li>Eiusmod</li>
						<li>Tempor</li>
						<li>Incididunt ut</li>
						<li>Labore et dolore</li>
						<li>Magna</li>
					</ul>
				</div>
			</div>

			<script type="text/javascript">
				$(document).ready(function() {
				 $(".slider").each(function () { // обрабатываем каждый слайдер
				  var obj = $(this);
				  $(obj).append("<div class='nav'></div>");
				  $(obj).find("li").each(function () {
				   $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>"); // добавляем блок навигации
				   $(this).addClass("slider"+$(this).index());
				  });
				  $(obj).find("span").first().addClass("on"); // делаем активным первый элемент меню
				 });
				});
				function sliderJS (obj, sl) { // slider function
				 var ul = $(sl).find("ul"); // находим блок
				 var bl = $(sl).find("li.slider"+obj); // находим любой из элементов блока
				 var step = $(bl).width(); // ширина объекта
				 $(ul).animate({marginLeft: "-"+step*obj}, 500); // 500 это скорость перемотки
				}
				$(document).on("click", ".slider .nav span", function() { // slider click navigate
				 var sl = $(this).closest(".slider"); // находим, в каком блоке был клик
				 $(sl).find("span").removeClass("on"); // убираем активный элемент
				 $(this).addClass("on"); // делаем активным текущий
				 var obj = $(this).attr("rel"); // узнаем его номер
				 sliderJS(obj, sl); // слайдим
				 return false;
				});
			</script>
		</div>
	</body>
</body>
</html>
