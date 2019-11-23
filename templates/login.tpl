{include file="header.tpl"}

<form action="iniciarsesion" method="POST">
  <h4>Loguearse con el Email</h4>
  <label>Email
    <input name="usuario" type="text" placeholder="miemail@ejemplo.com">
  </label>
  <label>Password
    <input name="password" type="text" placeholder="Clave">
  </label>
  <p><input type="submit" value="Iniciar sesión"></p>
</form>

{if $error}
<div>{$error}</div>
{/if}

{include file="footer.tpl"}