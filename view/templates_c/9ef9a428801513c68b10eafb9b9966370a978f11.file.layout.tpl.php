<?php /* Smarty version Smarty-3.1.8, created on 2015-06-28 17:27:43
         compiled from "./view/templates/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1603657392552ec07fe51d43-38698224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ef9a428801513c68b10eafb9b9966370a978f11' => 
    array (
      0 => './view/templates/layout.tpl',
      1 => 1435505260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1603657392552ec07fe51d43-38698224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_552ec07fe8ba59_76236165',
  'variables' => 
  array (
    'menu1' => 0,
    'menu2' => 0,
    'main' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ec07fe8ba59_76236165')) {function content_552ec07fe8ba59_76236165($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
  
  <head>
    <title>HFrame_0615</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css"  href="css/format.css" />   
  </head>
  
  <body>
  <div id="Wrapper">
  
   <div id="head">
      <?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   </div>

   <div id="menu1">
      <div id="mn1">
         <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['menu1']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
   </div>
   
   <div id="main">
      <div id="menu2">
         <div id="mn2">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['menu2']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

         </div>
      </div>
   
      <div id="content">
         <div id="ct">
            <h4>Content</h4>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['main']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

         </div>
      </div>
   </div>
   
   <div id="foot">
      <?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   </div> 
 </div>    
  </body>
  
</html>
<?php }} ?>