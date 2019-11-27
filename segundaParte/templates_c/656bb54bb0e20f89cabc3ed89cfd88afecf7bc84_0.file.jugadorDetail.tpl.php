<?php
/* Smarty version 3.1.33, created on 2019-11-26 00:27:28
  from '/opt/lampp/htdocs/copiaAPI/templates/jugadorDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddc63606f8e47_93909247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '656bb54bb0e20f89cabc3ed89cfd88afecf7bc84' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/jugadorDetail.tpl',
      1 => 1574724445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddc63606f8e47_93909247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
        
        <h1><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titulo']->value, 'UTF-8');?>
</h1>

        <h1>Nombre del Jugador:   <?php echo $_smarty_tpl->tpl_vars['jugador']->value->jugador;?>
</h1>
        <h1>Posicion del Jugador: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</h1>
        <h1>Equipo del Jugador:   <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombreEquipo;?>
</h1>
        <h1>ID del Jugador:       <?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
</h1>
        <?php if (isset($_smarty_tpl->tpl_vars['jugador']->value->imagen)) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->imagen;?>
" class="img-fluid rounded border border-success"/>
        <?php }?>
            <form action="api/comentarios" method="POST">
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ingrese Comentario</label>
                            <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Puntuar Comentario</label>
                            <select name="puntaje" class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input name="id_jugador" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

            <a href='verJugadores'><button type="button" class="btn btn-info fixed-bottom btn-lg">Volver</button></a>
        
    </div>
    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
