<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	
	<!-- Remove this line if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width">
	
	<meta name="description" content="Designa Studio, a HTML5 / CSS3 template.">
	<meta name="author" content="Sylvain Lafitte, Web Designer, sylvainlafitte.com">
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<!-- Prompt IE 7 users to install Chrome Frame -->
<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="container">

	<header id="navtop">
		<a href="#" class="logo fleft">
			<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/sisace1.png" >
		</a>
		
		<nav class="fright">
	 <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
               
                array('label'=>'Login' , 'url'=>Yii::app()->user->ui->loginUrl, 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),
                 
            ),




                    'htmlOptions'=>array('class'=>'nav navbar-nav'),
        )); ?>
		</nav>
	</header>


<div class="home-page main">
	<section class="grid-wrap" >
		<header class="grid col-full">
		<?php
		$this->widget(
	'ext.emenu.EMenu',array(
	'theme'=>'designa',
	'items'=>Yii::app()->user->rbac->getMenu(),

					));

						?>



			<hr>


		<!--	<a href="#" class="arrow fright">see more infos</a> -->
		</header>
		
		<div class="grid col-two-half mq2-col-full">
			<?php echo $content; ?>
		</div>
	
		
		
		 </section>

	<!--<section class="services grid-wrap">
		<header class="grid col-full">
			<hr>
			<p class="fleft">Services</p>
			<a href="#" class="arrow fright">see more services</a>
		</header>
		
		<article class="grid col-one-third mq3-col-full">
			<aside>01</aside>
			<h5>Web design</h5>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
		</article>
		
		<article class="grid col-one-third mq3-col-full">
			<aside>02</aside>
			<h5>Web development</h5>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
		</article>
		
		<article class="grid col-one-third mq3-col-full">
			<aside>03</aside>
			<h5>Graphic design</h5>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
		</article>
	</section>-->

<!--<section class="works grid-wrap">
	<header class="grid col-full">
			<hr>
			<p class="fleft">Works</p>
			<a href="#" class="arrow fright">see more works</a>
		</header>
	
			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php //echo Yii::app()->theme->baseUrl; ?>/img/img.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Project page!</a>
					<p>Lorem ipsum dolor set amet</p>
				</figcaption>
			</figure>

			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php //echo Yii::app()->theme->baseUrl; ?>/img/img.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Project x</a>
					<p>Lorem ipsum dolor set amet</p>
				</figcaption>
			</figure>
		
			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php //echo Yii::app()->theme->baseUrl; ?>/img/img.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Project x</a>
					<p>Lorem ipsum dolor set amet</p>
				</figcaption>
			</figure>
		
			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php //echo Yii::app()->theme->baseUrl; ?>/img/img.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Project x</a>
					<p>Lorem ipsum dolor set amet</p>
				</figcaption>
			</figure>
	</section> -->
	</div>



	 <!--main-->

<div class="divide-top">
	<footer class="grid-wrap">
		<ul class="grid col-one-third social">
		<!--	<li><a href="#">RSS</a></li> -->
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Twitter</a></li>
		<!--	<li><a href="#">Google+</a></li>
			<li><a href="#">Flickr</a></li> -->
		</ul>
	
		<div class="up grid col-one-third ">
			<a href="#navtop" title="Go back up">&uarr;</a>
		</div>
		
		<nav class="grid col-one-third ">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Inicio', 'url'=>array('/site/index')),
						array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contacto', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Cerrar Sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
		</nav>
	</footer>
</div>

</div>

<!-- Javascript - jQuery -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.2.min.js"><\/script>')</script>

<!--[if (gte IE 6)&(lte IE 8)]>
<script src="js/selectivizr.js"></script>
<![endif]-->

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flexslider-min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/scripts.js"></script>

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
