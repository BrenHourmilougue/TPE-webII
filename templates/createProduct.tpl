<form action="insert" method="post" enctype="multipart/form-data">
    <input class="input" type="text" name="input_product" placeholder="producto" required>
    <input class="input" type="number" name="input_price" placeholder="precio" required>
    <input class="input" type="number" name="input_stock" placeholder="stock" required>
    <input class="input" type="text" name="input_description" placeholder="descripción" required>

    <input class="input" type="file" name="input_file[]" id="imageToUpload" multiple>

    <select name="select_categoria">
        {foreach from=$categorias item=categoria}
            <option value="{$mark->id_categoria}">{$mark->categoria}</option>
        {/foreach}
    </select>

    <button class="btn" type="submit">agregar</button>
</form>