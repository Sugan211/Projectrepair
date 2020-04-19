<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Caswash</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="icon" href="<?php echo assets_images_url('favicon.ico'); ?>" type="image/x-icon" />

	<?php
		for($i = 0; $i < count($css); $i++){
			echo $css[$i];
		}

	$fb_app_id = "2471713333157858";
	/* $fb_app_id = "630374597421567"; Dev */
$fb_app_secret  = "c0e45a6546f25b0aee9514f2f3c9507e";
$fb_graph_act_link = "https://graph.facebook.com/oauth/access_token?client_id={$fb_app_id}&client_secret={$fb_app_secret}&grant_type=client_credentials";
	?>


</head>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '<?php echo $fb_app_id; ?>',
			appsecret  : '<?php echo $fb_graph_act_link; ?>',
			xfbml      : true,
			version    : 'v3.1'
		});
		FB.AppEvents.logPageView();
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<body>



		<?php echo $header; ?>

		<?php echo $body; ?>

	

		<?php echo $footer; ?>


	


	</div>







	<?php
		for($i = 0; $i < count($js); $i++){
			echo $js[$i];
		}
	?>



</body>

</html>
