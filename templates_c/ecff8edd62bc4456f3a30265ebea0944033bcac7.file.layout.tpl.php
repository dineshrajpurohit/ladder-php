<?php /* Smarty version Smarty-3.1.13, created on 2013-04-13 23:13:21
         compiled from ".\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17783516a27a585bb48-12839287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecff8edd62bc4456f3a30265ebea0944033bcac7' => 
    array (
      0 => '.\\templates\\layout.tpl',
      1 => 1365919848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17783516a27a585bb48-12839287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516a27a5922432_51205953',
  'variables' => 
  array (
    'bodyPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a27a5922432_51205953')) {function content_516a27a5922432_51205953($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['bodyPage']->value).(".tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>