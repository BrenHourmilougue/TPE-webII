<?php
/* Smarty version 4.2.1, created on 2022-11-02 20:45:33
  from 'C:\xampp\htdocs\WEB2\TPE-webII\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6362c8dd1e9c81_02132046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2659f9e1b9309f8b221baf7fc95cf40c50e2ae9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE-webII\\templates\\register.tpl',
      1 => 1667418328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6362c8dd1e9c81_02132046 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Registro</h2>
           <form method="POST" action="newUser">
               <input type="text" name="username" placeholder="Ingrese su nombre de usuario"/>
               <input type="password" name="password" placeholder="Ingrese su password..."/>
               <button>Crear cuenta</button>
           </form>
<?php }
}
