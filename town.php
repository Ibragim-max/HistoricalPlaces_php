
<?php
		error_reporting(-1);
		$town_id = $_GET["town_id"];
		$query = 'SELECT name_place AS `name`, poster, text_place as `ptext` FROM places WHERE id_place='.$town_id;
        $db = @mysqli_connect('localhost', 'root', 'root', 'hist_town') or die('ошибка соединение с БД');
        require_once 'funcs.php';
        $TownInfo = SelectDatas($db, $query);
        //echo "<h1>{$TownInfo[0][0]}</h1>";   загаловок
        //echo "<img src=\"{$TownInfo[0][1]}\"/>"; ссылка картинок
        //echo "<p>{$TownInfo[0][2]}</p>"; текст ссылка
	?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="stylebar.css"> -->

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

	<title><?php echo $TownInfo[0][0] ?></title>
</head>
<body>
	<!-- header начало  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>HIST</span>town</a>

    <nav class="navbar">
        <a href="index.php#home">Домой</a>
        <a href="index.php#packages">Популярные</a>
        <a href="index.php#gallery">Места</a>
        <a href="index.php#review">Админы</a>
        <a href="index.php#contact">Обратная связь</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="Что искать...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header конец -->

<!-- login форма блок  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>Вход</h3>
        <input type="email" class="box" placeholder="Введите свой email">
        <input type="password" class="box" placeholder="Введите свой пароль">
        <input type="submit" value="ВХОД" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">Запомнить меня</label>
        <p>Запомнить меня? <a href="#">Кликнуть сюда</a></p>
        <p>Еще не регистрированы? <a href="/registration list/registr.html">Регистрация</a></p>
    </form>

</div>

<!-- Домашняя страница  -->

<section class="home" id="home">

    <div class="content">
        <h3>Таджикистан - страна прекрас! ! !</h3>
        <p>откройте новые места вместе с нами...</p>
        <a href="#" class="btn">Больше информаций</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- конец главной доски -->
 <div class="town-box">


    
    <div class="town-name">
	    <h1><span>sssss</span></h1>
	    <!-- echo "<h1>{$TownInfo[0][0]}</h1>"   загаловок -->
	</div>
	
	<div class="town-img">
		<img class="pict" src="images/1.png">
		    <!-- echo "<img src=\"{$TownInfo[0][1]}\"/>"; //ссылка картинок -->

	</div>

	<div class="town-text">
		<p class="title">
			<span>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</span>
		</p>   
	    <!-- echo "<p>{$TownInfo[0][2]}</p>"; //текст ссылка -->
	</div>
<!--     <div class="sliderall">
        <div class="slider">
            <div class="slides">
                
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                
                <div class="slide first">
                    <img src="1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="4.jpg" alt="">
                </div>
                
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                
            </div>
            
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            
        </div>
     

        <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 5000);
        </script>
    </div> -->


</div>






<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">

        <span>А</span>
        <span>Д</span>
        <span>М</span>
        <span>И</span>
        <span>Н</span>
        <span>Ы</span>

    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->



<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">

        <span>с</span>
        <span>в</span>
        <span>я</span>
        <span>з</span>
        <span>ь</span>

    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="ИМЯ">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="НОМЕР">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="ОТПРАВИТЬ ПИСЬМО">
        </form>

    </div>
    
</section>

<!-- contact section ends -->



<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>Горячие клавиши</h3>
            <a href="#">Домой</a>
            <a href="#">Популярные</a>
            <a href="#">Города</a>
            <a href="#">Админы</a>
            <a href="#">Обратная связь</a>
        </div>
        <div class="box">
            <h3>Связь с нами</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> Создано <span> Мр. Ибрагим и Сэр Азимчон  </span> | all rights reserved! </h1>

</section>




<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

	
</body>
</html>



<?php 
	// isset(param)
	// empty(param) 
?>