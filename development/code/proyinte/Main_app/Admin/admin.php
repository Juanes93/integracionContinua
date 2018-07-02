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
<div class="integrantes">
   <h2>Bienvenido Administrador</h2>
</div>
        <div class="main">
        <form action="" id="formLg">
        <input type="text" name="cliente"  placeholder="Cliente" required>
        <input type="text" name="nit"  placeholder="Nit" required>
        <label for="tipoProd">Seleccion Producto</label>
         <select class="form-control" id="tipoProd" placeholder="Nit">
           <option>Hidromasaje</option>
           <option>Lavamanos</option>
           <option>Lavarropas</option>
           <option>Cocinas</option>
           <option>Lavaplatos</option>
         </select>
         <input type="text" name="cantidad"  placeholder="Cantidad" required>
         <label for="tipoProd">Tipo de Novedad</label>
         <select class="form-control" id="tipoProd" placeholder="Nit">
           <option>Peticion</option>
           <option>Queja</option>
           <option>Reclamo</option>
           <option>Sugerencia</option>
          </select>
        <textarea  name="Mensaje" maxlength="1000" cols="25" rows="6" placeholder="Descripcion"></textarea>

        <input type="submit" class="botonlg"  value="Reportar" >
     </form>

   </body>
 </html>
