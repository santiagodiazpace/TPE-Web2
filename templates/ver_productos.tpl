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
                        <form action="productos/detalle/{$producto->id_producto}">
                            <button value="{$producto->id_producto}" type="submit">Detalle</button>
                        </form>
                    </td>
                </tr>
            {/foreach}   
        </tbody>
    </table>

    </body>
</html>
{include file="footer.tpl"}