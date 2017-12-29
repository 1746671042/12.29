<?php
/* Smarty version 3.1.30, created on 2017-12-28 16:33:08
  from "D:\phpStudy\WWW\php\Admin\template\Index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a44ac4467e672_78618608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8435c29e1cb724353ef78ad92f3d64ed304ab3b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Admin\\template\\Index\\index.tpl',
      1 => 1514423069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a44ac4467e672_78618608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225265a44ac4467b5a5_15259214', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_225265a44ac4467b5a5_15259214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>欢迎来到首页</h1>
<?php
}
}
/* {/block 'content'} */
}
