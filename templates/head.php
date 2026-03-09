<?php
	// Generamos una firma de seguridad (token) única para evitar spam en los formularios de esta página
    $firma_formulario = hash_hmac('sha256', $id, SECRET_KEY); ?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="es-MX" http-equiv="content-language"/>
	<title><?php echo (defined('WEBSITE') ? WEBSITE : WEBSITE_CMS).' :: '.$title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $key; ?>">
	<meta name="author" content="Paola González">
    <!-- Inicio meta etiquetas SEO -->
    <meta name="AdsBot-Google" content="<?php echo $adsBot_google; ?>" />
	<meta name="keyphrases" content="<?php echo $key; ?>"/>
	<meta name="generator" content="<?php echo $description; ?>"/>
    <meta name="classification" content="<?php echo $description; ?>"/>
	<meta name="subject" content="<?php echo $description; ?>"/>
	<meta name="googlebot" content="<?php echo $adsBot_google; ?>" />
    <meta name="robots" content="<?php echo $adsBot_google; ?>"/>
    <meta name="geo.region" content="MX" />
    <meta name="geo.placename" content="Mexico"/>
    <meta name="geo.region" content="Mexico"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="distribution" content="global"/>
    <meta name="revisit-after" content="1 days"/>
    <meta name="referrer" content="origin"/>
    <!-- Fin meta etiquetas SEO -->
    <!-- Inicio meta etiquetas twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="<?php echo (defined('USERNAME_TWITTER') ? USERNAME_TWITTER : USERNAME_TWITTER_CMS); ?>" />
	<meta name="twitter:title" content="<?php echo $title; ?>" />
    <meta name="twitter:description" content="<?php echo $description; ?>" />
    <meta name="twitter:image" content="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT).$og_image; ?>" />
	<!-- Fin meta etiquetas twitter -->
    <!-- Inicio meta etiquetas facebook -->
    <meta property="og:locale" content="es_LA" />
	<meta property="og:type" content="<?php echo $og_type; ?>" />
	<meta property="og:updated_time" content="<?php echo $og_updated_time; ?>">
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta property="og:url" content="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT).$url; ?>" />
	<meta property="fb:app_id" content="<?php echo (defined('APP_ID_FACEBOOK') ? APP_ID_FACEBOOK : APP_ID_FACEBOOK_CMS); ?>"/>
	<meta property="fb:pages" content="" />
	<meta property="og:site_name" content="<?php echo (defined('WEBSITE') ? WEBSITE : WEBSITE_CMS); ?>" />
	<meta property="og:image" content="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT).$og_image; ?>" />
	<meta property="og:image:secure_url" content="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT).$og_image; ?>" />
	<meta property="og:image:type" content="<?php echo $og_image_type; ?>" />
	<meta property="og:image:width" content="<?php echo $og_image_width; ?>" />
	<meta property="og:image:height" content="<?php echo $og_image_height; ?>" />
	<meta property="og:image:alt" content="<?php echo $title; ?>" />
	<!-- Fin meta etiquetas facebook -->
	<!-- Inicio meta etiquetas favicon -->
	<meta name="msapplication-TileColor" content="#ffffff" />
	<meta name="msapplication-TileImage" content="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/ms-icon-144x144.png" />
	<meta name="theme-color" content="#ffffff" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/apple-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/apple-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/apple-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/apple-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/apple-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/apple-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/apple-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/apple-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/apple-icon-180x180.png" />
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/android-icon-192x192.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/favicon-96x96.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/favicon-16x16.png" />
	<link rel="manifest" href="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>img/favicon/manifest.json" />
	<!-- Fin meta etiquetas favicon -->
	<link rel="preconnect" href="https://www.gstatic.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://maps.googleapis.com">
	<link rel="preconnect" href="https://maps.gstatic.com">
	<!-- Inicio Microdata -->
	<!-- Fin Microdata -->
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function() {
			var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-background"));
			if ("IntersectionObserver" in window) {
			    let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
			      entries.forEach(function(entry) {
			        if (entry.isIntersecting) {
			          entry.target.classList.add("visible");
			          lazyBackgroundObserver.unobserve(entry.target);
			        }
			      });
			    });
			    lazyBackgrounds.forEach(function(lazyBackground) {
			      lazyBackgroundObserver.observe(lazyBackground);
			    });
			}
		});
	</script>
	<script async src="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>js/lazysizes.min.js"></script>
	<script async src="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>js/modernizr-custom.js"></script>
	<script src="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>js/jquery.min.js"></script>
	<script>
        let url_global 	= "<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT); ?>",
        	url_desktop = "<?php echo $url; ?>",
        	url_mobil 	= "<?php echo $url_mobil; ?>",
         	id_form 	= "<?php echo $id_form; ?>",
        	id_page 	= <?php echo $id; ?>,
        	title 		= "<?php echo $title; ?>";
    </script>
    <script src="<?php echo (defined('URL') ? URL : URL_CARPETA_FRONT).JS_APP ?>"></script>