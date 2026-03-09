<?php
	require_once('./languages/common.php');//Ya tiene session_start();
	require_once('./core/core.php');

	if(isset($_GET['view']))
	{
		if(file_exists(RUTA_CONTROLLER_DIR.'/' . $_GET['view'] . RUTA_CONTROLLER_DIR_DEFAULT))
		{
			include(RUTA_CONTROLLER_DIR.'/' . $_GET['view'] . RUTA_CONTROLLER_DIR_DEFAULT);
		}else{
				require_once(RUTA_ERROR_DIR);
			 }
	}else{
			include(RUTA_DEFAULT_DIR);
		 }