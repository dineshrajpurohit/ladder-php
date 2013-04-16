<?php /* Smarty version Smarty-3.1.13, created on 2013-04-16 02:02:14
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32294516a4c0eb0b508-68812959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1366102930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32294516a4c0eb0b508-68812959',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516a4c0eb0c797_05849682',
  'variables' => 
  array (
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516a4c0eb0c797_05849682')) {function content_516a4c0eb0c797_05849682($_smarty_tpl) {?><div class="span6 center">
    <h3>Player Login Page</h3>
    <?php if (($_smarty_tpl->tpl_vars['error_message']->value!='')){?><div class="alert alert-error"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</div><?php }?>

    <form class="form-vertical" enctype="application/x-www-form-urlencoded" method="post" action="authenticate"><fieldset>
            <div class="control-group"><label for="email" class="control-label required">Email:</label>
                <div class="controls">
                    <input type="text" name="Auth[email]" id="email" value="" placeholder="demo@demo.com"></div></div>
            <div class="control-group"><label for="password" class="control-label required">Password:</label>
                <div class="controls">
                    <input type="password" name="Auth[password]" id="password" value="" placeholder="Password"></div></div>
            <div class="form-actions">

                <input type="submit" name="submit" id="submit" value="Login" class="btn btn-primary">
                <a class='btn' href='/ladder/index'>Cancel</a><br/><br/><a href=''>forgot your password?</a>&nbsp;&nbsp<a href='/ladder/register'>new user?</a></div></fieldset>
    </form>
</div>
<?php }} ?>