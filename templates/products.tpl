{include file="header.tpl"}
<!--SELECTOR DE CATEGORIA PARA FILTRAR-->
{if $user}
    <div class="contenedor_logout_user">
        <h3>{$user}</h3>
        <!--BOTON DE CERRAR SESIÓN-->
        <div>
            <p class="cerar_sesion_user">cerrar sesión</p>
            <button class="btn_logout_user" type="button"><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></button>
        </div>
    </div>
{/if}
{include file="select-categorias.tpl"}
<!--BUSCADOR-->
{include file="search.tpl"}
<!--TABLA CON TODOS LOS PRODUCTOS-->
<section class="contenedor_table">
    <table class="table">
        <caption class="titulo_table">{$title}</caption>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripción</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody id="tabla">
            {foreach from=$products item=product}
                <tr>
                    <td>{$product->nombre}</td>
                    <td>{$product->precio}</td>
                    <td>{$product->stock}</td>
                    <td>{$product->descripcion}</td>
                    <td>{$product->categoria}</td>
                    <td class="excepcion"><button class="verMas" type="button"><a href="itemDetail/{$product->id}">ver más</a></button></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</section>
<nav >
<ul class="navCompaginacion">
    {foreach from=$pagination item=index}
        <li class="liCompagnacion">
           {if $index == $page}
                <a class="linkCompaginacion categoriado" href="home/{$index}">{$index}</a>
            {else}
                <a class="linkCompaginacion" href="home/{$index}">{$index}</a>
            {/if}
        </li>
    {/foreach}
</ul>
</nav>
{include file="footer.tpl"}