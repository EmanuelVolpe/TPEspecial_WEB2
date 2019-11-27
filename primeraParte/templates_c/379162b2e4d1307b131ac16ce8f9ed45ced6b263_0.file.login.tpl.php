<?php
/* Smarty version 3.1.33, created on 2019-10-28 14:41:16
  from '/opt/lampp/htdocs/TPEspecial/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db6effcb61b71_24181223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '379162b2e4d1307b131ac16ce8f9ed45ced6b263' => 
    array (
      0 => '/opt/lampp/htdocs/TPEspecial/templates/login.tpl',
      1 => 1572270056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5db6effcb61b71_24181223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
        <form action="verifyUser" method="POST" class="col-md-4 offset-md-4 mt-4">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

            <div class="form-group">
                <label>Usuario (email)</label>
                <input type="email" name="username" class="form-control" placeholder="Ingrese email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            <?php }?>

            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>

    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
