{include file="header.tpl"}
                      
{include file="vue/lista_comentarios.tpl"}

        <form id="form-comentario" action="insertar" method="post">
            <input type="date" name="fecha" placeholder="Fecha">
            <input type="number" name="id_producto" placeholder="ID producto">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <input type="number" name="puntos"  max="5">
            <input type="submit" value="Insertar">
        </form>

        <script src="js/comentarios.js"></script>
    </body>
</html>
