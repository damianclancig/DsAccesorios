<?php 
	//if($opc)
	//{
		//datos del arhivo
		$nombre_archivo = $HTTP_POST_FILES['userfile']['name'];
		$tipo_archivo = $HTTP_POST_FILES['userfile']['type'];
		$tamano_archivo = $HTTP_POST_FILES['userfile']['size'];
		//compruebo si las características del archivo son las que deseo
		if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "jpg") || strpos($tipo_archivo, "bmp") )))
		{
			$error = "si";
		}
		else
		{
			$directorio = "$_SERVER[DOCUMENT_ROOT]/imagenes1/";
			if(!is_dir("$directorio")) mkdir($directorio,0777);
			$nombre_archivo = ereg_replace("[^a-z0-9._]", "",str_replace(" ", "_", str_replace("%20", "_", strtolower($nombre_archivo))));
			$dir = $directorio . $nombre_archivo;
			if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $dir))
			{
				$imagen = $nombre_archivo;
				$error = "no";
			}
			else
			{
				$error = "si";
			}
		}
?>