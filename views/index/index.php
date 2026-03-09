<?php
	/** BLOQUE DE CONFIGURACIÓN Y SEO
	 * Aquí definimos las variables de PHP que se enviarán al archivo 'head.php'.
	 * Sirven para configurar el título de la pestaña, la descripción para Google,
	 * la imagen al compartir en redes sociales y variables de control.
	 */
	$title 				= "Inicio";
	$description 		= "";
	$key 				= "";
	$adsBot_google 		= "index, follow"; // Indica a los buscadores que rastreen esta página
	$url 				= "";
	$url_mobil 			= "";
	$link 				= URL.$url;
	$id 				= 1;
	$id_form 			= "home";
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
		<link rel="preload stylesheet" href="<?php echo URL; ?>css/home.css" as="style" type="text/css" crossorigin="anonymous">
	</head>
	<!-- No eliminar etiqueta </head> -->

	<body id="homePage">

		<!-- HEADER -->
		<?php require_once (TEMPLATES_HEADER); ?>
		<!-- END HEADER -->

		<main>
			<!-- TU CODIGO -->
			<h2 class="pt-5 px-3">BODY</h2>
			<p class="pb-5 px-3">Aquí ponemos todas nuestras secciones como: banner, mi experiencia, habilidades,sobre mí, proyectos, recomendaciones, formulario de contacto, etc. </p>
			<!-- END TU CODIGO -->
		</main>

		<!-- FOOTER -->
   		<?php require_once (TEMPLATES_FOOTER); ?>
		<!-- END FOOTER -->

		<!-- LIBRERIAS -->
		<script src="<?php echo URL ?>js/home.js"></script>
		<!-- END LIBRERIAS -->
	</body>
</html>