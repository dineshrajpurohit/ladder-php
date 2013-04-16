<?php /* Smarty version Smarty-3.1.13, created on 2013-04-16 04:24:46
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1508516a27a59ad735-66523289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1366111484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1508516a27a59ad735-66523289',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516a27a59c51d4_72412352',
  'variables' => 
  array (
    'title' => 0,
    'public_path' => 0,
    'ladder_header' => 0,
    'logged_in' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a27a59c51d4_72412352')) {function content_516a27a59c51d4_72412352($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ladder - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

        <!-- css files -->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['public_path']->value;?>
/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['public_path']->value;?>
/css/main.css">
        <!-- Javascript files -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['public_path']->value;?>
/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['public_path']->value;?>
/bootstrap.min.js"></script>


    </head>
    <body>
        <header class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a href="" id="logo" ><?php echo $_smarty_tpl->tpl_vars['ladder_header']->value;?>
</a>
                    <nav>
                        <ul class="nav pull-right">
                            <?php if (!isset($_smarty_tpl->tpl_vars['logged_in']->value)){?>
                                <li><a href="/ladder/index" >Home</a></li>
                                <li><a href="/ladder/login" >Login</a></li>
                                <li><a href="/ladder/register" >Register</a></li>
                            <?php }else{ ?>
                                <li><a href="/ladder/player/profile" >Home</a></li>
                                <li><a href="/ladder/player/logout" >logout</a></li>
                            <?php }?>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <!-- There is a better way to do this -->
                            <?php if (isset($_smarty_tpl->tpl_vars['logged_in']->value)){?>
                                <li><a href="/ladder/player/profile">Home</a></li>
                                <li><a href="/ladder/player/rules">Rules</a></li>
                                <li><a href="/ladder/player/rankings">Rankings</a></li>  
                                <li><a href="/ladder/player/tournaments">Tournament</a></li> 
                            <?php }else{ ?>
                                <li><a href="/ladder/index">Home</a></li>
                                <li><a href="/ladder/rules">Rules</a></li>
                                <li><a href="/ladder/rankings">Rankings</a></li>  
                                <li><a href="/ladder/tournaments">Tournament</a></li> 
                            <?php }?>

                        </ul> 
                    </div>
                </div>

            </div>
        </header><br/><br/>
        <div class="container">


<?php }} ?>