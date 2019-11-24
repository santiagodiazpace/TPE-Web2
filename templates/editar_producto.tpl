{include file="header.tpl"}

    {if isset($producto->imagen)}
        <img src="{$producto->imagen}"/>
    {/if}

    <form action="productos/editar/{$producto->id_producto}" method="post">
        Nombre: <input type="text" name="nombre" value="{$producto->nombre}">
        Precio: <input type="number" name="precio" value="{$producto->precio}">
        Categoria: <select type="text" name="categoria">
                    {foreach from=$lista_categorias item=categoria}
                    {if $producto->id_producto==$categoria->id_categoria}
                        <option selected value="{$categoria->id_categoria}">{$categoria->id_categoria}</option>
                    {else}
                        <option selected value="{$categoria->id_categoria}">{$categoria->id_categoria}</option>
                    {/if}
                    {/foreach}
                </select>
        Imagen: <input type="file" name="imagen" value="{$producto->imagen}">
        <button type="submit">Guardar</button>
    </form>

    <a href='{URL_PRODUCTOS_ADMIN}' >Volver</a>    </br>


{include file="footer.tpl"}