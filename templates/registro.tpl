{include file="header.tpl"}

<form action="usuarionuevo" method="POST">
  <h4>Registrarse con su cuenta de Email</h4>
  <label>Email
    <input name="usuario" type="text" placeholder="miemail@ejemplo.com">
  </label>
  <label>Password
    <input name="password" type="text" placeholder="Clave">
  </label>
  <label>Nombre
    <input name="nombre" type="text" placeholder="Nombre">
  </label>
  <p><input type="submit" value="Registrar"></p>
</form>

{if $error}
<div>{$error}</div>
{/if}
{include file="footer.tpl"}