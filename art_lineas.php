<?php
	include("conexion.php");
	include("ingreso.php");
	$id = isset($_GET["id"])?$_GET["id"]:"";
	$idlinea = isset($_GET["idlinea"])?$_GET["idlinea"]:"";
	$opcion = isset($_POST["opcion"])?$_POST["opcion"]:"";
	$novedad = isset($_POST["novedad"])?$_POST["novedad"]:"";
	$linea = isset($_POST["linea"])?$_POST["linea"]:"";
	$public = isset($_POST["public"])?$_POST["public"]:"";
	$flag = 0;
	if($ingreso=="si")
	{
		/*-----------*/
		if(isset($lin))
		{
			header("Location: abmproductos.php?opc=volver&id=".$id);
		}
		/*-----------*/
		include("cabecera.php");
		include("menu.php");
		/*-----------*/
		switch($opcion)
		{
			case 'guardar':
				$linea = str_replace(" ","&nbsp;",$linea);
				$sql = "INSERT INTO linea (idlinea, linea, publico) VALUES ('', '".$linea."', '".$public."');";
				mysqli_query($link, $sql);
				break;
			case 'aceptar':
				$linea = str_replace(" ","&nbsp;",$linea);
				$sql = "UPDATE linea SET linea = '".$linea."', publico = '".$public."' WHERE idlinea = '".$idlinea."'";
				$result = mysqli_query($link, $sql);
				$idlinea="";
				break;
			case 'eliminar':
				$sql = "DELETE FROM linea WHERE idlinea = ".$idlinea."";
				mysqli_query($link, $sql);
				$idlinea="";
				break;
			case 'cancelar':
				$idlinea="";
				break;
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
											<table border="0" cellpadding="0" cellspacing="0" class="tah11nsubmenu">
												<tr>
													<td><img src="thumb.php?image=imagenes/bar_menuinf2_izq.jpg&w=2"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" width="10"></td>
													<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" align="center">
														Línea
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
							<?php
								if($idlinea=="")
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
		<table border="1" cellpadding="0" cellspacing="0" bordercolor="#84B589" align="center" class="tah11" background="thumb.php?image=imagenes/interfaz.jpg&w=6" width="200" height="71">
			<form method="post" name="accesorios">
				<tr>
					<td>
						<?php
							if($idlinea=="")
							{
								?>
								<table border="0" cellpadding="0" cellspacing="0" align="center" class="tah11n">
									<tr>
										<td>
											<table border="0" cellpadding="0" cellspacing="0">
												<tr>
													<td>Línea</td>
												</tr>
												<tr>
													<td><input type="text" name="linea" style="width:140px;" class="tah11"></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<table border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td>Publicar</td>
													<td width="10"></td>
													<td align="right">SI<input type="radio" name="public" value="1" checked class="EstDesc"></td>
													<td align="right">NO<input type="radio" name="public" value="0" class="EstDesc"></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<?php
							}
							else
							{
								$result = mysqli_query($link, "SELECT * FROM `linea` WHERE idlinea = '".$idlinea."' ");
								$row1 = mysqli_fetch_array($result);
								$pub1 = $pub2 =  "";
								if($row1['publico']==1)
								{
									$pub1 = " checked";
								}
								elseif($row1['publico']==0)
								{
									$pub2 = " checked";
								}
								?>
								<table border="0" cellpadding="0" cellspacing="0" class="tah11n" align="center">
									<tr>
										<td>
											<table border="0" cellpadding="0" cellspacing="0">
												<tr>
													<td>Línea</td>
												</tr>
												<tr>
													<td><input type="text" name="linea" style="width:140px;" value="<?php echo $row1['linea']?>" class="tah11"></td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<table border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td>Publicar</td>
													<td width="10"></td>
													<td align="right">SI<input type="radio" name="public" value="1" <?php echo $pub1?> class="EstDesc"></td>
													<td align="right">NO<input type="radio" name="public" value="0" <?php echo $pub2?> class="EstDesc"></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<?php
							}
						?>
					</td>
				</tr>
				<input type="hidden" name="id" value="<?php echo $id?>">
				<input type="hidden" name="idlinea" value="<?php echo $idlinea?>">
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
							<td>Linea</td>
						</tr>
						<?php
							$result = mysqli_query($link, 'SELECT * FROM `linea`');
							while($row = mysqli_fetch_array($result))
							{
								include("color.php");
								if($row['publico']==0)
								{
									$color = ' bgcolor="#C5E77D"';
								}
								?>
								<tr <?php echo $color?>>
									<td>
										<a href="?idlinea=<?php echo $row['idlinea']?>&id=<?php echo $id?>"><?php echo $row['linea']?></a>
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