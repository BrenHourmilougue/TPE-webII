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
        {foreach from=$products item=$product}
        <tr>
            <td>{$product->producto}</td>
            <td>{$product->marca}</td>
            <td>{$product->categoria}</td>
            <td>{$product->stock}</td>
            <td>{$product->precio}</td>
        </tr>
    </tbody>
</table>
{include 'footer.tpl'}