<?php
/* Smarty version 3.1.33, created on 2019-11-15 21:45:37
  from '/opt/lampp/htdocs/TPEspecial_Parte2/templates/equipoDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcf0e711b55a0_35144177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d84069683fe1b863380d6a5b75d11340ef09f8' => 
    array (
      0 => '/opt/lampp/htdocs/TPEspecial_Parte2/templates/equipoDetail.tpl',
      1 => 1571347577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dcf0e711b55a0_35144177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

        <h1><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titulo']->value, 'UTF-8');?>
</h1>

        <h1>Nombre del Equipo: <?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
</h1>
        <h1>Pais: <?php echo $_smarty_tpl->tpl_vars['equipo']->value->pais;?>
</h1>
        <h1>Cantidad de Titulos: <?php echo $_smarty_tpl->tpl_vars['equipo']->value->cantidad_titulos;?>
</h1>
        <h1>Jugadores:</h1>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Posicion</th>
                        </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadoresDelEquipo']->value, 'equipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->jugador;?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->posicion;?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>

        <a href='verEquipos'><button type="button" class="btn btn-info">Volver</button></a>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
