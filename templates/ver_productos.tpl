{include file="header.tpl"}
    <h2>PRODUCTOS</h2>
    <table border=1>
        <tr>
            <th>ID</th><th>CATEGORIA</th><th>NOMBRE</th><th>PRECIO</th>
        </tr>
        <tbody>
            {foreach from=$productos item=producto}
                <tr>
                    <td>{$producto->id_producto}</td>
                    <td>{$producto->id_categoria}</td>
                    <td>{$producto->nombre}</td>
                    <td>{$producto->precio}</td>
                </tr>
            {/foreach}   
        </tbody>
    </table>
    <h2>MODIFICACIONES</h2>
    <form action="insertar" method="post">
        <div>
        Categoria:<input type="number" name="id_categoria">
        Nombre:<input type="text" name="nombre">
        Precio:<input type="number" name="precio">
        <button type="submit">Insertar</button>
        </div>
    </form>

    <form action="editar" method="post">
        <div>
        ID Producto:<input type="number" name="id_producto">
        Categoria:<input type="number" name="id_categoria">
        Nombre:<input type="text" name="nombre">
        Precio:<input type="number" name="precio">
        <button type="submit">Editar</button>
        </div>
    </form>

    <form action="borrar" method="post">
        <div>
        ID Producto:<input type="number" name="id_producto">
        <button type="submit">Borrar</button>
        </div>
    </form>

    </body>
</html>
{include file="footer.tpl"}