<?php /* Smarty version Smarty-3.1.8, created on 2015-06-29 01:25:52
         compiled from "./view/templates/menumenu1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157574779552ec07fe97284-24757625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cceea8124a97a2f06de83d74ba51259a205b318a' => 
    array (
      0 => './view/templates/menumenu1.tpl',
      1 => 1435533950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157574779552ec07fe97284-24757625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_552ec07feb3003_74229433',
  'variables' => 
  array (
    'menu1data' => 0,
    'item' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ec07feb3003_74229433')) {function content_552ec07feb3003_74229433($_smarty_tpl) {?>Menu1<br/>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu1data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
     <a href=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a> |
  <?php } ?>
<?php }} ?>