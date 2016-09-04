<?php
	include("conexion.php");
	if($opcion=="guardar")
	{
		$cabeceras  = "MIME-Version: 1.0\r\n";
		$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$cabeceras .= "From: CONSULTA DSACCESORIOS\r\n";
		$cabeceras .= "Reply-To: ".$email."\r\n";
		$para = "info@ds-accesorios.com.ar";
		$asunto1 = "Consulta de DS-ACCESORIOS: ".$asunto;
		$mensaje = "<html><head><title>CONSULTA DS-ACCESORIOS</title></head><body>El Sr/Sra. ".$nombre." realiz� una consulta el dia ".date(d)."/".date(m)."/".date(Y)." a las ".date(H).":".date(i).":".date(s).".<p>Consulta:</p><p>".$consulta."</p></body></html>";
		mail($para,$asunto1,$mensaje,$cabeceras);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DS-ACCESORIOS</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<script language="JavaScript" src="funciones.js"></script>
<table border="2" cellpadding="0" cellspacing="0" align="center" bordercolor="#003300" bgcolor="#E8F3E5">
	<tr>
		<td>
			<table border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td><img src="imagenes/superior.jpg" border="0" /></td>
				</tr>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" width="100%" height="23" align="center">
							<tr>
								<td>
									<table border="0" cellpadding="0" cellspacing="0" align="center">
										<tr>
											<td>
												<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
													<tr>
														<td><img src="thumb.php?image=imagenes/bar_menu_izq.jpg&w=1.4"></td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" width="10"></td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" align="center" width="150">
															<a href="index.php" class="menu">INICIO</a>
														</td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" width="10"></td>
														<td><img src="thumb.php?image=imagenes/bar_menu_der.jpg&w=1.4"></td>
													</tr>
												</table>
											</td>
											<td>
												<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
													<tr>
														<td><img src="thumb.php?image=imagenes/bar_menu_izq.jpg&w=1.4"></td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" width="10"></td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" align="center" width="150">
															<a href="catalogo.php" class="menu">CATÁLOGO</a>
														</td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" width="10"></td>
														<td><img src="thumb.php?image=imagenes/bar_menu_der.jpg&w=1.4"></td>
													</tr>
												</table>
											</td>
											<td>
												<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
													<tr>
														<td><img src="thumb.php?image=imagenes/bar_menu_izq.jpg&w=1.4"></td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" width="10"></td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" align="center" width="150">
															<a href="contactenos.php" class="menu">CONTÁCTENOS</a>
														</td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" width="10"></td>
														<td><img src="thumb.php?image=imagenes/bar_menu_der.jpg&w=1.4"></td>
													</tr>
												</table>
											</td>
											<td>
												<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
													<tr>
														<td><img src="thumb.php?image=imagenes/bar_menu_izq.jpg&w=1.4"></td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" width="10"></td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" align="center" width="150">
															<a href="abm.php" class="menu">ADMIN</a>
														</td>
														<td background="thumb.php?image=imagenes/bar_menu.jpg&w=11.5" width="10"></td>
														<td><img src="thumb.php?image=imagenes/bar_menu_der.jpg&w=1.4"></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" background="thumb.php?image=imagenes/bar_menu3.jpg&w=4.7" height="20" align="center" width="100%">
							<tr>
								<td>
									<table border="0" cellpadding="0" cellspacing="0" align="center">
										<tr>
											<td>
												<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
													<tr>
														<td><img src="thumb.php?image=imagenes/bar_menu3_izq.jpg&w=4.7"></td>
														<td background="thumb.php?image=imagenes/bar_menu3.jpg&w=4.7" align="center" width="100">
															<a href="catalogo.php" class="submenu">TODAS</a>
														</td>
														<td><img src="thumb.php?image=imagenes/bar_menu3_der.jpg&w=4.7"></td>
													</tr>
												</table>
											</td>
											<?php
												$result = mysqli_query($link, "SELECT * FROM linea WHERE publico = 1");
												$i = 1;
												while($row = mysqli_fetch_array($result))
												{
													?>
													<td>
														<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
															<tr>
																<td><img src="thumb.php?image=imagenes/bar_menu3_izq.jpg&w=4.7"></td>
																<td background="thumb.php?image=imagenes/bar_menu3.jpg&w=4.7" align="center" width="100">
																	<a href="catalogo.php?idlinea=<?php echo $row['idlinea']?>" class="submenu"><?php echo $row['linea']?></a>
																</td>
																<td><img src="thumb.php?image=imagenes/bar_menu3_der.jpg&w=4.7"></td>
															</tr>
														</table>
													</td>
													<?php
													$i++;
													if($i==6)
													{
														?>
														</tr></table><table border="0" cellpadding="0" cellspacing="0" align="center"><tr>
														<?php
														$i=0;
													}
												}
											?>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" background="thumb.php?image=imagenes/bar_menu2.jpg&w=3.7" width="100%" align="center">
							<tr>
								<td>
									<table border="0" cellpadding="0" cellspacing="0">
										<tr><td height="3"></td></tr>
										<tr>
											<td width="10"></td>
											<td>
												<a href="#" onClick="	if(document.accesorios.nombre.value=='')
																							{
																								alert('Debe completar el nombre');
																								document.accesorios.nombre.focus();
																							}
																							else if(document.accesorios.email.value=='')
																							{
																								alert('Debe completar el E-Mail');
																								document.accesorios.email.focus();
																							}
																							else if(document.accesorios.asunto.value=='')
																							{
																								alert('Debe completar el asunto');
																								document.accesorios.asunto.focus();
																							}
																							else if(document.accesorios.consulta.value=='')
																							{
																								alert('Debe completar el consulta');
																								document.accesorios.consulta.focus();
																							}
																							else
																							{
																								if(verificarmail(document.accesorios.email))
																								{
																									Boton('guardar');
																								}
																							}">
													<img src="imagenes/guardar.jpg" border="0">
												</a>
											</td>
										</tr>
										<tr><td height="3"></td></tr>
									</table>
								</td>
							</tr>
						</table><br>
						<table border="1" cellpadding="0" cellspacing="0" align="center" background="thumb.php?image=imagenes/interfaz.jpg&w=20" width="450" height="236" class="tah11" bordercolor="#84B589">
							<form method="post" name="accesorios">
								<tr>
									<td>
										<table border="0" cellpadding="0" cellspacing="0" align="center">
											<tr>
												<td>
													<table border="0" cellpadding="0" cellspacing="0">
														<tr>
															<td>Nombre</td>
														</tr>
														<tr>
															<td><input type="text" name="nombre" class="tah11" style="width:200px;" /></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td>
													<table border="0" cellpadding="0" cellspacing="0">
														<tr>
															<td>E-Mail</td>
														</tr>
														<tr>
															<td><input type="text" name="email" class="tah11" style="width:200px;" /></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td>
													<table border="0" cellpadding="0" cellspacing="0">
														<tr>
															<td>Asunto</td>
														</tr>
														<tr>
															<td><input type="text" name="asunto" class="tah11" style="width:200px;" /></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td>
													<table border="0" cellpadding="0" cellspacing="0">
														<tr>
															<td>Consulta</td>
														</tr>
														<tr>
															<td><textarea name="consulta" class="tah11" rows="7" style="width:300px;"></textarea></td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<input type="hidden" name="opcion" />
							</form>
						</table><br />
					</td>
				</tr>
				<tr>
					<td><img src="imagenes/intermedio2.jpg" border="0" /></td>
				</tr>
				<tr>
					<td><img src="imagenes/inferior1.jpg" border="0" /></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>
