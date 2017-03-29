<?php
// se inlcuye el archivo de la conexion
require_once ("../Conexion.php");

class Clases
{
  //registro usuario
      public function registro( $tipodocumento,$documento,$nombres,$primerApellido,$segundoApellido,$celular,
                                 $edad,$estrato,$correo,$telefono,$direccion,$usuario, $contrasenia)
      {

        $sql="INSERT INTO usuario (tipodocumento,documento,nombres,primerApellido,segundoApellido,celular,edad,estrato,correo,telefono,direccion,usuario,contrasenia) 
        VALUES ('".$tipodocumento."', '".$documento."', '".$nombres."', '".$primerApellido."', '".$segundoApellido."', '".$celular."', 
                  '".$edad."', '".$estrato."', '".$correo."', '".$telefono."','".$direccion."','".$usuario."', '".$contrasenia."')";
        $res=mysql_query( $sql, Conectar::con() );

              if( $res  != 1 )
              {
               return 0;

              }else{   

               return 1; 
               
              }
       }

  // consulta usuario
       public function consulta($documento)
      {

        $sql="SELECT * FROM usuario WHERE documento='".$documento."'";
        $res=mysql_query( $sql, Conectar::con() );

              if( mysql_num_rows( $res ) == 0 ){  

                     return 0;

                    }else{

                     if( $reg = mysql_fetch_array( $res ) ){
                      
                      $_SESSION["tipodocumento"] = $reg["tipodocumento"];
                      $_SESSION["documento"] = $reg["documento"];
                      $_SESSION["nombres"] = $reg["nombres"];
                      $_SESSION["primerApellido"] = $reg["primerApellido"];
                      $_SESSION["segundoApellido"] = $reg["segundoApellido"];
                      $_SESSION["celular"] = $reg["celular"];
                      $_SESSION["edad"] = $reg["edad"];
                      $_SESSION["estrato"] = $reg["estrato"];
                      $_SESSION["correo"] = $reg["correo"];
                      $_SESSION["telefono"] = $reg["telefono"];
                      $_SESSION["direccion"] = $reg["direccion"];
                      return 1; 

                     }}
       }
  //login
      public function login( $usuario, $contrasenia )
      {

  
            $sql="SELECT * FROM usuario WHERE usuario ='".$usuario."' AND contrasenia ='".$contrasenia."'";

            $res=mysql_query( $sql, Conectar::con() );

                    if( mysql_num_rows( $res ) == 0 ){  

                     return 0;

                    }else{

                     if( $reg = mysql_fetch_array( $res ) ){
                      
                      $_SESSION["nombres"] = $reg["nombres"];
                      

                      return 1; 

                     }}
        }
}

?>