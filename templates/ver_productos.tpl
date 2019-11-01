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
                    <td>
                        <form action="productos/borrar/{$producto->id_producto}">
                            <button value="{$producto->id_producto}" type="submit">Borrar</button>
                        </form>
                    </td>
                    <td>
                        <form action="productos/detalle/{$producto->id_producto}">
                            <button value="{$producto->id_producto}" type="submit">Detalle</button>
                        </form>
                    </td>
                    <td>
                        <form action="productos/formularioeditar/{$producto->id_producto}">
                            <button value="{$producto->id_producto}" type="submit">Editar</button>
                        </form>
                    </td>
                </tr>
            {/foreach}   
        </tbody>
    </table>
    <h2>INSERTAR</h2>
    <div>
        <form action="productos/insertar" method="post">
            <div>
            Categoria:<input type="number" name="id_categoria">
            Nombre:<input type="text" name="nombre">
            Precio:<input type="number" name="precio">
            <button type="submit">Insertar</button>
            </div>
        </form>
    </div>
    </body>
</html>
{include file="footer.tpl"}