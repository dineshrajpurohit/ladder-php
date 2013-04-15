<?php /* Smarty version Smarty-3.1.13, created on 2013-04-14 03:03:50
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1508516a27a59ad735-66523289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1365933827,
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
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="public/css/main.css">
        <!-- Javascript files -->
        <script src="public/js/jquery-1.9.1.min.js"></script>
        <script src="pubic/js/bootstrap.min.js"></script>
        
        
    </head>
    <body>
        <header class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a href="" id="logo" >Ping Pong Challenge</a>
                    <nav>
                        <ul class="nav pull-right">
                            <li><a href="/ladder/index" >Home</a></li>
                            <?php if (isset($_smarty_tpl->tpl_vars['logged_in']->value)){?>
                                 <li><a href="/ladder/login" >Login</a></li>
                                 <li><a href="/ladder/register" >Register</a></li>
                             <?php }else{ ?>
                                 <li><a href="/ladder/logout" >logout</a></li>
                             <?php }?>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                    <li><a href="/ladder/index">Home</a></li>
                    <li><a href="/ladder/rules">Rules</a></li>
                    <li><a href="/ladder/rankings">Rankings</a></li>  
                    <li><a href="/ladder/tournaments">Tournament</a></li>  
                </ul> 
                    </div>
                </div>
                               
            </div>
        </header><br/><br/>
        <div class="container">
       
        
<?php }} ?>