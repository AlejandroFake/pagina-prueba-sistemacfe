<?php include '../php/seguridadUsuario.php';
header('Content-Type: text/html; charset=utf-8');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Página de Usuario</title>
	<meta name="author" content="Adrian Rosales" />
		 <link rel="stylesheet" type="text/css" href="../style.css" />

	  <link rel="stylesheet" type="text/css" href="../slider/cleanSlider.css" />
        <script type="text/javascript" src="../slider/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="../slider/jquery.cleanSlider.js"></script>
	<!-- Date: 2012-02-08 -->
</head>
<body topmargin="0">
	 <script>
	 //Script para el Slider de imagenes
            $(document).ready(function(){
                var config={};
                config.width =1024;  //pixels
                config.height=200;  //pixels 
                config.intervalTime  =3500; //mili-seconds
                $('.slider').cleanSlider(config);
            })
        </script>
<table width="1024" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr height="220">
		<td bgcolor="black">
			 <div class="slider">
                  <ul>
                      <li><a rel="no-follow"   title="Los 5 pilares"><img src="../img/img1.png" /></a></li>
                      <li><a rel="no-follow"><img src="../img/img2.png" /></a></li>
                      <li><a rel="no-follow"><img src="../img/img3.png" /></a></li>
                      <li><a rel="no-follow"><img src="../img/img4.png" /></a></li>
                      <li><a rel="no-follow"><img src="../img/img5.png" /></a></li>
                </ul>
            </div>   
			
		</td>
	</tr>
	<tr height="40">
		<td>
			<style media="all" type="text/css">@import "../menu/menu_style.css";</style>
				<div>
					<ul class="menu">
						<li class="top"><a href="" class="top_link"><span>Solicitud nueva</span></a>
							<ul class="sub">
								<li><a href="formato.php" target="frame">Servicio</a></li>
								<li><a href="formato2.php" target="frame">Papelería</a></li>
							</ul>
						</li>
						<li class="top"><a href="" class="top_link"><span>Solicitudes Pendientes</span></a>
							<ul class="sub">
								<li><a href="solicitudesPendientes.php" target="frame">Servicios</a></li>
								<li><a href="papeleriaPendientes.php" target="frame">Papelería</a></li>
							</ul>
						</li>
						<li class="top"><a href="" class="top_link"><span>Solicitudes Asignadas</span></a>
							<ul class="sub">
								<li><a href="solicitudesAsignadas.php" target="frame">Servicios</a></li>
								<li><a href="papeleriaAsignadas.php" target="frame">Papelería</a></li>
							</ul>
						</li>
						<li class="top"><a href="" class="top_link"><span>Solicitudes Atendidas</span></a>
							<ul class="sub">
								<li><a href="solicitudesAtendidasPagadas.php" target="frame">Servicios Pagados</a></li>
								<li><a href="solicitudesAtendidasSinPagar.php" target="frame">Servicios Sin pagar</a></li>
								<li><a href="papeleriaAtendidasPagadas.php" target="frame">Papelería Pagados</a></li>
								<li><a href="papeleriaAtendidasSinPagar.php" target="frame">Papelería Sin pagar</a></li>
							</ul>
						</li>
						<li class="top"><a href="" class="top_link"><span>Buscar...</span></a>							
							<ul class="sub">
								<li><a href="buscarServicio.php" target="frame">Servicios</a></li>
								<li><a href="buscarPapeleria.php" target="frame">Papelería</a></li>
							</ul>	
						</li>
						<li class="top">
							<a href="../php/salir.php" class="top_link"><span>Cerrar Sesión</span></a>
						</li>
					</ul>
				</div>
		</td>
		
	</tr>
	<tr>
		<td valign="top" background="../img/fondoCelda.png">
			<iframe name="frame"  width="1024" height="450" scrolling="auto" frameborder="0" src="solicitudesPendientes.php" marginheight="0" marginwidth="0"></iframe><br />
			<center>
                <img src="../img/foot.png" width="60%" height="100" /><br/>
            </center>
		</td>
	</tr>
	
</table>



</body>
</html>

