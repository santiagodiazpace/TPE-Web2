{include file="header.tpl"}

<h2>CATEGORIAS</h2>
<table border=1>
    <tr>
        <th>ID</th><th>NOMBRE</th><th></th><th></th>
    </tr>
    <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                <td>{$categoria->id_categoria}</td>
                <td>{$categoria->nombre}</td>
                <td>
                    {if isset($smarty.session.userId)} 
                        <form action="categorias/borrar/{$categoria->id_categoria}">
                            <button value="{$categoria->id_categoria}" type="submit">Borrar</button>
                        </form>
                    {/if}
                </td>
                <td>
                    {if isset($smarty.session.userId)} 
                        <form action="categorias/formularioeditarcategoria/{$categoria->id_categoria}">
                            <button value="{$categoria->id_categoria}" type="submit">Editar</button>
                        </form>
                    {/if}
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>

{if isset($smarty.session.userId) && $smarty.session.USER_TYPE ==1 }
    <h2>INSERTAR</h2>
    <div>
        <form action="categorias/insertar" method="post">
            <div>
                Nombre:<input type="text" name="nombre">
                <button type="submit">Insertar</button>
            </div>
        </form>
    </div>
{/if}

</br>

{include file="footer.tpl"}