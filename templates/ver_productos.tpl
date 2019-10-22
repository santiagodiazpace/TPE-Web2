<table>
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
