<?php
  /* este pequeño script es para conectar nuestro codigo a la base de datos*/
    $host ='localhost';
    $user = 'nombre de usuario de la base de datos';
    $password = 'contraseña de la base de datos';
    $db = 'nombre de la base de datos';

    $conection = @mysqli_connect($host,$user,$password,$db);
    if(!$conection){
        echo "Error de Conexión";
    }
?>


/*y para conectar las paginas de php a la base de datos añadir el siguiente codigo*/
<?php
    include "ruta del archivo de conexion";  
?>
