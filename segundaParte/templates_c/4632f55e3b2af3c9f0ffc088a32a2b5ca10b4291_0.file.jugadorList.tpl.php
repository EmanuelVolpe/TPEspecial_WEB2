<?php
/* Smarty version 3.1.33, created on 2019-10-15 01:41:40
  from '/opt/lampp/htdocs/ahora/templates/jugadorList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da507b4610664_49775227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4632f55e3b2af3c9f0ffc088a32a2b5ca10b4291' => 
    array (
      0 => '/opt/lampp/htdocs/ahora/templates/jugadorList.tpl',
      1 => 1570835866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da507b4610664_49775227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
    
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <form action="nuevoJugador" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Posicion</label>
                        <select name="posicion" class="form-control">
                            <option value="arquero">Arquero</option>
                            <option value="defensor">Defensor</option>
                            <option value="volante">Volante</option>
                            <option value="delantero">Delantero</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nombre del equipo</label>
                        <select name="id_equipo" class="form-control">
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
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Jugador</button>
        </form>

        <div class="container">
            <h1></h1>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Jugador</th>
                    <th scope="col">Nombre Del Jugador</th>
                    <th scope="col">Posicion</th>
                    <th scope="col">Nombre del Equipo</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombreJugador;?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombreEquipo;?>
</td> <td><a href='editarJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
'><button type="button" class="btn btn-success">Editar</button>     <a href='eliminarJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
'><button type="button" class="btn btn-danger">Borrar</button></a> <a href='verJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
'><button type="button" class="btn btn-info">Ver Detalle</button></a></td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
