<?php 
	function PlacesOut($datas)
    {
    	foreach($datas as $data): ?>
			
			<div class="box">
	            <img src="/<?php echo $data[2] ?>" alt="">
	            <div class="content">
	                <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $data[0] ?></h3>
	                <p><?php echo $data[1] ?> ...</p>
	                <div class="stars">
	                    <i class="fas fa-star"></i>
	                    <i class="fas fa-star"></i>
	                    <i class="fas fa-star"></i>
	                    <i class="fas fa-star"></i>
	                    <i class="far fa-star"></i>
	                </div>
	                <a href="#" class="btn">Читать больше...</a>
	            </div>
	        </div>

		<?php endforeach; 
    }

	function PlacesOutAll($datas)
    {
    	foreach($datas as $data): ?>

	        <div class="box">
            	<img src="<?php echo $data[2] ?>" alt="">
            	<div class="content">
	                <h3> <?php echo $data[0] ?> </h3>
	                <p> <?php echo $data[1] ?> ... </p>
	                <a href="#" class="btn">see more</a>
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
