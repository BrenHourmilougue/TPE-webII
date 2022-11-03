{include 'header.tpl'}
<table class="table">
    <thead>
        <tr>
            <td>Categoria</td>
        </tr>
    </thead>
    <tbody>
        {foreach from=$categorias item=$categoria}
        <tr>
            <td>{$categoria->categoria}</td>
        </tr>
        {/foreach}
    </tbody>
</table>
{include 'footer.tpl'}