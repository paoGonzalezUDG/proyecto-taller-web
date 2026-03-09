<?php
	/** BLOQUE DE CONFIGURACIÓN Y SEO
	 * Aquí definimos las variables de PHP que se enviarán al archivo 'head.php'.
	 * Sirven para configurar el título de la pestaña, la descripción para Google,
	 * la imagen al compartir en redes sociales y variables de control.
	 */
	$title 				= "Error 504";
	$description 		= "";
	$key 				= "";
	$adsBot_google 		= "index, nofollow"; // Indica a los buscadores que rastreen esta página
	$url 				= "error-504";
	$url_mobil 			= "";
	$link 				= URL.$url;
	$id 				= 7;
	$id_form 			= "";
	$og_updated_time 	= "";
	$og_type 			= "website"; // Tipo de contenido para redes sociales (website o article)
	$og_image 			= "img/logo-head.png"; // Imagen que sale al compartir el link en WhatsApp/Facebook
	$og_image_type 		= "image/png";
	$og_image_width 	= "300";
	$og_image_height 	= "300";
	$type_of_href_nav   = 2; // Define si los enlaces del menú son anclas (#) = 1 o URLs = 2

	/** INCLUSIÓN DEL HEAD
	 * Con 'require_once' traemos todo el código del archivo head.php
	 * que contiene las etiquetas <meta>, <title> y apertura del <head>.
	 */
	require_once (TEMPLATES_HEAD); ?>
		<link rel="preload stylesheet" href="<?php echo URL; ?>css/app.css" as="style" type="text/css" crossorigin="anonymous">
	</head>
	<!-- No eliminar etiqueta </head> -->

	<body id="errorpage">

		<!-- HEADER -->
		<?php require_once (TEMPLATES_HEADER); ?>
		<!-- END HEADER -->

  		<main>
			<div class="container-fluid mt-main-header">
	  			<div class="d-sm-flex justify-content-center align-items-center text-center" id="main">
				    <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center">504</h1>
				    <div class="inline-block align-middle">
				    	<h2 class="ms-3 font-weight-normal lead" id="desc"><?php echo LANG_ERROR_504; ?></h2>
				    </div>
				</div>
	  		</div>
	  	</main>

   		<!-- FOOTER -->
   		<?php require_once (TEMPLATES_FOOTER); ?>
		<!-- END FOOTER -->

	</body>
</html>