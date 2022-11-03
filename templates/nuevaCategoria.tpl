{include 'header.tpl'}

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="categoria">Nueva categoria</label>
            <input type="text" required class="form-control" id="categoria" name="categoria">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Agregar</button>
    </form>
</div>

{include file='footer.tpl'}
