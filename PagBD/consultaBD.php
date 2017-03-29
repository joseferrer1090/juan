<!DOCTYPE html>
<html lang="en">
<head>
<title>Servicios</title>
<meta charset="utf-8">
<link rel="icon" href="../images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="../css/style.css">

</head>
<body class="body">
<center>

	 <div class="banner">
		 <table width="900px" align="center">
		 <td width="560px"><h1 class="brand_name"><a href="./">Clisoft<font color="#888888" size="5"> .SA</font></a></h1></td>
		 <td align="rigth">Sistema de Informacion Web para Historial Clinico</td></tr>
		 </table>
	 </div>
	 <div class="azul"></div>
     <div class="menu">
     <table width="900px" heigth="60px" align="center">
     	<tr>
     	<td width="50px"><a class="color1" href="../index.php">Inicio | </a></td>
     	<td width="50px"><a class="color1" href="../registro.php">Registro | </a></td>
     	<td width="50px"><a class="color1" href="../servicios.php">Servicios | </a></td>
     	<td width="50px"><a class="color1" href="../sesion.php">Sesion | </a></td>
     	<td width="200px"></td>
     	</tr>
     </table>
     </div>
      <div class="white1">
      <br>
          
          <?php
			// se incluye el archivo de las clases que contiene el metodo de registro
			require_once( "../clases/clases.php" );
			// creamos un objeto instanciando la clase Clase
			$objClases = new Clases();
			// en la variable $respuesta guardamos lo que nos devuelva la consulta
			$respuesta = $objClases->consulta( $_POST["documento"]);
			// realizamos una condicion, si $respuesta es 1 se inserto correctamente, de lo contrario ocurrio un error
			if( $respuesta == 1 ){
			 echo "<h2>Consulta Exitosa</h2>";
                 echo "<strong>Tipo de Documento: </strong>".$_SESSION['tipodocumento']."<br>";
                 echo "<strong>Documento: </strong>".$_SESSION['documento']."<br>";
                 echo "<strong>Nombres: </strong>".$_SESSION['nombres']."<br>";
                 echo "<strong>Primer Apellido: </strong>".$_SESSION['primerApellido']."<br>";
                 echo "<strong>Segundo Apellido:</strong>".$_SESSION['segundoApellido']."<br>";
                 echo "<strong>Numero de Celular: </strong>".$_SESSION['celular']."<br>";
                 echo "<strong>Numero de Estrato: </strong>".$_SESSION['estrato']."<br>";
                 echo "<strong>Correo Electronico:</strong>".$_SESSION['correo']."<br>";
                 echo "<strong>Direccion de Residencia: </strong>".$_SESSION['direccion']."<br>";
			}else{
			 echo "<h2>Error al Consultar los Datos</h2>";
			}

			?>
          
     </div>
     <div class="info">
        
     </div>
     <div class="pie">
     </div>
     <div class="footer">
     </div>
</center>
</body>
</html>