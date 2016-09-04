<!--
	function Color(color, fila)
	{
		document.getElementById(fila).style.backgroundColor=color
	}
	function recarga()
	{
		window.location = "?idlin="+document.accesorios.idlin.value;
		onChange="location.reload()";
	}
	function Boton(accion, id, id2)
	{
		if(accion=="eliminar")
		{
			var conf = confirm('¿Está seguro que desea eliminar?')
			if(!conf)
			{
				return false;
			}
		}
		if(accion=="motivoeliminar")
		{
			var conf = confirm('¿Está seguro que desea eliminar?')
			if(!conf)
			{
				return false;
			}
			document.accesorios.motivo.value = prompt('¿Cual es el Motivo?','');
		}
		if(accion=="aceptar")
		{
			var conf = confirm('¿Está seguro que desea modificar?')
			if(!conf)
			{
				return false;
			}
		}
		if(id)
		{
			document.accesorios.id.value = id;
		}
		if(id2)
		{
			document.accesorios.id2.value = id2;
		}
		document.accesorios.opcion.value = accion;
		document.accesorios.submit();
	}
	function ConvertBR(text)
	{
		var output = "";
		var input = text;
		for (var i = 0; i < input.length; i++)
		{
			if ((input.charCodeAt(i) == 13) && (input.charCodeAt(i + 1) == 10))
			{
				i++;
				output += "<BR>";
			}
			else
			{
				output += input.charAt(i);
			}
		}
		return(output);
	}
	function verificarmail(mail)
	{
		pat=/^[\w\_\.��]{2,255}@[\w]{2,255}\.[a-z]{1,3}\.?[a-z]{0,3}$/;
		if(!pat.test(mail.value))
		{
			alert("Introduzca un E-mail v�lido");
			mail.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
//-->
