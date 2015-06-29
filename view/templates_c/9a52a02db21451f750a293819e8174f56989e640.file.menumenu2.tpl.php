<?php /* Smarty version Smarty-3.1.8, created on 2015-04-15 21:48:15
         compiled from "./view/templates/menumenu2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1016204710552ec07feb6434-20321596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a52a02db21451f750a293819e8174f56989e640' => 
    array (
      0 => './view/templates/menumenu2.tpl',
      1 => 1372680380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1016204710552ec07feb6434-20321596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu2data' => 0,
    'item' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_552ec07fed0401_44069637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ec07fed0401_44069637')) {function content_552ec07fed0401_44069637($_smarty_tpl) {?>Menu2<br/>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu2data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
     <a href=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a><br/> 
  <?php } ?><?php }} ?>