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
                        <form action="productosadmin/borrar/{$producto->id_producto}">
                            <button value="{$producto->id_producto}" type="submit">Borrar</button>
                        </form>
                    </td>
                    <td>
                        <form action="productosadmin/detalle/{$producto->id_producto}">
                            <button value="{$producto->id_producto}" type="submit">Detalle</button>
                        </form>
                    </td>
                    <td>
                        <form action="productosadmin/formularioeditar/{$producto->id_producto}">
                            <button value="{$producto->id_producto}" type="submit">Editar</button>
                        </form>
                    </td>
                </tr>
            {/foreach}   
        </tbody>
    </table>
 
    <h2>INSERTAR</h2>
    <div>
        <form action="productosadmin/insertar" method="post" enctype="multipart/form-data">
            <div>
                Categoria:<input type="number" name="id_categoria">
                Nombre:<input type="text" name="nombre">
                Precio:<input type="number" name="precio">
                <input type="file" name="imagen" id="">
                <button type="submit">Insertar</button>
            </div>
        </form>
    </div>
    <br>

    </body>
</html>

{include file="footer.tpl"}