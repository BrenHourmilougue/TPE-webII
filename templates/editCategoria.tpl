{include file="header.tpl"}
<!--HTML EDITAR CATEGORIA-->
<h1>editar categoria</h1>
<form action="updateCategoria/{$categoria->id_categoria}" method="post">
    <input class="input" type="text" name="edit_categoria" placeholder="categoria" value="{$categoria->categoria}" required>
    <input class="input" type="text" name="edit_category" placeholder="categoria" value="{$categoria->categoria}" required>
    <button class="btn" type="submit">actualizar</button>
</form>

{include file="footer.tpl"}