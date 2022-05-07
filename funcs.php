<?php 
	function PlacesOut($datas)
    {
    	foreach($datas as $data): ?>
			<div class="card">
				<div class="imgBox">
					<img src="pictures/Саразм.jpg" height="200px" width="200px">
				</div>
				<div class="ContentBox">
					<h2><?php echo $data[1] ?></h2>
					<p><?php echo substr($data[2], 0, 150) ?> ...</p>
					<a href="places/sarazm.html"><span>Читать больше...</span></a>
				</div>
			</div>
		<?php endforeach; 
    }
    function SelectDatas($db, $query)
    {
    	mysqli_set_charset($db, 'utf8');
		$res = mysqli_query($db, $query);
		return mysqli_fetch_all($res); 
    }
?>
