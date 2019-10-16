<?php
/* Smarty version 3.1.33, created on 2019-10-15 01:14:04
  from '/opt/lampp/htdocs/ahora/templates/equipoList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da5013cc65c11_91009931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09757b58da120276447e4b4a153b45a629e625d1' => 
    array (
      0 => '/opt/lampp/htdocs/ahora/templates/equipoList.tpl',
      1 => 1570835564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da5013cc65c11_91009931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <form action="nuevoEquipo" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Pais</label>
                        <input name="pais" type="text" class="form-control" placeholder="Pais">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Cantidad de Titulos</label>
                        <input name="cantidadTitulos" type="text" class="form-control" placeholder="Cantidad de Titulos">
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Equipo</button>
        </form>

        <div class="container">
            <h1></h1>
        </div>


        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Equipo</th>
                    <th scope="col">Nombre Del Equipo</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Cantidad de Titulos</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'equipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->pais;?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->cantidad_titulos;?>
</td> <td><a href='editarEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'><button type="button" class="btn btn-success">Editar</button></a>     <a href='eliminarEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'><button type="button" class="btn btn-danger">Borrar</button></a> <a href='verEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
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
