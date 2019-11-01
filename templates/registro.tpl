{include file="header.tpl"}

<form action="usuarionuevo" method="POST">
  <h4>Register with you email account</h4>
  <label>Email
    <input name="usuario" type="text" placeholder="miemail@ejemplo.com">
  </label>
  <label>Password
    <input name="password" type="text" placeholder="Clave">
  </label>
  <label>Nombre
    <input name="nombre" type="text" placeholder="Nombre">
  </label>
  <p><input type="submit" value="registro"></p>
</form>

{if $error}
<div>{$error}</div>
{/if}
{include file="footer.tpl"}