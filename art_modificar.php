<?php
	include("conexion.php");
	include("ingreso.php");
	$id = isset($_GET["id"])?$_GET["id"]:"";
	$opcion = isset($_POST["opcion"])?$_POST["opcion"]:"";
	$idlinea = isset($_POST["idlinea"])?$_POST["idlinea"]:"";
	$detalle = isset($_POST["detalle"])?$_POST["detalle"]:"";
	$cantidad = isset($_POST["cantidad"])?$_POST["cantidad"]:"";
	$idunidad = isset($_POST["idunidad"])?$_POST["idunidad"]:"";
	$idmaterial = isset($_POST["idmaterial"])?$_POST["idmaterial"]:"";
	$idterminacion = isset($_POST["idterminacion"])?$_POST["idterminacion"]:"";
	$descripcion = isset($_POST["descripcion"])?$_POST["descripcion"]:"";
	$imagen = isset($_POST["imagen"])?$_POST["imagen"]:"";
	$novedad = isset($_POST["novedad"])?$_POST["novedad"]:"";
	if($ingreso=="si")
	{
		/*-----------*/
		$errornov = "no";
		switch($opcion)
		{
			case 'guardar':
				$error = "no";
				if($userfile!="")
				{
					include("subir.php");
				}
				if($error == "no")
				{
					$sql = "INSERT INTO productos (id, idlinea, detalle, cantidad, idunidad, idmaterial, idterminacion, descripcion, imagen, novedad) VALUES ('', '$idlinea', '$detalle', '$cantidad', '$idunidad', '$idmaterial', '$idterminacion', '$descripcion', '$imagen', '$novedad');";
					mysqli_query($link, $sql);
					header ("Location: art_listado.php");
				}
				break;
			case 'aceptar':
				$result = mysqli_query($link, "SELECT * FROM productos WHERE id = '".$id."'");
				$row = mysqli_fetch_array($result);
				$error="no";
				if($userfile!="")
				{
					include("subir.php");
				}
				if($error=="no")
				{
					$sql = "UPDATE productos SET idlinea = '".$idlinea."', detalle = '".$detalle."', cantidad = '".$cantidad."', idunidad = '".$idunidad."', idmaterial = '".$idmaterial."', idterminacion = '".$idterminacion."', descripcion = '".$descripcion."', imagen = '".$imagen."', novedad = '".$novedad."' WHERE id = '".$id."'";
					mysqli_query($link, $sql);
					header ("Location: art_listado.php");
				}
				break;
			case 'cancelar':
				header ("Location: art_listado.php");
				break;
			case 'eliminar':
				$sql = "DELETE FROM productos WHERE id = ".$id."";
				mysqli_query($link, $sql);
				header ("Location: art_listado.php");
				break;
		}
		/*-----------*/
		include("cabecera.php");
		include("menu.php");
		/*-----------*/
		if($errornov=="si")
		{
			?>
			<script>alert('Se ha superado el máximo de destacados.\nDebe deseleccionar uno o más.')</script>
			<?php
		}
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
														MODIFICAR
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
											<table border="0" cellpadding="0" cellspacing="0" class="tah11nsubmenu">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menuinf2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" align="center">
														Producto
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
											<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menu2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menu2.jpg&w=2" align="center">
														<a href="art_terminaciones.php?id=<?php echo $id?>" class="submenu">Terminación</a>
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
							<td width="10"></td>
							<td>
								<a href="#" onClick="	if(document.accesorios.detalle.value=='')
																			{
																				alert('Debe completar el detalle');
																				document.accesorios.detalle.focus();
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
								<a href="#" onClick="	if(document.accesorios.detalle.value=='')
																			{
																				alert('Debe completar el detalle');
																				document.accesorios.detalle.focus();
																			}
																			else
																			{
																				Boton('guardar')
																			}">
									<img src="imagenes/guardarnuevo.jpg" border="0">
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
						</tr>
					</table>
				</td>
			</tr>
		</table><br>
		<?php
			$res = mysqli_query($link, "SELECT * FROM productos WHERE id = ".$id);
			$row1 = mysqli_fetch_array($res);
		?>
		<table class="tah11n cuadroModificacion" align="center">
			<form method="post" name="accesorios" enctype="multipart/form-data">
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" align="center">
							<tr>
								<td>
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td>Linea</td>
										</tr>
										<tr>
											<td>
												<select name="idlinea" style="width:120px;" class="tah11">
													<?php
														$result = mysqli_query($link, "SELECT * FROM linea");
														while($row = mysqli_fetch_array($result))
														{
															if($row1['idlinea']==$row['idlinea'])
															{
																?>
																<option value="<?php echo $row['idlinea']?>" selected><?php echo $row['linea']?></option>
																<?php
															}
															else
															{
																?>
																<option value="<?php echo $row['idlinea']?>"><?php echo $row['linea']?></option>
																<?php
															}
														}
													?>
												</select>
											</td>
										</tr>
									</table>
								</td>
								<td>
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td>Detalle</td>
										</tr>
										<tr>
											<td><input type="text" name="detalle" style="width:115px;" value="<?php echo $row1['detalle']?>" class="tah11"></td>
										</tr>
									</table>
								</td>
								<td>
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td>Material</td>
										</tr>
										<tr>
											<td>
												<select name="idmaterial" style="width:120px;" class="tah11">
													<?php
														$result = mysqli_query($link, "SELECT * FROM material");
														while($row = mysqli_fetch_array($result))
														{
															if($row1['idmaterial']==$row['idmaterial'])
															{
																?>
																<option value="<?php echo $row['idmaterial']?>" selected><?php echo $row['material']?></option>
																<?php
															}
															else
															{
																?>
																<option value="<?php echo $row['idmaterial']?>"><?php echo $row['material']?></option>
																<?php
															}
														}
													?>
												</select>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td>Terminación</td>
										</tr>
										<tr>
											<td>
												<select name="idterminacion" style="width:120px;" class="tah11">
													<?php
														$result = mysqli_query($link, "SELECT * FROM terminacion");
														while($row = mysqli_fetch_array($result))
														{
															if($row1['idterminacion']==$row['idterminacion'])
															{
																?>
																<option value="<?php echo $row['idterminacion']?>" selected><?php echo $row['terminacion']?></option>
																<?php
															}
															else
															{
																?>
																<option value="<?php echo $row['idterminacion']?>"><?php echo $row['terminacion']?></option>
																<?php
															}
														}
													?>
												</select>
											</td>
										</tr>
									</table>
								</td>
								<td>
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td>Cantidad</td>
										</tr>
										<tr>
											<td><input type="text" name="cantidad" style="width:115px;" value="<?php echo $row1['cantidad']?>" class="tah11"></td>
										</tr>
									</table>
								</td>
								<td>
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td>Unidad</td>
										</tr>
										<tr>
											<td>
												<select name="idunidad" style="width:120px;" class="tah11">
													<?php
														$result = mysqli_query($link, "SELECT * FROM unidad");
														while($row = mysqli_fetch_array($result))
														{
															if($row1['idunidad']==$row['idunidad'])
															{
																?>
																<option value="<?php echo $row['idunidad']?>" selected><?php echo $row['unidad']?></option>
																<?php
															}
															else
															{
																?>
																<option value="<?php echo $row['idunidad']?>"><?php echo $row['unidad']?></option>
																<?php
															}
														}
													?>
												</select>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td>Descripción</td>
										</tr>
										<tr>
											<td><textarea name="descripcion" rows="3" style="width:370px;" class="tah11"><?php echo $row1['descripcion']?></textarea></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr><td height="5"></td></tr>
							<tr>
								<td colspan="3">
									<table border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td>
												Imagen
												<input name="userfile" type="file" class="tah11">
											</td>
											<td width="20"></td>
											<td>
												Destacado
												<?php
													if($row1['novedad']=="SI")
													{
														?>
														<input type="checkbox" name="novedad" value="SI" checked>
														<?php
													}
													else
													{
														?>
														<input type="checkbox" name="novedad" value="SI">
														<?php
													}
												?>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<input type="hidden" name="imagen" value="<?php echo $row1['imagen']?>">
				<input type="hidden" name="opcion">
			</form>
		</table><br>
		<?php
			$result = mysqli_query($link, "SELECT imagen FROM productos WHERE id = '".$id."'");
			$row = mysqli_fetch_array($result);
			if($row['imagen']!="")
			{
				?>
				<table border="0" cellpadding="0" cellspacing="0" align="center">
					<tr>
						<td>
							<a target="_blank" href="imagenes1/<?php echo $row1['imagen']?>">
								<img src="imagenes1/<?php echo $row1['imagen']?>" border="0">
							</a>
						</td>
					</tr>
				</table>
				<?php
			}
		/*-----------*/
		include("inferior.php");
	}
	mysqli_close($link);
	function fncnovedad($link)
	{
		$i=0;
		$result = mysqli_query($link, "SELECT * FROM `productos`");
		while($row = mysqli_fetch_array($result))
		{
			if($row['novedad']=="SI")
			{
				$i++;
			}
		}
		if($i==5)
		{
			$max = "SI";
		}
		return $max;
	}
?>
