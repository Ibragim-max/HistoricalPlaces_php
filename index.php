<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Historical places</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" > 
	
</head>
<body>
	<div class="Upper"></div>	
	<div class="layer">
	 	<?php require_once 'menu.php'; ?>
		<div class="Content">
			<br>
			<h2 style="text-align: center; color: #FFF;">О сайте</h2>
			<div class="InfoDiv">
				<p class = "InfoText">
					Таджикистан - это горная страна в Средней Азии. Страна богата своими историями и историческими местами. В Таджикистане имеются гонолыжные курорты и места для отдыха, места для альпинизма и дл приятного провождения времени.
				<p/>
				<p class = "InfoText">
					Наш сайт создан, для того чтобы показать на картинках самые известные и исторические города Таджикистана. Данный сайт является информационным.
				</p>
				<p class = "InfoText">
					В Таджикистане имеется не мало интересных и захватывающих мест, которых следует посетить. На данных странницах сайте, предоставлены информации о самых захватывающих мест страны. При необходимости можете написать коментарий или же указать рейтинг для будущих посетителей. Желаем удачных впечетлений.
				</p>
			</div>
		</div><br>
		<div class="container2">
			<?php
				require_once 'funcs.php';
				$db = @mysqli_connect('localhost', 'root', 'root', 'hist_town') or die('ошибка соединение с БД');
				PlacesOut(SelectDatas($db, 'SELECT * FROM `places` LIMIT 4'));
			?>
		</div>
		<?php require_once 'footer.php'; ?>
	</div>
</body>
</html>