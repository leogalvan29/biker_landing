<div class="contenedor-formulario">
    <h1 class="titulo-solicitar">Solicitar Cotización</h1>
<div class="row-formulario">
     <form action="" method="POST" class="formulario">
         <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
         </div>
         <div class="campo">
            <label for="Email">Email</label>
            <input type="email" name="email" id="email">
         </div>
         <div class="campo">
            <label for="Telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono">
         </div>
         <input type="hidden" name="action" value="procesar_formulario">
         <input type="submit" value="Enviar" id="enviarFormulario"> 
         <?php wp_nonce_field('procesar_formulario_nonce', 'procesar_formulario_nonce'); ?> 
         <!-- se pone esta linea para hacer mas seguro el envio -->
     </form>
</div>
</div>