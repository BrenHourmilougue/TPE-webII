<?php
/* Smarty version 4.2.1, created on 2022-11-03 16:28:32
  from 'C:\xampp\htdocs\WEB2\TPE-webII\templates\listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6363de20bca394_50586558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82a314c9a65f52d2e4efef2e1da55b83b337f5fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-webII\\templates\\listaProductos.tpl',
      1 => 1667489189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6363de20bca394_50586558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Stock;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
