{include file="header.tpl"}
<!--TABLA CON TODOS LOS PRODUCTOS-->
{if $user}
    <div class="contenedor_logout_user">
        <h3>{$user}</h3>
        <!--BOTON QUE CIERRA LA SESIÓN-->
        <div>
            <p class="cerar_sesion_user">cerrar sesión</p>
            <button class="btn_logout_user" type="button"><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></button>
        </div>
    </div>
{/if}
<section class="contenedor_table">
    <table class="table">
        <caption class="titulo_table">detalle de producto</caption>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripción</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{$product->nombre}</td>
                    <td>{$product->precio}</td>
                    <td>{$product->stock}</td>
                    <td>{$product->descripcion}</td>
                    <td>{$categoria->categoria}</td>
                </tr>
                <tr>
                    <td class="td_imag" colspan="5">
                        {foreach from=$images item=image}
                            <img class="img" src="{$image->imagen}">
                        {/foreach}
                    </td>
                </tr>
        </tbody>
    </table>
    <!--TABLA DE LA CATEGORIA DEL PRODUCTO-->
     <table class="table">
        <caption class="titulo_table">categoria {$categoria->categoria}</caption>
        <thead>
            <tr>
                <th>categoria</th>
                <th>categoria</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{$categoria->categoria}</td>
                    <td>{$categoria->categoria}</td>
                </tr>
        </tbody>
    </table>
</section>
