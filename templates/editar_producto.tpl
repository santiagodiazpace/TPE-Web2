{include file="header.tpl"}
    <h2>EDITAR PRODUCTO:</h2>
    <div>
        <form action="productos/editar/{$producto->id_producto}" method="post">
            <div>
                Categoria:<input type="number" name="id_categoria">
                Nombre:<input type="text" name="nombre">
                Precio:<input type="number" name="precio">
                <button type="submit">Aceptar</button>
                <a href='{URL_PRODUCTOS}' >Volver a Inicio</a>
            </div>
        </form>
    </div>
    </body>
</html>
{include file="footer.tpl"}