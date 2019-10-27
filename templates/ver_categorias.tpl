{include file="header.tpl"}
<table border=1>
    <tr>
        <th>ID</th><th>NOMBRE</th>
    </tr>
    <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                <td>{$categoria->id_categoria}</td>
                <td>{$categoria->nombre}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file="footer.tpl"}