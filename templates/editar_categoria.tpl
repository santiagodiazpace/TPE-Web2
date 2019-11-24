{include file="header.tpl"}

    <form action="categorias/editar/{$categoria->id_categoria}" method="post">
        Nombre: <input type="text" name="nombre" value="{$categoria->nombre}">
        <button type="submit">Guardar</button>
    </form>

    <a href='{URL_CATEGORIAS_ADMIN}' >Volver</a>
    
{include file="footer.tpl"}