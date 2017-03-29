<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro</title>
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
          <h2>Registro Usuario</h2><br>
          <form method="post" action="pagBD/registroBD.php" autocomplete="off">
          <table width="800px">
          <tr><td height="40px">Tipo Documento:*</td>
          <td><select class="input" type="text" placeholder="Cedula de Ciudadania" name="tipodocumento" id="tipodocumento" required="required">
          <option >Seleccione:</option>
          <option value="CC">Cedula de Ciudadania</option>
          <option value="TI">Tarjeta de Identidad</option>
          <option value="LM">Libreta Militar</option>
          </select>
          </td>
          <td height="40px">Numero de Documento:*</td>
          <td><input class="input" type="text" placeholder="Solo numeros" name="documento" id="documento" required="required" /></td></tr>
          <tr><td height="40px">Nombres:*</td>
          <td><input class="input" type="text" placeholder="Solo letras" name="nombres" id="nombres" required="required"/></td>
          <td height="40px">Primer Apellido:*</td>
          <td><input class="input" type="text" placeholder="Solo letras" name="primerApellido" id="primerApellido" required="required"/></td></tr>
          <tr><td height="40px">Segundo Apellido:</td>
          <td><input class="input" type="text" placeholder="Solo letras" name="segundoApellido" id="segundoApellido" /></td>
          <td height="40px">Numero Celular:*</td>
          <td><input class="input" type="text" placeholder="Solo numeros" name="celular" id="celular" required="required"/></td></tr>
          <tr><td height="40px">Edad:*</td>
          <td><input class="input" type="text" placeholder="Solo numeros" name="edad" id="edad" required="required"/></td>
          <td height="40px">Estrato:*</td>
          <td><input class="input" type="text" placeholder="Solo numeros" name="estrato" id="estrato" required="required"/></td></tr>
          <tr><td height="40px">Correo Electronico:*</td>
          <td><input class="input" type="text" placeholder="ejemplo@gmail.co" name="correo" id="correo" required="required"/></td>
          <td height="40px">Telefono fijo:</td>
          <td><input class="input" type="text" placeholder="Solo numeros" name="telefono" id="telefono" /></td></tr>
          <tr><td height="40px">Direccion de Residencia:*</td>
          <td><input class="input" type="text" placeholder="Calle ejemplo" name="direccion" id="direccion" required="required"/></td>
          <td height="40px">Nombre de Usuario:*</td>
          <td><input class="input" type="text" placeholder="ejemplo40" name="usuario" id="usuario" required="required"/></td></tr>
          <tr><td height="40px">Contraseña:*</td>
          <td><input class="input" type="password" placeholder="Minimo 6 caracteres" name="contrasenia" id="contrasenia" required="required"/></td>
          <td height="40px">Repetir Contraseña:*</td>
          <td><input class="input" type="password" placeholder="" name="contrasenia1" id="contrasenia1" required="required"/></td></tr>
          <td height="60px" align="center"><button class="btn" type="Submit">Registrar</button></td>
          <td colspan="3">Acepta terminos y condiciones</td></tr>
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