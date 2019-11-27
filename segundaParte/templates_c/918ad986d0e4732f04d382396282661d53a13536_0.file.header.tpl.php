<?php
/* Smarty version 3.1.33, created on 2019-11-22 00:14:25
  from '/opt/lampp/htdocs/TPEspecial_Parte2/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd71a51c1adc6_61254444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '918ad986d0e4732f04d382396282661d53a13536' => 
    array (
      0 => '/opt/lampp/htdocs/TPEspecial_Parte2/templates/header.tpl',
      1 => 1574377550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd71a51c1adc6_61254444 (Smarty_Internal_Template $_smarty_tpl) {
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

    <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value) && ($_smarty_tpl->tpl_vars['isAdmin']->value == 1) && isset($_smarty_tpl->tpl_vars['userName']->value)) {?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-4">
        <a class="navbar-brand" href="verEquipos">TP ESPECIAL 2° PARTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verEquipos">Equipos</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verJugadores">Jugadores</a>
            </div>

            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verUsuarios">Usuarios</a>
            </div>
            <div class="navbar-nav ml-auto">
                <span class="navbar-text">USUARIO ADMINISTRADOR: <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</span>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="logout">LOGOUT</a>
            </div>
        </div>
    </nav>
    <?php } elseif (isset($_smarty_tpl->tpl_vars['userName']->value) && isset($_smarty_tpl->tpl_vars['isAdmin']->value) && ($_smarty_tpl->tpl_vars['isAdmin']->value != 1)) {?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-4">
        <a class="navbar-brand" href="verEquipos">TP ESPECIAL 2° PARTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verEquipos">Equipos</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verJugadores">Jugadores</a>
            </div>
            <div class="navbar-nav ml-auto">
                <span class="navbar-text">USUARIO NORMAL: <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</span>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="logout">LOGOUT</a>
            </div>
        </div>
    </nav>
    <?php }
}
}
