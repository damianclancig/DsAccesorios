<?php 
	include("conexion.php");
	$idlinea = isset($_GET['idlinea']) ? $_GET['idlinea'] : '';
	$buscar = isset($_POST['buscar']) ? $_POST['buscar'] : '';
	$opcbusc = isset($_POST['opcbusc']) ? $_POST['opcbusc'] : '';
	$sqllinea = "";
	$sqlbus = "";
	$linea = "";
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
			<table border="0" cellpadding="0" cellspacing="0">
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
											<?php
												if($idlinea)
												{
													?>
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
												}
												else
												{
													?>
													<td>
														<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
															<tr>
																<td><img src="thumb.php?image=imagenes/bar_menuinf2_izq.jpg&w=2.5"></td>
																<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2.5" width="10"></td>
																<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2.5" align="center" width="100">
																	<a href="catalogo.php" class="submenu">TODAS</a>
																</td>
																<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2.5" width="10"></td>
																<td><img src="thumb.php?image=imagenes/bar_menuinf2_der.jpg&w=2.5"></td>
															</tr>
														</table>
													</td>
													<?php
												}
												$result = mysqli_query($link, "SELECT * FROM linea WHERE publico = 1");
												$i = 1;
												while($row = mysqli_fetch_array($result))
												{
													if($row['idlinea']==$idlinea)
													{
														?>
														<td>
															<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
																<tr>
																	<td><img src="thumb.php?image=imagenes/bar_menuinf2_izq.jpg&w=2.5"></td>
																	<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2.5" width="10"></td>
																	<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2.5" align="center" width="100">
																		<a href="catalogo.php?idlinea=<?php echo $row['idlinea']?>" class="submenu"><?php echo $row['linea']?></a>
																	</td>
																	<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2.5" width="10"></td>
																	<td><img src="thumb.php?image=imagenes/bar_menuinf2_der.jpg&w=2.5"></td>
																</tr>
															</table>
														</td>
														<?php
													}
													else
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
													}
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
						<table border="0" cellpadding="0" cellspacing="0" background="thumb.php?image=imagenes/bar_menu2.jpg&w=3.4" width="100%" align="center">
							<tr><td height="2"></td></tr>
							<tr>
								<td>
									<table border="0" cellpadding="0" cellspacing="0">
										<form method="post" name="accesorios">
											<tr>
												<td width="10"></td>
												<td>
													<table border="0" cellpadding="0" cellspacing="0" class="tah11">
														<tr>
															<td>Busqueda</td>
															<td width="5"></td>
															<td>
																<select name="opcbusc" class="tah11">
																	<option value="detalle">Detalle</option>
																	<option value="descripcion">Descripción</option>
																</select>
															</td>
															<td width="5"></td>
															<td><input type="text" name="buscar" class="tah11"></td>
															<td width="5"></td>
															<td><a href="#" onClick="Boton()"><img src="imagenes/buscar.jpg" border="0"></a></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr><td height="3"></td></tr>
											<input type="hidden" name="idlinea" value="<?php echo $idlinea?>">
											<input type="hidden" name="opcion">
										</form>
									</table>
								</td>
							</tr>
							<tr><td height="1"></td></tr>
						</table>
					</td>
				</tr>
				<tr><td height="5"></td></tr>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<?php
								if($idlinea)
								{
									$sqllinea = " AND linea.idlinea = ".$idlinea." ";
								}
								if($opcbusc=="detalle")
								{
									$sqlbus = "AND detalle LIKE '%".$buscar."%'";
								}
								if($opcbusc=="descripcion")
								{
									$sqlbus = "AND descripcion LIKE '%".$buscar."%'";
								}
								$res = mysqli_query($link, "SELECT productos.detalle, productos.descripcion, productos.cantidad, material.material, terminacion.terminacion, unidad.unidad, productos.imagen, linea.linea
																		FROM productos, material, terminacion, unidad, linea
																		WHERE productos.idmaterial = material.idmaterial
																		AND productos.idterminacion = terminacion.idterminacion
																		AND productos.idunidad = unidad.idunidad
																		AND productos.idlinea = linea.idlinea
																		".$sqllinea.$sqlbus."
																		ORDER BY productos.idlinea");
								while($row = mysqli_fetch_array($res))
								{
									if($row['linea']!=$linea)
									{
										?>
										<tr>
											<td colspan="2">
												<table border="1" cellpadding="0" cellspacing="0" align="center" width="96.5%" class="tah13n" bordercolor="#006600">
													<tr>
														<td align="center"><?php echo $row['linea']?></td>
													</tr>
												</table>
											</td>
										</tr>
										<?php
									}
									?>
									<tr>
										<td>
											<table border="1" cellpadding="0" cellspacing="3" width="350" height="90" bordercolor="#006600" align="center">
												<tr>
													<td colspan="2" background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.5" class="tah11n">
														<table border="0" cellpadding="0" cellspacing="0">
															<tr>
																<td width="10"></td>
																<td><?php echo $row['detalle']?></td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td background="imagenes/catalogo.jpg" height="100%">
														<table border="0" cellpadding="0" cellspacing="0" class="tah11">
															<tr>
																<td width="10"></td>
																<td>
																	<table border="0" cellpadding="0" cellspacing="0">
																		<tr>
																			<td><?php echo $row['descripcion']?> de <?php echo $row['material']?></td>
																		</tr>
																		<tr>
																			<td>En Color <?php echo $row['terminacion']?></td>
																		</tr>
																		<tr>
																			<td>Caja de <?php echo $row['cantidad']?> <?php echo $row['unidad']?></td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
													</td>
													<td align="center" width="70" bgcolor="#FFFFFF">
														<?php
															if($row['imagen'])
															{
																?>
																<a href="imagenes1/<?php echo $row['imagen']?>"><img src="thumbimg.php?image=imagenes1/<?php echo $row['imagen']?>&w=60" border="0" /></a>
																<?php
															}
														?>
													</td>
												</tr>
											</table>
										</td>
										<?php
											$linea = $row['linea'];
											$row = mysqli_fetch_array($res);
											if($row['linea']!=$linea AND $row['detalle'])
											{
												?>
												<td></td></tr>
												<tr><td height="5"></td></tr>
												<tr>
													<td colspan="2">
														<table border="1" cellpadding="0" cellspacing="0" align="center" width="96.5%" class="tah13n" bordercolor="#006600">
															<tr>
																<td align="center"><?php echo $row['linea']?></td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td>
														<table border="1" cellpadding="0" cellspacing="3" width="350" height="90" bordercolor="#006600" align="center">
															<tr>
																<td colspan="2" background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.5" class="tah11n">
																	<table border="0" cellpadding="0" cellspacing="0" height="10">
																		<tr>
																			<td width="10"></td>
																			<td><?php echo $row['detalle']?></td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td background="imagenes/catalogo.jpg" height="100%">
																	<table border="0" cellpadding="0" cellspacing="0" class="tah11">
																		<tr>
																			<td width="10"></td>
																			<td>
																				<table border="0" cellpadding="0" cellspacing="0">
																					<tr>
																						<td><?php echo $row['descripcion']?> de <?php echo $row['material']?></td>
																					</tr>
																					<tr>
																						<td>En Color <?php echo $row['terminacion']?></td>
																					</tr>
																					<tr>
																						<td>Caja de <?php echo $row['cantidad']?> <?php echo $row['unidad']?></td>
																					</tr>
																				</table>
																			</td>
																		</tr>
																	</table>
																</td>
																<td align="center" width="70" bgcolor="#FFFFFF">
																	<?php
																		if($row['imagen'])
																		{
																			?>
																			<a href="imagenes1/<?php echo $row['imagen']?>"><img src="thumbimg.php?image=imagenes1/<?php echo $row['imagen']?>&w=60" border="0" /></a>
																			<?php
																		}
																	?>
																</td>
															</tr>
														</table>
													</td>
													<?php
														$row = mysqli_fetch_array($res);
													?>
													<td>
														<table border="1" cellpadding="0" cellspacing="3" width="350" height="90" bordercolor="#006600" align="center">
															<tr>
																<td colspan="2" background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.5" class="tah11n">
																	<table border="0" cellpadding="0" cellspacing="0">
																		<tr>
																			<td width="10"></td>
																			<td><?php echo $row['detalle']?></td>
																		</tr>
																	</table>
																</td>
															</tr>
															<tr>
																<td background="imagenes/catalogo.jpg" height="100%">
																	<table border="0" cellpadding="0" cellspacing="0" class="tah11">
																		<tr>
																			<td width="10"></td>
																			<td>
																				<table border="0" cellpadding="0" cellspacing="0">
																					<tr>
																						<td><?php echo $row['descripcion']?> de <?php echo $row['material']?></td>
																					</tr>
																					<tr>
																						<td>En Color <?php echo $row['terminacion']?></td>
																					</tr>
																					<tr>
																						<td>Caja de <?php echo $row['cantidad']?> <?php echo $row['unidad']?></td>
																					</tr>
																				</table>
																			</td>
																		</tr>
																	</table>
																</td>
																<td align="center" width="70" bgcolor="#FFFFFF">
																	<?php
																		if($row['imagen'])
																		{
																			?>
																			<a href="imagenes1/<?php echo $row['imagen']?>"><img src="thumbimg.php?image=imagenes1/<?php echo $row['imagen']?>&w=60" border="0" /></a>
																			<?php
																		}
																	?>
																</td>
															</tr>
														</table>
													</td>
												<?php
											}
											elseif($row['detalle'])
											{
												?>
												<td>
													<table border="1" cellpadding="0" cellspacing="3" width="350" height="90" bordercolor="#006600" align="center">
														<tr>
															<td colspan="2" background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.5" class="tah11n">
																<table border="0" cellpadding="0" cellspacing="0">
																	<tr>
																		<td width="10"></td>
																		<td><?php echo $row['detalle']?></td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td background="imagenes/catalogo.jpg" height="100%">
																<table border="0" cellpadding="0" cellspacing="0" class="tah11">
																	<tr>
																		<td width="10"></td>
																		<td>
																			<table border="0" cellpadding="0" cellspacing="0">
																				<tr>
																					<td><?php echo $row['descripcion']?> de <?php echo $row['material']?></td>
																				</tr>
																				<tr>
																					<td>En Color <?php echo $row['terminacion']?></td>
																				</tr>
																				<tr>
																					<td>Caja de <?php echo $row['cantidad']?> <?php echo $row['unidad']?></td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																</table>
															</td>
															<td align="center" width="70" bgcolor="#FFFFFF">
																<?php
																	if($row['imagen'])
																	{
																		?>
																		<a href="imagenes1/<?php echo $row['imagen']?>"><img src="thumbimg.php?image=imagenes1/<?php echo $row['imagen']?>&w=60" border="0" /></a>
																		<?php
																	}
																?>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr><td height="5"></td></tr>
											<?php
										}
									$linea = $row['linea'];
								}
							?>
						</table>
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
