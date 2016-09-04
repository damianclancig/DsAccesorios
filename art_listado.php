<?php
	include("conexion.php");
	include("ingreso.php");
	$opcion = isset($_POST["opcion"])?$_POST["opcion"]:"";
	$id = isset($_POST["id"])?$_POST["id"]:"";
	$idlin = "";
	$opcbusc = "";
	$sqlbus = "";
	$flag = "";
	$linea = "";
	if($ingreso=="si")
	{
		/*-----------*/
		if($opcion=="modificar")
		{
			header("Location: art_modificar.php?id=".$id);
		}
		if($opcion=="eliminar")
		{
			mysqli_query($link, "DELETE FROM productos WHERE id = ".$id."");
		}
		if($idlin!="")
		{
			$sql = "WHERE idlinea = ".$idlin." ";
		}
		else
		{
			$sql = "";
		}
		if($opcbusc=="detalle")
		{
			if($sql=="")
			{
				$sqlbus = "WHERE detalle LIKE '%".$buscar."%'";
			}
			else
			{
				$sqlbus = "AND detalle LIKE '%".$buscar."%'";
			}
		}
		if($opcbusc=="descripcion")
		{
			if($sql=="")
			{
				$sqlbus = "WHERE descripcion LIKE '%".$buscar."%'";
			}
			else
			{
				$sqlbus = "AND descripcion LIKE '%".$buscar."%'";
			}
		}
		/*-----------*/
		include("cabecera.php");
		include("menu.php");
		/*-----------*/
//		echo "AAAAAA: " . $id . " BBBBBBB: ". $opcion;
		?>
		<table border="0" cellpadding="0" cellspacing="0" background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.8" width="98%" align="center">
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
											LISTADO
										</td>
										<td background="thumb.php?image=imagenes/bar_menuinf2.jpg&w=2" width="10"></td>
										<td><img src="thumb.php?image=imagenes/bar_menuinf2_der.jpg&w=2"></td>
									</tr>
								</table>
							</td>
							<td>
								<table border="0" cellpadding="0" cellspacing="0" class="tah13nb">
									<tr>
										<td><img src="thumb.php?image=imagenes/bar_menu3_izq.jpg&w=3.8"></td>
										<td background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.8" width="10"></td>
										<td background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.8" align="center">
											<a href="art_nuevo.php" class="submenu">NUEVO</a>
										</td>
										<td background="thumb.php?image=imagenes/bar_menu3.jpg&w=3.8" width="10"></td>
										<td><img src="thumb.php?image=imagenes/bar_menu3_der.jpg&w=3.8"></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" background="thumb.php?image=imagenes/bar_menu2.jpg&w=6.4" width="98%" align="center">
			<tr>
				<td>
					<table border="0" cellpadding="0" cellspacing="0">
						<tr><td height="3"></td></tr>
						<tr>
							<td width="10"></td>
							<td>
								<a href="#" onClick="Boton('modificar', idarticulo)">
									<img src="imagenes/modificar.jpg" border="0">
								</a>
							</td>
							<td width="10"></td>
							<td>
								<a href="#" onClick="Boton('eliminar', idarticulo)">
									<img src="imagenes/eliminar.jpg" border="0">
								</a>
							</td>
							<td width="30"></td>
							<td id="info" class="tah11">Seleccione un Artículo.</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<table border="0" cellpadding="0" cellspacing="0">
						<form method="post" name="accesorios">
							<tr>
								<td width="10"></td>
								<td>
									<table border="0" cellpadding="0" cellspacing="0" class="tah11">
										<tr>
											<td>Linea</td>
											<td>
												<select name="idlin" class="tah11" onChange="recarga()">
													<option value="">TODAS</option>
													<?php
														$result = mysqli_query($link, "SELECT * FROM linea");
														while($row = mysqli_fetch_array($result))
														{
															if($row['idlinea']==$idlin)
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
											<td width="30"></td>
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
											<td><a href="#" onClick="Boton('')"><img src="imagenes/buscar.jpg" border="0"></a></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr><td height="3"></td></tr>
							<input type="hidden" name="id">
							<input type="hidden" name="opcion">
						</form>
					</table>
				</td>
			</tr>
		</table><br>
		<table border="0" cellpadding="0" cellspacing="0" width="98%" align="center">
			<tr>
				<td width="10" height="10" background="imagenes/bizqsup.jpg"></td>
				<td background="imagenes/bsup.jpg"></td>
				<td width="10" background="imagenes/bdersup.jpg"></td>
			</tr>
			<tr>
				<td background="imagenes/bizq.jpg"></td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0" bordercolor="#009933" width="100%" class="tah11">
						<tr style="font-weight:bold; color:#E1B54C" bgcolor="#006633">
							<td width="5" class="tah12n"></td>
							<td>Detalle</td>
							<td width="10"></td>
							<td width="2" class="separador"></td>
							<td width="5"></td>
							<td>Cantidad</td>
							<td width="10"></td>
							<td width="2" class="separador"></td>
							<td width="5"></td>
							<td>Material</td>
							<td width="10"></td>
							<td width="2" class="separador"></td>
							<td width="5"></td>
							<td>Terminación</td>
							<td width="10"></td>
							<td width="2" class="separador"></td>
							<td width="5"></td>
							<td>Descripción</td>
						</tr>
						<?php
							$result = mysqli_query($link, 'SELECT * FROM productos '.$sql.$sqlbus.' ORDER BY idlinea, id ASC');
							while($row = mysqli_fetch_array($result))
							{
								include("color.php");
								if($linea!=$row['idlinea'])
								{
									$result1 = mysqli_query($link, "SELECT * FROM linea WHERE idlinea = ".$row['idlinea']);
									$row1 = mysqli_fetch_array($result1);
									if($row1['publico']==0)
									{
										$lincol = ' bgcolor="#C5E77D"';
									}
									elseif($row1['publico']==1)
									{
										$lincol = ' bgcolor="#D2FFD2"';
									}
									?>
									<tr>
										<td colspan="18" align="center" <?php echo $lincol?> class="tah13n">
											<?php echo $row1['linea']?>
										</td>
									</tr>
									<?php
								}
								?>
								<tr <?php echo $color?> onClick="idarticulo=<?php echo $row['id']?>; document.getElementById('info').innerHTML = 'Artículo Seleccionado: <?php echo $row['detalle']?>'">
									<td width="5"></td>
									<td>
										<a href="#"><?php echo $row['detalle']?></a>
									</td>
									<td width="10"></td>
									<td width="2" class="separador"></td>
									<td width="5"></td>
									<td>
										<a href="#">
											<?php
												$result1 = mysqli_query($link, 'SELECT * FROM `unidad` WHERE idunidad = ' . $row['idunidad']);
												$row1 = mysqli_fetch_array($result1);
												echo $row['cantidad']." ".$row1['unidad'];
											?>
										</a>
									</td>
									<td width="10"></td>
									<td width="2" class="separador"></td>
									<td width="5"></td>
									<td>
										<a href="#">
											<?php
												$result1 = mysqli_query($link, 'SELECT * FROM `material` WHERE idmaterial = ' . $row['idmaterial']);
												$row1 = mysqli_fetch_array($result1);
												echo $row1['material'];
											?>
										</a>
									</td>
									<td width="10"></td>
									<td width="2" class="separador"></td>
									<td width="5"></td>
									<td>
										<a href="#">
											<?php
												$result1 = mysqli_query($link, 'SELECT * FROM `terminacion` WHERE idterminacion = ' . $row['idterminacion']);
												$row1 = mysqli_fetch_array($result1);
												echo $row1['terminacion'];
											?>
										</a>
									</td>
									<td width="10"></td>
									<td width="2" class="separador"></td>
									<td width="5"></td>
									<td>
										<a href="#">
											<?php echo $row['descripcion']?>
										</a>
									</td>
								</tr>
								<?php
								$linea=$row['idlinea'];
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
