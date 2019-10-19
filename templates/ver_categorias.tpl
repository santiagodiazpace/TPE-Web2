<table>
    <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                <td>{$categoria->nombre}</td>
            </tr>
        {/foreach}
    </tbody>
</table>