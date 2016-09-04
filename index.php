<?php 
	include("conexion.php");
	$idlinea = "";
	$sqllinea = "";
	$linea = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>DS-ACCESORIOS</title>
	<link href="estilos.css" rel="stylesheet" type="text/css">
	<script src="funciones.js"></script>
</head>

<body>
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
												$row = "";
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
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td><img src="imagenes/intermedio.jpg" /></td>
							</tr>
							<tr>
								<td background="imagenes/intermediodeg.jpg">
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td>
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<?php
														if($idlinea)
														{
															$sqllinea = " AND linea.idlinea = ".$idlinea." ";
														}
														$res = mysqli_query($link, "SELECT productos.detalle, productos.descripcion, productos.cantidad, material.material, terminacion.terminacion, unidad.unidad, productos.imagen, linea.linea
																								FROM material, terminacion, unidad, linea, productos
																								WHERE productos.novedad = 'SI'
																								AND productos.idmaterial = material.idmaterial
																								AND productos.idterminacion = terminacion.idterminacion
																								AND productos.idunidad = unidad.idunidad
																								AND productos.idlinea = linea.idlinea
																								".$sqllinea."
																								ORDER BY productos.idlinea");
														while($row = mysqli_fetch_array($res))
														{
															if($row['linea']!=$linea)
															{
																?>
																<tr>
																	<td colspan="2">
																		<table border="1" cellpadding="0" cellspacing="0" align="center" width="600" class="tah13n" bordercolor="#006600">
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
																	<table border="1" cellpadding="0" cellspacing="3" width="600" height="50" bordercolor="#006600" align="center">
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
																									<td><?php echo $row['descripcion']?> de <?php echo $row['material']?>; En Color <?php echo $row['terminacion']?>; Caja de <?php echo $row['cantidad']?> <?php echo $row['unidad']?></td>
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
																						<a href="imagenes1/<?php echo $row['imagen']?>"><img src="thumbimg.php?image=imagenes1/<?php echo $row['imagen']?>&w=50" border="0" /></a>
																						<?php
																					}
																				?>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
															<?php
															$linea = $row['linea'];
														}
													?>
												</table>
											</td>
										</tr>
										<tr><td height="5"></td>
</tr>
									</table>
								</td>
							</tr>
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
