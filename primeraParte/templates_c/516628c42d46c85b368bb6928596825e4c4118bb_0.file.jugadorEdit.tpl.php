<?php
/* Smarty version 3.1.33, created on 2019-10-15 19:47:19
  from '/opt/lampp/htdocs/ahora/templates/jugadorEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da606272832b2_30924926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '516628c42d46c85b368bb6928596825e4c4118bb' => 
    array (
      0 => '/opt/lampp/htdocs/ahora/templates/jugadorEdit.tpl',
      1 => 1570832720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da606272832b2_30924926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
    
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <form action="actualizarJugador" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombreEditado" type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->jugador;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Posicion</label>
                        <select name="posicionEditada" class="form-control">
                            <option value="arquero">Arquero</option>
                            <option value="defensor">Defensor</option>
                            <option value="volante">Volante</option>
                            <option value="delantero">Delantero</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nombre del Equipo</label>
                        <select name="id_equipoEditado" class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'equipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
</option> 
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input name="id_jugadorEditado" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Edicion</button>
        </form>
        
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
