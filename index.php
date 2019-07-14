<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>БАРБЕРШОП "БОРОДИНСКИЙ"</title>
		<link rel="stylesheet" href="/style.css" type="text/css"/>
	</head>
	<body>
			<?php include 'includes/main-nav.php';?>
			<h1>ГЛАВНАЯ</h1>
			<section class="features">

					<div class="features-item">
						<b class="features-name">БЫСТРО</b>
						<p>Мы делаем свою работу быстро! Два часа пролетят незаметно и вы - счастливый обладатель стильной стрижки-минутки!</p>
					</div>
					<div class="features-item">
						<b class="features-name">КРУТО</b>
						<p>Забудьте, как вы стриглись раньше. Мы сделаем из вас звезду футбола или кино! Во всяком случае внешне.</p>
					</div>
					<div class="features-item">
						<b class="features-name">ДОРОГО</b>
						<p>Наши мастера - профессионалы своего дела и не могут стоить дёшево. К тому же, разве цена не дает определённый статус?</p>
					</div>
			</section>
			<div class="index-content">
				<div class="index-content-left">
					<h2 class="index-content-title">НОВОСТИ</h2>
					<ul class="news-preview">
						<li>
							<p>Нам наконец завезли Ягермайстер! Теперь вы можете пропустить стаканчик во время стрижки</p>
							<time datetime="2016-01-11">11 ЯНВАРЯ</time>
						</li>
						<li>
							<p>В нашей команде пополнение, Борис "Бритва" Стригунец, обладатель множества титулов и наград пополнил наши стройные ряды</p>
							<time datetime="2016-01-18">18 ЯНВАРЯ</time>
						</li>
					</ul>
					<a class="btn" href="#">ВСЕ НОВОСТИ</a>
				</div>
				<div class="index-content-right">
					<h2 class="index-content-title">ФОТОГАЛЕРЕЯ</h2>
					<div class="gallery">
						<figure class="gallery-content">
							<!-- <img src="img/photo-1.jpg" width="286" height="164" alt=""> -->
						</figure>
						<button class="btn gallery-prev" type="button">НАЗАД</button>
						<button class="btn gallery-next" type="button">ВПЕРЁД</button>
					</div>
				</div>
			</div>
			<div class="index-content">
				<div class="index-content-left">
					<h2 class="index-content-title">КОНТАКТНАЯ ИНФОРМАЦИЯ</h2>
					<p>
						Барбершоп "Бородинский"<br>
						Адрес: г. Санкт-Петербург, Б. Конюшенная, д.19/8<br>
						Телефон: +7 (812) 666-02-66
					</p>
					<p>
						Время работы:<br>
						ПН-ПТ: с 10:00 до 22:00<br>
						СБ-ВС: с 10:00 до 19:00	
					</p>
					<a class="btn" href="#">КАК ПРОЕХАТЬ</a>
					<a class="btn" href="#">ОБРАТНАЯ СВЯЗЬ</a>
				</div>
				<div class="index-content">
				<div class="index-content-right">
					<h2 class="index-content-title">ЗАПИСАТЬСЯ</h2>
					<p>Укажите желаемую дату и время и мы свяжемся с вами для подтверждения брони</p>
					<form class="appointment-form" action="https://echo.htmlacademy.ru" method="post">
						<input type="text" name="date" value="" placeholder="Дата">
						<input type="text" name="time" value="" placeholder="Время">
						<input type="text" name="name" value="" placeholder="Ваше имя">
						<input type="tel" name="phone" value="" placeholder="Телефон">
						<button class="btn" type="submit">ОТПРАВИТЬ</button>
					</form>
			</div>
		</main>
		<footer class="main-footer">
			<div class="container">
				<section class="footer-contacts">
					Барбершоп "Бородинский"<br>
					Адрес: г. Санкт-Петербург, Б. Конюшенная, д.19/8<br>
					<a href="#">Как нас найти?</a><br>
					Телефон: +7 (812) 666-02-66
				</section>
				<section class="footer-social">
					<p>ДАВАЙТЕ ДРУЖИТЬ!</p>
					<a class="social-btn social-btn-vk" href="#">ВКОНТАКТЕ</a>
					<a class="social-btn social-btn-fb" href="#">ФЕЙСБУК</a>
					<a class="social-btn social-btn-inst" href="#">ИНСТАГРАМ</a>
				</section>
				<section class="footer-copyright">
					<p>РАЗРАБОТАНО:</p>
					<a class="btn" href="https://htmlacademy.ru">HTML ACADEMY</a>
				</section>
			</div>
		</footer>
	</body>
</html>