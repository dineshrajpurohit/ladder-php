<?php /* Smarty version Smarty-3.1.13, created on 2013-04-14 15:12:23
         compiled from ".\templates\error404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27822516b29c73c8d89-38524811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7551a7625de48451d3b3b3a2f2d6b31a24cfbb81' => 
    array (
      0 => '.\\templates\\error404.tpl',
      1 => 1365966834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27822516b29c73c8d89-38524811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'requested_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516b29c7431708_48291033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516b29c7431708_48291033')) {function content_516b29c7431708_48291033($_smarty_tpl) {?>Error the page <?php echo $_smarty_tpl->tpl_vars['requested_page']->value;?>
 you are trying to access does not exists
<?php }} ?>