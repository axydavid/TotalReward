<?php 
$_SESSION['usr_LVL'] = 0;
	session_start();
	$con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename');	

  if($con){
		echo 'error connection: ' . mysqli_connect_error();
	}

	if(!empty($_GET['msg'])) 
	{
		$msg = $_GET['msg'];
		
		if($msg == "switchpc") 
		{
			if(session_status() == PHP_SESSION_ACTIVE) session_destroy();
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dist/css/bootstrap.css">
<script src="dist/js/jquery-1.12.4.min.js"></script>

<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery-ui.min.js"></script>
<script src="dist/js/jquery.mousewheel.min.js"></script>
<!-- <script src="dist/js/parallax.min.js"></script> -->
<script src="dist/js/jquery.parallax.min.js"></script>
<!-- <script src="dist/js/matter.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="dist/css/style.css">
<link  href="dist/fonts/gfonts.css" rel="stylesheet">

<link rel="stylesheet" href="dist/css/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id = 'navbar-section'style="box-shadow: 0px 0px 15px 2px #e5e5e5;border: none;z-index: 2;position: absolute;width:100%;padding-left: 0;padding-right: 0;">
<button id="toggleButton" style="margin-right: 15px;" class="navbar-toggler collapsed align-right" type="button" data-toggle="collapse" data-target="#navbarColor04" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style='background-image:none;display:flex;'>
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin: auto;"><path d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59c.39-.39.39-1.02 0-1.41L12.2 7.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0 1.41zM19 3H5c-1.11 0-2 .9-2 2v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1v3c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" fill="#7f7f7f"></path>
          <path d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59c.39-.39.39-1.02 0-1.41L12.2 7.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0"></path>
        </svg>
	</span>
  </button>
<div style="max-width: 1200px;width: 100%;display: flex;margin: auto;">
<a class="navbar-brand collapseMobile" href="#" style="width: 258px;">
<img id="logoImg"src="img/LogoBannerInc.png" alt="Total Reward" style="margin-left: 15px;will-change: transform;will-change: transform;height: 67px;position: absolute;top: 3px;pointer-events: none;">
</a>
  <div class="collapse navbar-collapse" id="navbarColor03" style="overflow: hidden;">
    <ul class="navbar-nav mr-auto" style="margin-left: 66%;">
    <li class="nav-item align-right active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
	  </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Our Products</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Oportunities</a>
      </li> -->

	  <li class="nav-item">
        <a class="nav-link prodBtn" href="#" id="">The Product</a>
      </li> 
	 <!-- <li class="nav-item">
        <a class="nav-link oppBtn" href="#" id="">Opportunities</a>
      </li>     -->
	  <!-- <li class="nav-item">
        <a class="nav-link newsBtn" href="#" id="">News</a>
      </li> -->
	  <!-- <li class="nav-item">
        <a class="nav-link liveBtn" href="#" id="">Live</a>
      </li>  -->
	  <li class="nav-item">
        <a class="nav-link aboutBtn" href="#" id="">About Us</a>
      </li>   
      <button id="logIn" class="navbar-toggler collapsed" style="outline: none;display:unset;border-color: transparent;padding: unset;font-size: unset;" type="button" data-toggle="collapse" data-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
        <li class="nav-item">
          <a class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="position: relative;top: -2px;"><path d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59c.39-.39.39-1.02 0-1.41L12.2 7.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0 1.41zM19 3H5c-1.11 0-2 .9-2 2v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1v3c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
          <path d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59c.39-.39.39-1.02 0-1.41L12.2 7.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0" fill="#343a40"></path>
        </svg> Log In</a>
        </li>
      </button>
    </ul>
  </div>
  </div>
  <div class="navbar-collapse1 collapse" id="navbarColor04" style="position: absolute; right: 17.4%; top: 69px; box-shadow: rgb(229, 229, 229) 0px 5px 8px; border-radius: 5px;">
  <button id="logIn" class="navbar-toggler collapsed" style="cursor: unset;display:unset;border-color: transparent;padding: unset;font-size: unset;position: absolute;width: 1000%;height: 1000%;left: -794%;top: -69px;" type="button" data-toggle="collapse" data-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <div style="background:white;padding: 20px;z-index: 6;position: relative;">
  <div class="" style="margin-left: auto;margin-right: auto;">
				
					<form action="login.php" style="" method="post">
						<div class="form-group">
							<input id="nameInput" autocomplete="off" autocapitalize="word" type="text" name="user" id="user" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<input id="passInput" autocomplete="off"  autocapitalize="word" type="password" name="pass" id="pass" placeholder="Password" class="form-control">
						</div>
						<button class="btn btn-health d-block m-auto" type="submit"> Sign In </button>
					</form>
				
	</div>

  </div>
  </div>
</nav>
		<div class="my-parallax-window" style="top:0;">
            <div class="my-parallax-slider">
                <img style="position: absolute; display: block;margin-left: auto; margin-right: auto;" src="./img/b2.png" />
            </div>
            <!-- <div class="some-optional-fixed-content">
            </div> -->
        <div class="my-parallax-window1" style="top:0;">
            <div class="my-parallax-slider">
                <img style="position: absolute;display: block;margin-left: auto; margin-right: auto;" src="./img/b1.png" />
            </div>
            <div class="some-optional-fixed-content">
            
						<div class="site-section site-section1" id="services-section1" style="background-position: center;background-size: cover;background-color: transparent;z-index: -1;padding-top:73px;">         

			<div class="container" style="display: flex;z-index: 1;position: relative;">
			<div class="container containerz noPaddingMobile" style="display: flex;border-radius: 5px;box-shadow: 0px 0px 15px 2px #e5e5e5;padding: 15px;max-width: 100%;background: #FFFC;padding-left: 8px;">
				<img class="containerz" src="img/RoundFinal2.png" alt="Total Reward" style="max-width: 374.5px;width: 100%;will-change: transform;margin: auto;border-radius: 5px 0px 0px 5px;height:100%;">
				<div class="align-right noPaddingMobile" style="margin: auto;padding-left: 40px;">
				<b class="text-health" style="letter-spacing: 3px;font-size: 14px; ">INTRODUCING</b>
				<h3>Bio10x Minerals</h3>
				<p class="lead">Rich in minerals, anti-oxidants and amino acid, a pH9 alkaline infused with electrolytes.</p>
				<p class="lead">Your daily micronutrients supplement. Provides cellular nourishment for optimal health and nutrition.</p>
				<p><p style="margin-bottom: 0;"><a id="moreBtn"class="btn btn-health btn-lg" href="#">Learn More</a>
				</p></div>
			</div>
			</div>

			<!-- <canvas id="bg1"></canvas>
			<canvas id="bg2"></canvas> -->
			</div>

        </div>
        </div>
		</div>

<!-- <input type="button" value="Save" onclick="save();"> -->


<div class="site-section" id="why-section" data-overScrollFix="true",data-pos-x="center" data-src="img/cinnamon.jpg" data-parallax style="will-change: transform;background-position: center;background-size: cover;text-shadow: 0px 0px 6px black;z-index: 2;position: relative;">
	<div class="container" style="display: block;color: white;">
		<div>
		<!-- <h1 style="font-size: 2.958rem;">Why?</h1> -->
		<p class="mt-5 lead"style="color: white;">Every cell in your body needs micronutrients such as vitamins and minerals to function optimally. <p class="lead"style="color: white;">This includes water, vitamins, minerals, essential fatty acids, fiber and amino acids. They are vital for healthy development, illness prevention and well-being. <p class="lead"style="color: white;">These are not produced in the body and need to come from your diet.
		</div>
	</div>
</div>
<div class="site-section" id="services-section" style="z-index: 1;position: relative;">
<img class="hideMobile" src="img/barley3.jpg" alt="Total Reward" style="will-change: transform;position: absolute;left: 0;z-index: -1;">
<img class="lightenMobile" src="img/cinSmall.png" alt="Total Reward" style="will-change: transform; position: absolute;right: 0px;z-index: -1;">

<div class="container" id="product-section" style="display: block;text-shadow: 0px 0px 5px white;">

<h3 style="">Bio10x Minerals</h3>
<p class="mt-5 lead" style="color: black;">Derived from fermentation extracts of cinnamon and barley grass.</p>
<p class="lead" style="color: black;">Cinnamon has been valued for its medicinal qualities for thousands of years and ranks 7th of all foods, spices and herbs across the world with the highest concentration of antioxidants.</p>
<p class="lead" style="color: black;">Barley grass has been known to be used as a medicine since 7000 BC. It was not only used as food, but also as a treatment for various health conditions. The essential amino acids found in barley grass are complete, making it one of the most nutrient-dense foods in the world.
</p></div>
</div>

<div class="site-section bg-light" id="services-section" style="background-image: url('img/textureBlack.jpg');will-change: transform;background-position: bottom;background-size: cover;color: white;z-index: 1;position: relative;">
<div class="list-group container" style="flex-direction: unset;padding-bottom: 0px !important">
<h3 class="">Benefits of Bio10x Minerals</h3>
  </div>
<div class="list-group container" style="flex-direction: unset;padding-bottom: 0px !important">
<img class="align-left marginMidMobile" src="img/mineralGreen.png" alt="" style="will-change: transform;width: 70px;height: 85px;margin-top: 15px;margin-right: -15px;opacity: 0.9;">
  <div class="box" style="width: 40%;padding: 40px;padding-top: 25px;padding-bottom: 25px;">

    <h4 class="mb-1">Bio10x Minerals</h4>
    <p class="mb-1"></p><p>
    </p><p>Anti-Cholesterol 
    </p><p>Anti-Constipation 
    </p><p>Anti-Heart Attack 
    </p><p>Anti-Diabetes 
    </p><p>Anti-Hypertension 
    </p><p>Anti-Stress 
    </p><p>Anti-Virus
</p></div>

<img class="align-left marginMidMobile" src="img/bodyGreen.png" alt="" style="will-change: transform;width: 70px;height: 82px;margin-top: 15px;margin-right: -15px;opacity: 0.9;">
<div style="width: 40%;padding: 40px;padding-top: 25px;padding-bottom: 25px;" class="align-right box">
    <h4 class="mb-1">Rejuvenates body</h4>
    <p class="mb-1"></p><p></p><p>Improves wellness
    </p><p>Boosts your immune system
    </p><p>Rejuvenates cells
    </p><p>Increases blood oxygen level
    </p><p>Calms and balances body
    </p><p>Assists in pain relief
</p></div></div><div class="list-group container" style="flex-direction: unset;padding-top: 0px !important;">
<img class="align-left marginMidMobile" src="img/kidneyGreen.png" alt="" style="will-change: transform;width: 65px;height: 90px;margin-top: 15px;margin-right: -15px;">
<div style="width: 40%;padding: 40px;padding-top: 25px;padding-bottom: 25px;" class="box">
      <h4 class="mb-1">Helps Kidney</h4>
      <p class="mb-1"></p><p></p><p>Alleviates kidney stones.
      </p><p>Prevents acute kidney failure.
      </p><p>Protects the kidney against toxins
      </p><p>Helps restoration of kidney function</p>
</div>

<img class="align-left marginMidMobile" src="img/reccomendGreen.png" alt="" style="will-change: transform;width: 70px;height: 70px;will-change: transform;margin-top: 15px;margin-right: -15px;">
<div class="align-right box" style="width: 40%;padding: 40px;padding-top: 25px;padding-bottom: 25px;">
      <h4 class="mb-1">Recommendations</h4>
     <p class="mb-1"></p><p></p><p>To achieve optimal health and nutrition:
      <p>Add 5-10 drops of Bio10x Minerals in your drinking water or tea every day!
      
</p></div>

</div></div>

<div class="site-section" id="opp-section" style="display:none; z-index: 0;position: relative;box-shadow: inset 0px 15px 10px -10px #b9b9b9;top: -1px;">
<div class="container noPaddingMobile" style="text-align: center;max-width: 100%;padding-left:0;padding-right: 0;">

<h3 class="">Opportunities</h3>

			<div class="swiper-container swiper1" style="width: 100%;height:400px;padding-top: 20px;">
				<!-- If we need pagination -->
				<div class="swiper-pagination swiper-pagination1"></div>
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<?php
						$files = scandir('img/cOpportunity');
						foreach($files as $file) {
							if($file !== "." && $file !== "..") {
								echo "<div class='swiper-slide'><img class='home_slider_background' src='img/cOpportunity/$file' alt='' style=''></div>";
							}
						}
					?>
				</div>


				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev" style="transform: scale(1.5);left: 20px;"></div>
				<div class="swiper-button-next" style="transform: scale(1.5);right: 20px;"></div>
			</div>
			</div>
</div>
<div class="site-section site-section1 bg-dark text-white" id="news-section1" style="display:none; box-shadow: inset 0px 15px 10px -10px #b9b9b9;overflow: hidden;">
  <div class="container noPaddingMobile" style="text-align: center;max-width: 100%;padding-left:0;">
  <h3 class="" style="">Information</h3>
  <!-- <div class="container containerz mt-5" style="height:400px;display: flex;border-radius: 5px;box-shadow: 0px 0px 15px 2px #e5e5e5;max-width: 777px;background: white;text-align: left;"> -->
  <div class="swiper-container swiper2" style="width: 100%;height:400px;padding-top: 20px;">
				<!-- If we need pagination -->
				<div class="swiper-pagination swiper-pagination2"></div>
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<?php
						$files = scandir('img/cInfo');
						foreach($files as $file) {
							if($file !== "." && $file !== "..") {
								echo "<div class='swiper-slide'><img class='home_slider_background' src='img/cInfo/$file' alt='' style=''></div>";
							}
						}
					?>
				</div>


				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev" style="transform: scale(1.5);left: 20px;"></div>
				<div class="swiper-button-next" style="transform: scale(1.5);right: 20px;"></div>
			</div>

    <!-- </div> -->
  </div>
</div>

<div class="site-section site-section1" id="testimonials-section" style="background-color: #f8f9fa;box-shadow: inset 0px 15px 10px -10px #b9b9b9">
  <div class="container" style="text-align: center;margin: 0;max-width: 100%;padding-right:0;padding-left:0;">
  <h3 class="">The Board of Directors</h3>
  <div style="display: flex;flex-wrap: wrap;margin: auto;">
  <div style="width: 100%;display: flex;flex-wrap: wrap;max-width: 1250px;margin: auto;">
    <div class="container containerz mt-5" style="width: 375px;display: flex;border-radius: 5px;box-shadow: 0px 0px 15px 2px #e5e5e5;background: white;text-align: left;flex-direction: column;">
      <img class="marginMidMobile" src="img/johnPhoto3.jpg" alt="Total Reward" style="border-radius: 10000px;height: 150px;width: 150px;margin: 0 auto;">
      <div class="noPaddingMobile" style="margin-left: 20px;margin-right: 20px;">
            <h5 style='text-align: center;padding-top:10px'>Jonathan D. Labayos</h5>
            <h6 style='text-align: center;padding-bottom:10px;color: #46C51C;'>Chief Executive Officer</h6>
Jon is a visionary leader and veteran marketing professional with a vast knowledge of direct selling, compensation and systems development, business management, and systems analysis and design. 
<p><p>
He has a philosophy and communication studies degree and a Master in Communication (MA) from Cebu Normal University (CNU) and pursues his doctoral degree in Holy Name University- Tagbilaran City (CNU). Jon began his career in direct selling in 2002. 
<p>
Today, he is one of the most sought-after speakers and renowned leaders in direct selling and network marketing in the Philippines.
      </div>
    </div>

    <div class="container containerz mt-5" style="width: 375px;display: flex;border-radius: 5px;box-shadow: 0px 0px 15px 2px #e5e5e5;background: white;text-align: left;flex-direction: column;">
      <img class="marginMidMobile" src="img/jennyPhoto2.jpg" alt=" " style="border-radius: 10000px;width: 150px;height: 150px;margin: 0 auto;">
      <div class="noPaddingMobile" style="margin-left: 20px;margin-right: 20px;">
      <h5 style='text-align: center;padding-top:10px'>Jenny Louie Labayos-Rosales</h5>
      <h6 style='text-align: center;padding-bottom:10px;color: #46C51C;'>Chief Finance Officer</h6>
Jenny, a graduate of accounting studies, is respected for her business and marketing achievements,skilled in office administration and product inventory strategies.
<p><p>As a marketing and accounting professional, she is driven with her principle of having social responsibility and ethics in managing businesses. 
<p>She graduated in the University of Visayas-Cebu City with highest honor and worked in different firms as outstanding finance officer in the early part of her career.
      </div>
    </div>

    <div class="container containerz mt-5" style="width: 375px;display: flex;border-radius: 5px;box-shadow: 0px 0px 15px 2px #e5e5e5;background: white;text-align: left;flex-direction: column;">
      <img class="marginMidMobile" src="img/raycelPhoto2.jpg" alt=" " style="border-radius: 10000px;width: 150px;height: 150px;margin: 0 auto;">
      <div class="noPaddingMobile" style="margin-left: 20px;margin-right: 20px;">
      <h5 style='text-align: center;padding-top:10px'>Raycel Bartulo-Labayos</h5>
      <h6 style='text-align: center;padding-bottom:10px;color: #46C51C;'>Chief Product Officer</h6>
            Raycel has an accounting and philosophy degree studies skilled in office management and product development strategies. 
            <p><p>She graduated with highest honor from Divine Word College - Tagbilaran City and worked in some schools as Registrar during the early part of her career.
      </div>
    </div>
    
  </div>
</div>
</div>
          </div>
<div class="site-section site-section1" id="live-section" style="display:none;background-color: #f8f9fa;box-shadow: inset 0px 15px 10px -10px #b9b9b9">
  <div class="container fullWidthMobile noPaddingMobile" style="text-align: center;">
  <h1 class="">Live</h1>
  <div class="container containerz mt-5 noPaddingMobileAll fullWidthMobile" style="padding:0px !important;display: flex;border-radius: 5px;box-shadow: 0px 0px 15px 2px #e5e5e5;max-width: 777px;background: white;text-align: left;">
  <!-- <iframe width="100%" height="400" src="https://www.youtube-nocookie.com/embed/hxzw6ST3u5o" title="YouTube video player" frameborder="0" allow="encrypted-media; picture-in-picture" allowfullscreen></iframe>  -->  </div>
  </div>
</div>

<footer class="page-footer font-small text-white bg-dark" id="about-section" style="box-shadow: inset -2px 8px 7px -4px #0d110b;">
		<div class="container containerF" style='max-width: 1165px;margin-bottom: -20px !important;'>
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">

					<!-- Logo -->
					<div class="logo_container">
						<div class="logo">
							<a class="justify-content-center justify-content-md-start" style="margin: auto;width: 100%;display: flex;">
								<img src="img/LogoBannerIncB2.png" alt="" style="will-change: transform;height: 67px;">
							</a>
						</div>
					</div>
					<div class="footer_text"><p><p>
					<b>Who We Are:</b><br>
					TRI is one of the fastest growing distribution and direct selling companies globally dedicated helping people having optimal health and financial freedom.  
					<br>We offer premier organic natural products and business opportunities designed to improve the quality of living of the Filipinos.
					<p>
					<b>Our Core Values:</b><br>
At TRI, we believe that how we achieve success is just as important as the goals we set for ourselves guided by the principles of 
EXCELLENCE, TEAMWORK and POSITIVE THINKING.
						<p><b>VISION:</b><br>A premier direct sales company that provides a life-changing business opportunity.<p>
						<b>MISSION:</b><br>
						Helping the Filipinos to become financially-free and having an optimal health.					
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_links">
						<div class="footer_title font-weight-bold">Useful Links</div><p>
						<div style="list-style-type: none;">
						<li style="margin-bottom:5px;"><a style="color:#46C51C;" href="#" class="homeBtn">Home</a></li>
						<li style="margin-bottom:5px;"><a style="color:#46C51C;" href="#" class="prodBtn">The Product</a></li>
						<!-- <li style="margin-bottom:5px;"><a style="color:#46C51C;" href="#" class="oppBtn">Opportunities</a></li> -->
						<!-- <li style="margin-bottom:5px;"><a style="color:#46C51C;" href="#" class="newsBtn">Gallery</a></li> -->
						<!-- <li style="margin-bottom:5px;"><a style="color:#46C51C;" href="#" class="newsBtn">News</a></li> -->
						<!-- <li style="margin-bottom:5px;"><a style="color:#46C51C;" href="#" class="liveBtn">Live</a></li> -->
						<li style="margin-bottom:5px;"><a style="color:#46C51C;" href="#" class="aboutBtn">About Us</a></li>

						</div>
					</div><p>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title font-weight-bold">Contact Us</div>
						<div style="list-style-type: none;"><p>
							<li>199 Taurus St.<br>Pembo Makati<br>1218 Metro Manila<br>Phillipines</li><p>
							<li>
								<span>Phone: </span>
									<div>Smart: +63 9074 256 623</div>
									<div>Globe: +63 9157 552 658</div>
							</li><p>
							<li><span>Email: </span><p><a href="mailto:inquiries@totalrewardinternational.com" style="color:#46C51C;">inquiries@totalrewardinternational.com</a></li>
							<li><span>Facebook: </span><p><a href="https://www.facebook.com/groups/287863932919270" style="color:#46C51C;">Total Reward International, Inc.</a></li>
							<li><span>Youtube Live: </span><p><a href="https://www.youtube.com/watch?v=FQNbnon-DC4" style="color:#46C51C;">TRI Mego Maldito</a></li>

							</div>
					</div>
				</div>

			</div>
		</div>

<div class="footer-copyright text-center py-3" style="display: flex;">
	<div style="display: flex;margin: auto;">
	&copy; <script>document.write(new Date().getFullYear());</script> Copyright:
    &nbsp;<a href="#" style="color:#46C51C;"> Total Reward International, Inc.</a><div id='madeBy'>&nbsp;| Made by Jov</div>
  </div>
</div>
	</footer>
<script>
	var stageP = 370;
	var slidesP = 2.2;
  navP = { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev',};
	var winMatch = window.matchMedia("only screen and (max-width: 575px)").matches;
if (winMatch) 
{
	stageP = 0;
	slidesP = 1;
	$('.swiper-button-next, .swiper-button-prev').each(function(i, obj) {
		$(this).css("display", "none");
	navP = false;
	});
}

$('.my-parallax-window').parallax({
  speed: -.2,
  sliderSelector: '>.my-parallax-slider',
});
$('.swiper-container').each(function(i, obj) {
  var bigI = i+1;

  const swiper = new Swiper('.swiper'+bigI, {
  // Optional parameters
	direction: 'horizontal',
	slidesPerView: slidesP,
	centeredSlides: true,
	// spaceBetween: 30,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination'+bigI,
    clickable: true,
  },

  // Navigation arrows
  navigation: navP,

});

});


var b = 0;
$('#logIn').click(function() {
    if(!$('#navbarColor04').hasClass('show'))
      setTimeout(
            function() {
              $("#nameInput").focus();
            }, 200);         
});

var msg = "<?php if(!empty($_GET['msg']))echo $_GET['msg']; ?>";

if(msg == "nousr")
{
  var nr = Math.floor(Math.random() * 10);
  var str2 ='';
  if(nr == 0) str2 = 'perhaps you should type your ID?';
  else if(nr == 1) str2 = 'truly truly I say unto you, try again and you will eventually succeed.';
  else if(nr == 2) str2 = 'please try again.';
  else if(nr == 3) str2 = 'type it again, carefully!';
  else if(nr == 4) str2 = 'try again.';
  else if(nr == 5) str2 = 'type your name again.';
  else if(nr == 6) str2 = 'ask the administrator to type your credentials if you cannot do it yourself.';
  else if(nr == 7) str2 = 'try again.';
  else if(nr == 8) str2 = 'if you keep getting this message contact your administrator, perhaps your name has not been registered.';
  else if(nr == 9) str2 = "perhaps your name exists, perhaps not, it's a mystery, try again so that you can figure it out!";
  var str = '<div style="position: absolute;width: 100%;display: flex;"><div style="padding-right: 30px;width: max-content;margin: auto;margin-top: 1em;background-color: #FF4136DB;z-index:6;" class="alert alert-dismissible alert-danger"><button type="button" class="close">&times;</button>This name cannot be found, '+str2+'</div></div>';
  $("#services-section1").prepend(str);
}
else if(msg == "switchpc")
{
  var str ='<div style="position: absolute;width: 100%;display: flex;"><div style="z-index: 10;padding-right: 30px;width: max-content;margin: auto;margin-top: 1em;background-color: #FF4136DB;" class="alert alert-dismissible alert-danger"><button type="button" class="close">&times;</button>You have signed in to another computer, so I have signed you out from this one.</div></div>';
  $("#services-section1").prepend(str);
}

$(".alert button.close").click(function (e) {
		$(this).parent().fadeOut(500);
	});

  $("#moreBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#why-section").offset().top
    }, 900,'easeOutQuint');
  });

  $(".homeBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#navbar-section").offset().top
    }, 900,'easeOutQuint');
  });

  $(".oppBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#opp-section").offset().top
    }, 900,'easeOutQuint');
  });

  $(".liveBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#live-section").offset().top
    }, 900,'easeOutQuint');
  });

  $(".prodBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#product-section").offset().top
    }, 900,'easeOutQuint');
  });

  $(".aboutBtn").click(function() {
    $('html, body').animate({
        scrollTop: $('body').height() - $(window).height()
    }, 900,'easeOutQuint');
  });

$('.my-parallax-window').parallax({
        speed: -.2,
        sliderSelector: '>.my-parallax-slider',
		posX: 'left',
  		posY: 'left',	
		overScrollFix:'true',
    });
    $('.my-parallax-window1').parallax({
        speed: -.7,
        sliderSelector: '>.my-parallax-slider',
		posX: 'left',
 		posY: 'left',
		 overScrollFix:'true',
    });

window.addEventListener("load", function(){
		$("div").filter("[class~='parallax-mirror']")[0].style.zIndex = -99;
});

</script>

</body>
</html>