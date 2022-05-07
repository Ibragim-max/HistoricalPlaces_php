<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Historical places</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
	<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
	<div class="Upper"></div>	
	
	<?php require_once 'menu.php'; ?>
	<h2 style="text-align: center;">Все</h2>

	<div class="container2">
		<?php
			require_once 'funcs.php';
			$db = @mysqli_connect('localhost', 'root', 'root', 'hist_town') or die('ошибка соединение с БД');
			PlacesOut(SelectDatas($db, 'SELECT * FROM `places`'));
		?>
	</div>
	<?php require_once 'footer.php'; ?>
</body>
</html>