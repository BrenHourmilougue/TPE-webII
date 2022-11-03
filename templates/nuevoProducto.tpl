{include 'header.tpl'}

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="text" required class="form-control" id="codigo" name="codigo">
        </div>
        <div class="form-group">
            <label for="producto">Producto</label>
            <input type="text" required class="form-control" id="producto" name="producto">
        </div>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" required class="form-control" id="marca" name="marca">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" required class="form-control" id="categoria" name="categoria">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" required class="form-control" id="stock" name="stock">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" required class="form-control" id="precio" name="precio">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Agregar</button>
    </form>
</div>

{include file='footer.tpl'}