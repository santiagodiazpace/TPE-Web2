                     
{include file="vue/lista_comentarios.tpl"}

        <form id="form-comentario" action="insertar" method="post">
            <input type="number" name="id_producto" placeholder="ID producto">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <input type="number" name="puntos"  placeholder="Puntos 1-5" max="5">
            <input type="text" name="nombre_usuario" placeholder="Nombre usuario">
            <input type="submit" value="Insertar">
        </form>

        <script src="js/comentarios.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </body>
</html>
