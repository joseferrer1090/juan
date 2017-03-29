<!DOCTYPE html>
<html lang="en">
<head>
<title>Servicios</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="css/style.css">

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
     	<td width="50px"><a class="color1" href="index.php">Inicio | </a></td>
     	<td width="50px"><a class="color1" href="registro.php">Registro | </a></td>
     	<td width="50px"><a class="color1" href="servicios.php">Servicios | </a></td>
     	<td width="50px"><a class="color1" href="sesion.php">Sesion | </a></td>
     	<td width="200px"></td>
     	</tr>
     </table>
     </div>
      <div class="white1">
      <br>
          <h2>Consulta Usuario</h2><br>
          <form method="post" action="pagBD/consultaBD.php" autocomplete="off">
          <table width="800px">
          <tr><td height="30px" align="center">Digite el numero de documento del usuario:</td></tr>
          <tr><td align="center"><input class="input" type="text" placeholder="Solo numeros" name="documento" id="documento"/></td></tr>
          <tr><td height="60px" align="center"><button class="btn" type="Submit">Consultar</button></td></tr>
          </table>
          </form>
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