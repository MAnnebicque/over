<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Over | Home</title>
	<link rel="stylesheet" href="style.css">
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
		<nav id="menu">
			<div id="menu_circleBg"></div>
			<a href="#" id="work"><img src="./img/work.svg" alt="Work" /></a>
			<a href="#" id="about"><img src="./img/about.svg" alt="About" /></a>
			<a href="#" id="contact"><img src="./img/contact.svg" alt="Contact" /></a>
			<img src="./img/logo-o.svg" id="logo">
		</nav>

		<div id="social">
			<h1>SOCIAL</h1>
			<div id="social_content">
				<!-- Facebook -->
				<div class="fb-like" data-href="https://www.facebook.com/AgenceOver" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
				<!-- Twitter -->
				<a class="twitter-timeline" href="https://twitter.com/agence_over" data-widget-id="599266551590686721">Tweets de @agence_over</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
						if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
				</script>
				<br />
				<!-- Instagram -->
				<a href="https://instagram.com/agenceover" id="instagram">
					<img src="./img/instagram-icon.svg" alt="Instagram" style="width:35px;height:auto;" />
					<span id="insta-content">INSTAGRAM</span>
				</a>
				
			</div>
		</div>


		
</body>
</html>