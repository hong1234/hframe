<?php /* Smarty version Smarty-3.1.8, created on 2015-06-29 01:00:50
         compiled from "./view/templates/service1sayhello.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97107789655907878d6b151-53188476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc7f695097e112aae9de947e3dd23eeb3f292501' => 
    array (
      0 => './view/templates/service1sayhello.tpl',
      1 => 1435532433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97107789655907878d6b151-53188476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55907878d82109_90345259',
  'variables' => 
  array (
    'maindata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55907878d82109_90345259')) {function content_55907878d82109_90345259($_smarty_tpl) {?><form action="index.php" method="POST">
    <input type="hidden" name="service" value="service1">
    <input type="hidden" name="action" value="sayhello">
    <label for="vorname">Name</label><br/>
    <input type="text" name="vorname" maxlength="30"><br/>
    <button type="submit">Absenden</button>
</form><br/>
<?php echo $_smarty_tpl->tpl_vars['maindata']->value[0];?>
<?php }} ?>