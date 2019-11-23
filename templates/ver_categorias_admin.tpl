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
                <td>
                    <form action="categorias/borrar/{$categoria->id_categoria}">
                        <button value="{$categoria->id_categoria}" type="submit">Borrar</button>
                    </form>
                </td>
                <td>
                    <form action="categorias/formularioeditarcategoria/{$categoria->id_categoria}">
                        <button value="{$categoria->id_categoria}" type="submit">Editar</button>
                    </form>
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>

{include file="footer.tpl"}