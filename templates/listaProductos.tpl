{include 'header.tpl'}
<table class="table">
    <thead>
        <tr>
            <td>Producto</td>
            <td>Marca</td>
            <td>Categoria</td>
            <td>Stock</td>
            <td>Precio</td>
        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=$producto}
        <tr>
            <td>{$producto->nombre}</td>
            <td>{$producto->marca}</td>
            <td>{$producto->categoria}</td>
            <td>{$producto->Stock}</td>
            <td>{$producto->Precio}</td>
        </tr>
        {/foreach}
    </tbody>
</table>
{include 'footer.tpl'}