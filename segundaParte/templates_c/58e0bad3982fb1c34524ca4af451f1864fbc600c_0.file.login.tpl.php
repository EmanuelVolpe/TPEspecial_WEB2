<?php
/* Smarty version 3.1.33, created on 2019-11-25 22:41:53
  from '/opt/lampp/htdocs/copiaAPI/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddc4aa107d513_78209193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e0bad3982fb1c34524ca4af451f1864fbc600c' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/login.tpl',
      1 => 1574377458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc4aa107d513_78209193 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark"></nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger"></nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark"></nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent"></nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-4 bg-secondary">
                <form class="text-left" action="verifyUser" method="POST" class="col-md-4 offset-md-4 mt-4">
                    <h1 class="text-left font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

                    <div class="form-group font-weight-bold">
                        <label>Usuario (email)</label>
                        <input type="email" name="username" class="form-control" placeholder="Ingrese email">
                    </div>

                    <div class="form-group font-weight-bold">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    </div>
                    <?php }?>

                    <button type="submit" class="btn btn-primary font-weight-bold">Ingresar</button>
                </form>
            </div>

            <div class="col-sm"></div>

            <div class="col-4 bg-success">
                <form class="text-left" action="registrarUser" method="POST" class="col-md-4 offset-md-4 mt-4">
                    <h1 class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['tituloRegistro']->value;?>
</h1>

                    <div class="form-group font-weight-bold">
                        <label>Usuario (email)</label>
                        <input type="email" name="usernameRegistro" class="form-control" placeholder="Ingrese email">
                    </div>

                    <div class="form-group font-weight-bold">
                        <label>Password</label>
                        <input type="password" name="passwordRegistro" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary font-weight-bold">Registrarme</button>
                </form>
            </div>

            <div class="col-sm"></div>

        </div>
    </div>
</body>

</html><?php }
}
