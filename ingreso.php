<?php
  function authenticate()
	{
		header('WWW-Authenticate: Basic realm="Ingrese su Usuario y Contraseña"');
		header('HTTP/1.0 401 Unauthorized');
		?>
			<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
			<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<title>ABM</title>
			<style type="text/css">
				<!--
					.EstDesc{font-family: Tahoma; font-size: 11px; color:#000000;}
					.EstTabla{font-family: Tahoma; font-size: 13px; color:#003300;}
					a{font-family:Tahoma; font-size:11px; color:#000000}
					a:link{text-decoration:none}
					a:visited{text-decoration:none}
					a:hover{text-decoration:underline; color:#003366}
					a:active{text-decoration:none; color:#006699}
				-->
			</style>
			</head>
			<body>
				<div align="center" class="EstDesc">
					No tiene permiso para ver esta página.
				</div>
			</body>
			</html>
		<?php
		exit;
  }
  if (!isset($_SERVER['PHP_AUTH_USER']))
	{
		authenticate();
  } 
  else
	{
		$ingreso = "no";
		while($ingreso!="si")
		{
			$result = mysqli_query($link, "SELECT * FROM admin");
			while($row = mysqli_fetch_array($result))
			{
				if($_SERVER['PHP_AUTH_USER']==$row['usuario']&&$_SERVER['PHP_AUTH_PW']==$row['clave'])
				{
					$ingreso = "si";
				}
			}
			if($ingreso!="si")
			{
				authenticate();
			}
		}
  }
?>