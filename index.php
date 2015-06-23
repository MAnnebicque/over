<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Over, simply dream</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="animate.min.css" />
	<link rel="icon" type="image/png" href="./img/favicon.png" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<script type="text/javascript">
    	(function($){
    		$.fn.Center= function(){
    			this.css({
    				'position' : 'absolute',
    				'left' : '50%',
    				'top' : '50%'
    			});
    			this.css({
    				'margin-left': -this.width()/2 + 'px',
    				'margin-top' : -this.height()/2 + 'px'
    			});
    		};
    	})(jQuery);

    	$(document).ready(function(){ $("#menu").Center(); });
	</script>


</head>
<body>

	<!-- Facebook SDK Javascript 'Like'  -->
	<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


	<div id="background"></div>

	<div id="content">
		<div id="menu_depart">
		<nav id="menu" class="animated rotateIn">
			<div id="menu_circleBg"></div>
			<a href="#" id="work"><img src="./img/work.svg" alt="Work"/></a>
			<a href="#" id="about"><img src="./img/about.svg" alt="About"  /></a>
			<a href="#" id="contact"><img src="./img/contact.svg" alt="Contact" /></a>
			<a href=""><img src="./img/logo-o.svg" id="logo"/></a>
		
		</nav>
	</div>

    <a href="#" id="closeContent"></a>

	<div id="work-content">
		<p>content work work</p>
	</div>

	<div id="about-content">
	   <?php include('./inc/about.php') ?>
    </div>

	<div id="contact-content">
		<p>content contact contact</p>
	</div>
            
	</div>

		<div id="social">
			<h1>SOCIAL</h1>
			<div id="social_content">
				<!-- Facebook -->
               	<a href="https://www.facebook.com/AgenceOver" target="_blank">
               		<div class="fb-like" data-href="https://www.facebook.com/AgenceOver" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
               	</a>
                <!-- Twitter -->
				<a class="twitter-timeline" href="https://twitter.com/agence_over" data-widget-id="599266551590686721">Tweets de @agence_over</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
						if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
				</script>
				<br />
				<!-- Instagram -->
				<a href="https://instagram.com/explore/tags/agenceover/" id="instagram" target="_blank">
					<img src="./img/instagram-icon.svg" alt="Instagram" style="width:35px;height:auto;" />
					<span id="insta-content">INSTAGRAM</span>
				</a>
				
			</div>
		</div>

    <script type="text/javascript" src="event.js"></script>

</body>
</html>