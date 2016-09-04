<?php
	include("conexion.php");
	include("ingreso.php");
	$opcion = isset($_POST["opcion"])?$_POST["opcion"]:"";
	$idadmin = isset($_POST["idadmin"])?$_POST["idadmin"]:"";
	$usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
	$clave = isset($_POST["clave"])?$_POST["clave"]:"";
	if($ingreso=="si")
	{
		/*-----------*/
		if($opcion=="guardar")
		{
			mysqli_query($link, "INSERT INTO admin (idadmin, usuario, clave) VALUES ('', '".$usuario."', '".$clave."')");
			header("Location: usuarios.php");
		}
		if($opcion=="aceptar")
		{
			mysqli_query($link, "UPDATE admin SET usuario = '".$usuario."', clave = '".$clave."' WHERE idadmin = '".$idadmin."'");
			header("Location: usuarios.php");
		}
		if($opcion=="eliminar")
		{
			mysqli_query($link, "DELETE FROM admin WHERE idadmin = '".$idadmin."'");
			header("Location: usuarios.php");
		}
		if($opcion=="cancelar")
		{
			header("Location: usuarios.php");
		}
		/*-----------*/
		include("cabecera.php");
		include("menu.php");
		/*-----------*/
		?>
		<table border="0" cellpadding="0" cellspacing="0" background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.8" width="98%" align="center">
			<tr>
				<td>
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td>
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td>
											<table border="0" cellpadding="0" cellspacing="0" class="tah11nsubmenu">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menuinf2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" align="center">
														USUARIOS
													</td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" width="10"></td>
													<td><img src="thumb.php?image=imagenes/bar_menuinf2_der.jpg&w=2"></td>
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
		</table>
		<table border="0" cellpadding="0" cellspacing="0" background="thumb.php?image=imagenes/bar_menu2.jpg&w=3.5" width="98%" height="28" align="center">
			<tr>
				<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0">
						<tr><td height="3"></td></tr>
						<tr>
							<?php
								if(!$idadmin)
								{
									?>
									<td width="10"></td>
									<td>
										<a href="#" onClick="	if(document.accesorios.usuario.value == '')
																					{
																						alert('Complete el nombre de usuario.');
																						document.accesorios.usuario.focus();
																					}
																					else if(document.accesorios.clave.value == '')
																					{
																						alert('Complete la clave.');
																						document.accesorios.clave.focus();
																					}
																					else
																					{
																						Boton('guardar')
																					}">
											<img src="imagenes/guardar.jpg" border="0">
										</a>
									</td>
									<?php
								}
								else
								{
									?>
									<td width="10"></td>
									<td>
										<a href="#" onClick="	if(document.accesorios.usuario.value == '')
																					{
																						alert('Complete el nombre de usuario.');
																						document.accesorios.usuario.focus();
																					}
																					else if(document.accesorios.clave.value == '')
																					{
																						alert('Complete la clave.');
																						document.accesorios.clave.focus();
																					}
																					else
																					{
																						Boton('aceptar')
																					}">
											<img src="imagenes/guardar.jpg" border="0">
										</a>
									</td>
									<td width="10"></td>
									<td>
										<a href="#" onClick="Boton('cancelar')">
											<img src="imagenes/cancelar.jpg" border="0">
										</a>
									</td>
									<td width="10"></td>
									<td>
										<a href="#" onClick="Boton('eliminar')">
											<img src="imagenes/eliminar.jpg" border="0">
										</a>
									</td>
									<?php
								}
							?>
						</tr>
					</table>
				</td>
			</tr>
		</table><br>
		<table border="1" cellpadding="0" cellspacing="0" bordercolor="#84B589" class="tah11n" align="center" background="thumb.php?image=imagenes/interfaz.jpg&w=7.3" width="170" height="90">
			<form method="post" name="accesorios">
				<?php
				if($idadmin)
				{
					$result = mysqli_query($link, "SELECT * FROM admin WHERE idadmin = '".$idadmin."'");
					$row = mysqli_fetch_array($result);
					?>
					<tr>
						<td>
							<table border="0" cellpadding="0" cellspacing="0" align="center">
								<tr>
									<td>Usuario</td>
								</tr>
								<tr>
									<td><input type="text" name="usuario" value="<?php echo $row['usuario']?>" class="tah11"></td>
								</tr>
								<tr>
									<td>Clave</td>
								</tr>
								<tr>
									<td><input type="text" name="clave" value="<?php echo $row['clave']?>" class="tah11"></td>
								</tr>
							</table>
						</td>
					</tr>
					<?php
				}
				else
				{
					?>
					<tr>
						<td>
							<table border="0" cellpadding="0" cellspacing="0" align="center">
								<tr>
									<td>Usuario</td>
								</tr>
								<tr>
									<td><input type="text" name="usuario" value="<?php echo $row['usuario']?>" class="tah11"></td>
								</tr>
								<tr>
									<td>Clave</td>
								</tr>
								<tr>
									<td><input type="text" name="clave" value="<?php echo $row['clave']?>" class="tah11"></td>
								</tr>
							</table>
						</td>
					</tr>
					<?php
				}
				?>
				<input type="hidden" name="idadmin" value="<?php echo $row['idadmin']?>">
				<input type="hidden" name="opcion">
			</form>
		</table><br>
		<table border="0" cellpadding="0" cellspacing="0" align="center" class="tah11">
			<tr>
				<td width="10" height="10" background="imagenes/bizqsup.jpg"></td>
				<td background="imagenes/bsup.jpg"></td>
				<td width="10" background="imagenes/bdersup.jpg"></td>
			</tr>
			<tr>
				<td background="imagenes/bizq.jpg"></td>
				<td>
					<table border="0" cellpadding="0" cellspacing="0">
						<tr style="font-weight:bold; color:#E1B54C" bgcolor="#006633">
							<td>Usuario</td>
							<td width="10"></td>
							<td width="2" class="separador"></td>
							<td width="5"></td>
							<td>Clave</td>
						</tr>
						<?php
							$result = mysqli_query($link, "SELECT * FROM admin WHERE idadmin <> 1");
							while($row = mysqli_fetch_array($result))
							{
								include("color.php");
								?>
								<tr <?php echo $color?>>
									<td>
										<a href="?idadmin=<?php echo $row['idadmin']?>">
											<?php echo $row['usuario']?>
										</a>
									</td>
									<td width="10"></td>
									<td width="2" class="separador"></td>
									<td width="5"></td>
									<td>
										<a href="?idadmin=<?php echo $row['idadmin']?>">
											<?php echo $row['clave']?>
										</a>
									</td>
								</tr>
								<?php
							}
						?>
					</table>
				</td>
				<td background="imagenes/bder.jpg"></td>
			</tr>
			<tr>
				<td height="10" background="imagenes/bizqinf.jpg"></td>
				<td background="imagenes/binf.jpg"></td>
				<td background="imagenes/bderinf.jpg"></td>
			</tr>
		</table>
		<?php
		/*-----------*/
		include("inferior.php");
	}
	mysqli_close($link);
?>
