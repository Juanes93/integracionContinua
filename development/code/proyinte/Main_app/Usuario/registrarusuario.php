<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "proyint";
 $tbl_name = "usuarios";
 
 $form_pass = $_POST['pass'];
 
 $hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE nombres = '$_POST[nombre]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{

 $query = "INSERT INTO usuarios (nombres, usuario, password, tipo)
           VALUES ('$_POST[nombre]', '$_POST[usuario]', '$hash', '$_POST[tipo]')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['nombre'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='Bienvenida.html'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>