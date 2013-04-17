<?php /* Smarty version Smarty-3.1.13, created on 2013-04-16 23:17:56
         compiled from ".\templates\rankings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10318516bdf3b5b7509-35148104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f5e5bf6257583f52e82ca20381e5cfa5ceb8a3a' => 
    array (
      0 => '.\\templates\\rankings.tpl',
      1 => 1366179470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10318516bdf3b5b7509-35148104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516bdf3b6313d3_18661071',
  'variables' => 
  array (
    'players' => 0,
    'i' => 0,
    'logged_in' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516bdf3b6313d3_18661071')) {function content_516bdf3b6313d3_18661071($_smarty_tpl) {?><table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Rank #</th>
            <th>Name</th>
            <th>ELO</th>
        </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['players']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['rank'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['lname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['elo'];?>
</td>
            <?php if (isset($_smarty_tpl->tpl_vars['logged_in']->value)){?>
            <td><a class="btn btn-primary" href="">Challenge</td>
            <?php }?>
        </tr>
    <?php } ?>

</table><?php }} ?>