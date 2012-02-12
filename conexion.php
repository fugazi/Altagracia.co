<? $host_db = "localhost";//Dirección

	$user_db = "technoal_ag";//Usuario

	$pass_db = "saludyvida2011";//Contraseña

	$name_db = "technoal_altagracia2";//Nombre de la base de datos, no tienes porque cambiarlo

    mysql_connect ("$host_db","$user_db","$pass_db") or die ("No se puede conectar con el servidor SQL");

    mysql_select_db ("$name_db") or die ("No se puede seleccionar base de datos."); ?>