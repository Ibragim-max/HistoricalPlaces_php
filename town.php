<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<?php
		error_reporting(-1);
		$town_id = $_GET["town_id"];
		$query = 'SELECT name_place AS `name`, poster, text_place as `ptext` FROM places WHERE id_place='.$town_id;
        $db = @mysqli_connect('localhost', 'root', 'root', 'hist_town') or die('ошибка соединение с БД');
        require_once 'funcs.php';
        $TownInfo = SelectDatas($db, $query);
        echo "<h1>{$TownInfo[0][0]}</h1>";
        echo "<img src=\"{$TownInfo[0][1]}\"/>";
        echo "<p>{$TownInfo[0][2]}</p>";
	?>
</body>
</html>



<?php 
	// isset(param)
	// empty(param) 
?>