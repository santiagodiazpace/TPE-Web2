<table>
    <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                <td>{$categoria->id_categoria}</td>
                <td>{$categoria->nombre}</td>
            </tr>
        {/foreach}
    </tbody>
</table>