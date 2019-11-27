<?php
/* Smarty version 3.1.33, created on 2019-10-28 14:11:19
  from '/opt/lampp/htdocs/TPEspecial/templates/equipoList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db6e8f777c8a2_71127801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f69dca4712a48c638078a07e2986d0e34bd08a' => 
    array (
      0 => '/opt/lampp/htdocs/TPEspecial/templates/equipoList.tpl',
      1 => 1572100368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5db6e8f777c8a2_71127801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <?php if (isset($_smarty_tpl->tpl_vars['userName']->value)) {?>
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
    <?php }?>

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
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->pais;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->cantidad_titulos;?>
</td> 
                    <td><a href='verEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'><button type="button" class="btn btn-info">Ver Detalle</button></a>
                        <?php if (isset($_smarty_tpl->tpl_vars['userName']->value)) {?>
                            <a href='editarEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'><button type="button" class="btn btn-success">Editar</button></a>     
                            <a href='eliminarEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'><button type="button" class="btn btn-danger">Borrar</button></a>
                        <?php }?></td>  
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
