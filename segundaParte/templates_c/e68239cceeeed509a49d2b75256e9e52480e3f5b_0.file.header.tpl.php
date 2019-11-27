<?php
/* Smarty version 3.1.33, created on 2019-10-14 02:11:07
  from '/opt/lampp/htdocs/EspecialRomper/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da3bd1b0de630_31945765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e68239cceeeed509a49d2b75256e9e52480e3f5b' => 
    array (
      0 => '/opt/lampp/htdocs/EspecialRomper/templates/header.tpl',
      1 => 1571011276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da3bd1b0de630_31945765 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="verJugadores">Jugadores</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="verEquipos">Equipos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
            <div class="navbar-nav ml-auto">
                <span class="navbar-text"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
                <a class="nav-item nav-link" href="logout">LOGOUT</a>
            </div>
        <?php }?>
    </nav><?php }
}
