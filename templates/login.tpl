{include file="header.tpl"}

<form action="iniciarsesion" method="POST">
  <h4 class="text-center">Loguear con el Email</h4>
  <label>Email
    <input name="usuario" type="text" placeholder="miemail@ejemplo.com">
  </label>
  <label>Password
    <input name="password" type="text" placeholder="Clave">
  </label>
  <p><input type="submit" class="button expanded" value="login"></p>
</form>

{if $error}
<div>{$error}</div>
{/if}

{include file="footer.tpl"}