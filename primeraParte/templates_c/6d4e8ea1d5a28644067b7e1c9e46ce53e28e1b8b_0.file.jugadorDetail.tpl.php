<?php
/* Smarty version 3.1.33, created on 2019-10-18 00:42:45
  from '/opt/lampp/htdocs/Correccion/templates/jugadorDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da8ee65381500_84247737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d4e8ea1d5a28644067b7e1c9e46ce53e28e1b8b' => 
    array (
      0 => '/opt/lampp/htdocs/Correccion/templates/jugadorDetail.tpl',
      1 => 1570888213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da8ee65381500_84247737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
        
        <h1><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titulo']->value, 'UTF-8');?>
</h1>

        <h1>Nombre del Jugador: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->jugador;?>
</h1>
        <h1>Posicion del Jugador: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</h1>
        <h1>Equipo del Jugador: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombreEquipo;?>
</h1>

        <a href='verJugadores'><button type="button" class="btn btn-info">Volver</button></a>
        
    </div>
    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
