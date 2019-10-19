{include file="header.tpl"}

    <table border="1">
        <tbody>
            {foreach from=$categorias item=categoria}
                <tr>
                    <td>{$producto->id_producto}</td>
                    <td>{$producto->nombre}</td>
                    <td>{$producto->precio}</td>
                </tr>
        </tbody>
    </table>
</body>
</html>