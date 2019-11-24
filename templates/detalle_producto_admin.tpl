{include file="header.tpl"}
    <h2>DETALLE DEL PRODUCTO</h2>
    <table border=1>
        <tr>
            <th>ID</th><th>CATEGORIA</th><th>NOMBRE</th><th>PRECIO</th>
        </tr>
        <tbody>

            <tr>
                <td>{$producto->id_producto}</td>
                <td>{$producto->id_categoria}</td>
                <td>{$producto->nombre}</td>
                <td>{$producto->precio}</td>
            </tr>
        </tbody>
    </table>
    {if isset($producto->imagen)}
        <img src="{$producto->imagen}"/>
    {/if}
    <a href='{URL_PRODUCTOS_ADMIN}' >Volver</a>
    </body>
</html>

{include file="footer.tpl"}