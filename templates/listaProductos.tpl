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
            <td>{$producto->producto}</td>
        </tr>
    </tbody>
</table>
{include 'footer.tpl'}