<?php

	function con($valor)
	{
	
		$host = '10.19.158.70';    //nombre del servidor
		$user = 'root';         //usuario
		$pwd = 'hosting';          //contrasenia
		
		global $link;
		
		if($valor == 1)
		{
		
			$link = mysql_connect($host,$user,$pwd);
			
			mysql_query('SET NAMES "utf8"');
			
			if(!$link)
			{
			
				die('Falló la conexión a la Base de Datos: ' . mysql_error());
			
			}
			
			$bd = mysql_select_db('trabajo_solicitudes',$link); //Selector de base de datos
			
			if(!$bd)
			{
			
				die('Falló la selección de la Base de Datos: ' . mysql_error());
			
			}
		
		}
		
		if($valor == 0)
		{
		
			$link = mysql_connect($host,$user,$pwd);
			
			mysql_close($link);
		
		}
	
	}

	function bitacora ($rpe,$consulta,$sql,$tabla){
	$fecha = date('Y-m-d');
	$hora  = date('H:i:s');
	$sql = addslashes($sql);
	$sqlBitacora = "INSERT INTO bitacoras (fecha,hora,rpe,accion,consulta,tabla) VALUES 
	               ('$fecha','$hora','$rpe','$consulta','$sql','$tabla')";
	//echo $sqlBitacora;
	mysql_query($sqlBitacora);
	}

?>
