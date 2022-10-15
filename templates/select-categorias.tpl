<h1>Busca por categoria, nombre o precio:</h1>
<form action="filterCategoria" method="post">
  <p>Seleciona una categoria:
    <select name="select_categoria">
        {foreach from=$categorias item=categoria}
          {if $categoria->id_categoria == $categoria_id}
            <option selected="{$categoria->id_categoria}" value="{$categoria->id_categoria}">{$categoria->categoria}</option>
          {else}
            <option value="{$categoria->id_categoria}">{$categoria->categoria}</option>
          {/if}
        {/foreach}
    </select>
    <button class="btn" type="submit">filtrar</button>
  </p>
</form>