<?php
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Admin</title>
         <link rel="stylesheet" href="../../css/main.css">
         <script src="../../js/jquery-3.3.1.min.js"></script>
          <script src="../../js/main.js"></script>
   </head>
   <body>
<h1>Nuevo Usuario</h1>
        <div class="main">
        <form action="registrarusuario.php" method="post" id="formLg">
        
            <input type="text" name="nombre"  placeholder="Nombre" required>
            <input type="text" name="usuario"  placeholder="Usuario" required>
            <input type="password" name="password"  placeholder="Contraseña" required>
            <input type="text" name="tipo"  placeholder="Admin/Vendedor" required>
            <input type="submit" class="botonlg"  value="Registrar" >
        
     </form>
     
   </body>
 </html>