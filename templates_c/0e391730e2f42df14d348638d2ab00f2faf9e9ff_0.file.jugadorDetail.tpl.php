<?php
/* Smarty version 3.1.33, created on 2019-10-15 01:41:50
  from '/opt/lampp/htdocs/ahora/templates/jugadorDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da507becbd789_77612645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e391730e2f42df14d348638d2ab00f2faf9e9ff' => 
    array (
      0 => '/opt/lampp/htdocs/ahora/templates/jugadorDetail.tpl',
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
function content_5da507becbd789_77612645 (Smarty_Internal_Template $_smarty_tpl) {
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
