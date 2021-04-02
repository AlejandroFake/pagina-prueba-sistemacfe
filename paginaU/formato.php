<?php include '../php/seguridadUsuario.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>formato de solicitud de servicio</title>
	<meta name="author" content="Adrian Rosales" />
	<!-- Validación del formulario -->
	<script language="JavaScript">
		function validar()
		{
			if(servicios.area.value=="0")
			{
				alert("Seleccione un área.");
				servicios.area.focus();
				return;
			}
			if((servicios.servicio[0].checked==false)&&(servicios.servicio[1].checked==false)&&
			(servicios.servicio[2].checked==false)&&(servicios.servicio[3].checked==false)&&
			(servicios.servicio[4].checked==false)&&(servicios.servicio[5].checked==false)&&
			(servicios.servicio[6].checked==false)&&(servicios.servicio[7].checked==false)&&
			(servicios.servicio[8].checked==false)&&(servicios.servicio[9].checked==false)&&
			(servicios.servicio[10].checked==false))
			{
				alert("Seleccione algún servicio.");
				return;
			}
			
  			if(servicios.descripcion.value=="")
			{
				alert("Escriba la descripción del servicio que está solicitando.");
				servicios.descripcion.focus();
				return;
			}
			if(servicios.solicitante.value=="")
			{
				alert("Falta el nombre del solicitante.");
				servicios.solicitante.focus();
				return;
			}
			if(servicios.areaUsuaria.value=="")
			{
				alert("Falta el nombre del área usuaria.");
				servicios.areaUsuaria.focus();
				return;
			}
			servicios.submit();
		}
</script>
</head>
<body topmargin="10" bgcolor="white">

	<form action="../php/solicitar.php" name="servicios" method="post" >
					
	<table align="center" width="850"  cellpadding="1" cellspacing="0"  style="border: solid; border-color: darkgreen;"><!-- Inicio tabla estructura-->
		<tr>
			<td>
				<img src="../img/logoCFE.jpg"/>
			</td>
			<td align="right">	
				División de Distribución Peninsular<br />
				Subgerencia de Trabajo Y Servicios Administrativos<br />
				Departamento de Servicios Generales
			</td>
		</tr>
		<tr>
			<td colspan="2" valign="top" align="center"><br /><br />
				<b>COMISION FEDEREAL DE ELECTRICIDAD<br />
					SOLICITUD DE SERVICIO				
				</b>
			</td>
		</tr>
		<tr>
			<td colspan="2" valign="top">
				Centro de costo - Área:<select name="area" style="border-color: darkgreen;">
						<option value="0" checked>Seleccione un área</option>
                        <option value="18509">18509 - Org. Interno de Control</option>
						<option value="49001">49001 - Gerencia General DDP</option>
						<option value="49002">49002 - Auxiliar de la Gcia.</option>
						<option value="49003">49003 - Comunicación Social</option>
						<option value="49004">49004 - Métodos y Procedimientos</option>
						<option value="49005">49005 - Control de Gestión</option>
						<option value="49006">49006 - Jurídico</option>
						<option value="49007">49007 - Empresa Inteligente</option>
						<option value="49008">49008 - Redes</option>
						<option value="49009">49009 - Sistemas</option>
						<option value="49010">49010 - Electrificación Rural</option>
						<option value="49011">49011 - Administración Divisional</option>
						<option value="49012">49012 - Concursos y Contratos</option>
						<option value="49013">49013 - Compras Divnal.</option>
						<option value="49014">49014 - Tráfico Divnal.</option>
						<option value="49015">49015 - Contabilidad Divnal.</option>
						<option value="49016">49016 - Activo Fijo Divnal.</option>
						<option value="49017">49017 - Tesorería Divnal.</option>
						<option value="49018">49018 - Pagos Divnal.</option>
						<option value="49019">49019 - Presupuestos Divnal.</option>
						<option value="49020">49020 - Depto. Almacenes</option>
						<option value="49021">49021 - Almacén Divnal.</option>
						<option value="49022">49022 - Subgerencia Trabajo</option>
						<option value="49023">49023 - Capacitación Divnal.</option>
						<option value="49024">49024 - Personal Divnal.</option>
						<option value="49025">49025 - Trabajo Divnal.</option>
						<option value="49026">49026 - Seguridad e Higiene Divnal.</option>
						<option value="49027">49027 - Seguridad Social Divnal.</option>
						<option value="49028">49028 - Servicios Generales Divnal.</option>
						<option value="49029">49029 - Subgerencia de Distribución</option>
						<option value="49030">49030 - Ingeniería de Distribución</option>
						<option value="49031">49031 - Subestaciones Divnal.</option>
						<option value="49032">49032 - Control y Estadística Divnal.</option>
						<option value="49033">49033 - Operación Divnal.</option>
						<option value="49034">49034 - Planeación Divnal.</option>
						<option value="49035">49035 - Proyectos Divnal.</option>
						<option value="49036">49036 - Construcción Divnal.</option>
						<option value="49037">49037 - Subcia. Comcial. Divnal.</option>
						<option value="49038">49038 - Atención a Clientes Divnal.</option>
						<option value="49039">49039 - Sistema Comercial Divnal.</option>
						<option value="49040">49040 - Cobranza Divnal.</option>
						<option value="49041">49041 - Atención a Grandes Clientes</option>
						<option value="49042">49042 - Centro de Atención Tel. Regional (CENTER)</option>
						<option value="49043">49043 - Medición y Servicios</option>
						<option value="49286">49286 - Comunicaciones y Control</option>
					</select>
			</td>
		</tr>
		<tr>
			<td valign="top" width="425">
				<b>Mobiliario y Equipo de oficina</b><br />
				<input type="radio" name="servicio" value="Reparación Muebles de Oficina" />Reparación Muebles de Oficina<br />
				<input type="radio" name="servicio" value="Reparación Cerraduras y llaves" />Reparación Cerraduras y llaves<br />
				<input type="radio" name="servicio" value="Máquinas de oficina" />Máquinas de oficina<br />
				<input type="radio" name="servicio" value="Otros" />Otros<br />
			</td>
			<td valign="top" width="425">
				<b>Edificio e Instalaciones</b><br />
				<input type="radio" name="servicio" value="Limpieza" />Limpieza<br />
				<input type="radio" name="servicio" value="Trabajos Eléctricos" />Trabajos Eléctricos<br />
				<input type="radio" name="servicio" value="Aire Acondicionado" />Aire Acondicionado<br />
				<input type="radio" name="servicio" value="Fontanería" />Fontanería<br />
				<input type="radio" name="servicio" value="Vidrios Reposición" />Vidrios Reposición<br />
				<input type="radio" name="servicio" value="Pintura" />Pintura<br />
				<input type="radio" name="servicio" value="Otros" />Otros<br />
			</td>
		</tr>
		<tr>
			<td colspan="2" valign="top">
				<b>Descripción:</b><br />
				<textarea style="border-color: darkgreen;" name="descripcion" cols="110" rows="6"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Solicitante:
				<input style="border-color: darkgreen;" type="text" name="solicitante" size="50" />
			</td>
			<td>
				Vo. Bo.:
				<input type="text" style="border-color: darkgreen;" name="areaUsuaria" size="50" />
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input style="background-color: darkgreen;" type="button" value="Enviar" onclick="validar()"/>
			</td>
		</tr>
		</table><!-- Fin tabla contenedora-->
    </form>
</body>
</html>

