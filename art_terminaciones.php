<?php
	include("conexion.php");
	include("ingreso.php");
	$id = isset($_GET["id"])?$_GET["id"]:"";
	$idterminacion = isset($_GET["idterminacion"])?$_GET["idterminacion"]:"";
	$opcion = isset($_POST["opcion"])?$_POST["opcion"]:"";
	$terminacion = isset($_POST["terminacion"])?$_POST["terminacion"]:"";
	$flag = 0;
	if($ingreso=="si")
	{
		/*-----------*/
		switch($opcion)
		{
			case 'guardar':
				$sql = "INSERT INTO terminacion (idterminacion, terminacion) VALUES ('', '".$terminacion."')";
				mysqli_query($link, $sql);
				$idterminacion="";
				break;
			case 'aceptar':
				$sql = "UPDATE terminacion SET terminacion = '".$terminacion."' WHERE idterminacion = '".$idterminacion."'";
				$result = mysqli_query($link, $sql);
				$idterminacion="";
				break;
			case 'eliminar':
				$sql = "DELETE FROM terminacion WHERE idterminacion = '".$idterminacion."'";
				mysqli_query($link, $sql);
				$idterminacion="";
				break;
			case 'cancelar':
				$idterminacion="";
				break;
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
											<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menu3_izq.jpg&w=3.8"></td>
													<td background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.8" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.8" align="center">
														<a href="art_listado.php" class="submenu">LISTADO</a>
													</td>
													<td background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.8" width="10"></td>
													<td><img src="thumb.php?image=imagenes/bar_menu3_der.jpg&w=3.8"></td>
												</tr>
											</table>
										</td>
										<td>
											<table border="0" cellpadding="0" cellspacing="0" class="tah11nsubmenu">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menuinf2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" align="center">
														<?php
															if($id)
															{
																?>
																MODIFICAR
																<?php
															}
															else
															{
																?>
																NUEVO
																<?php
															}
														?>
													</td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" width="10"></td>
													<td><img src="thumb.php?image=imagenes/bar_menuinf2_der.jpg&w=2"></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
							<td>
								<table border="0" cellpadding="0" cellspacing="0" align="right">
									<tr>
										<td>
											<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menu2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" align="center">
														<?php
															if($id)
															{
																?>
																<a href="art_modificar.php?id=<?php echo $id?>" class="submenu">Producto</a>
																<?php
															}
															else
															{
																?>
																<a href="art_nuevo.php" class="submenu">Producto</a>
																<?php
															}
														?>
													</td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" width="10"></td>
													<td><img src="thumb.php?image=imagenes/bar_menu2_der.jpg&w=2"></td>
												</tr>
											</table>
										</td>
										<td>
											<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menu2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" align="center">
														<a href="art_lineas.php?id=<?php echo $id?>" class="submenu">Línea</a>
													</td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" width="10"></td>
													<td><img src="thumb.php?image=imagenes/bar_menu2_der.jpg&w=2"></td>
												</tr>
											</table>
										</td>
										<td>
											<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menu2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" align="center">
														<a href="art_materiales.php?id=<?php echo $id?>" class="submenu">Material</a>
													</td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" width="10"></td>
													<td><img src="thumb.php?image=imagenes/bar_menu2_der.jpg&w=2"></td>
												</tr>
											</table>
										</td>
										<td>
											<table border="0" cellpadding="0" cellspacing="0" class="tah11nsubmenu">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menuinf2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" align="center">
														Terminación
													</td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" width="10"></td>
													<td><img src="thumb.php?image=imagenes/bar_menuinf2_der.jpg&w=2"></td>
												</tr>
											</table>
										</td>
										<td>
											<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menu2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" align="center">
														<a href="art_unidades.php?id=<?php echo $id?>" class="submenu">Unidad</a>
													</td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" width="10"></td>
													<td><img src="thumb.php?image=imagenes/bar_menu2_der.jpg&w=2"></td>
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
								if($idterminacion=="")
								{
									?>
									<td width="10"></td>
									<td>
										<a href="#" onClick="Boton('guardar')">
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
										<a href="#" onClick="Boton('aceptar')">
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
		<table border="1" cellpadding="0" cellspacing="0" bordercolor="#84B589" class="tah11n" align="center" background="thumb.php?image=imagenes/interfaz.jpg&w=5" width="180" height="60">
			<form method="post" name="accesorios">
				<tr>
					<td>
						<?php
							if($idterminacion=="")
							{
								?>
								<table border="0" cellpadding="0" cellspacing="0" align="center">
									<tr>
										<td>Terminación</td>
									</tr>
									<tr>
										<td><input type="text" name="terminacion" style="width:140px;" class="tah11"></td>
									</tr>
								</table>
								<?php
							}
							else
							{
								$result = mysqli_query($link, "SELECT * FROM terminacion WHERE idterminacion = '".$idterminacion."' ");
								$row1 = mysqli_fetch_array($result);
								?>
								<table border="0" cellpadding="0" cellspacing="0" align="center">
									<tr>
										<td>Terminación</td>
									</tr>
									<tr>
										<td><input type="text" name="terminacion" style="width:140px;" value="<?php echo $row1['terminacion']?>" class="tah11"></td>
									</tr>
								</table>
								<?php
							}
						?>
					</td>
				</tr>
				<input type="hidden" name="id" value="<?php echo $id?>">
				<input type="hidden" name="idterminacion" value="<?php echo $idterminacion?>">
				<input type="hidden" name="opcion">
			</form>
		</table><br>
		<table border="0" cellpadding="0" cellspacing="0" class="tah11" align="center">
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
							<td>Terminación</td>
						</tr>
						<?php
							$result = mysqli_query($link, 'SELECT * FROM terminacion');
							while($row = mysqli_fetch_array($result))
							{
								include("color.php")
								?>
								<tr <?php echo $color?>>
									<td><a href="?idterminacion=<?php echo $row['idterminacion']?>&id=<?php echo $id?>"><?php echo $row['terminacion']?></a></td>
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