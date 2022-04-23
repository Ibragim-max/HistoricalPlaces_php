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

	<div style="clear: left;"></div>

		
	<h2 style="text-align: center;">Все</h2>

	<div class="container2">


		<?php
			$db = @mysqli_connect('localhost', 'root', 'root', 'hist_town') or die('ошибка соединение с БД');
			mysqli_set_charset($db, 'utf8');
			$query = 'SELECT * FROM `places`';
			$res = mysqli_query($db, $query);
			$datas = mysqli_fetch_all($res); 
		?>
		<?php foreach($datas as $data): ?>
			<div class="card">
			<div class="imgBox">
				<img src="pictures/Саразм.jpg" height="200px" width="200px">
			</div>
			<div class="ContentBox">
				<h2><?php echo $data[1] ?></h2>
				<p><?php echo $data[2] ?></p>
				<a href="places/sarazm.html"><span>Читать больше...</span></a>
			</div>
		</div>
		<?php endforeach; ?>

		
	</div>






	
	<?php require_once 'footer.php'; ?>
 
	<div class="Down"></div>
	


</body>
</html>