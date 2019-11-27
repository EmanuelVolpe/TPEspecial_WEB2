<?php
/* Smarty version 3.1.33, created on 2019-10-10 03:01:25
  from '/opt/lampp/htdocs/EspecialRomper/templates/equipoEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e82e502cdd2_76028250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20129387d10ec3b22f62fd86fccd6944e7546b64' => 
    array (
      0 => '/opt/lampp/htdocs/EspecialRomper/templates/equipoEdit.tpl',
      1 => 1570669272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9e82e502cdd2_76028250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <form action="actualizarEquipo" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombreEditado" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Pais</label>
                        <input name="paisEditado" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->pais;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Cantidad de Titulos</label>
                        <input name="cantidadTitulosEditado" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->cantidad_titulos;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input name="id_equipo" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
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
