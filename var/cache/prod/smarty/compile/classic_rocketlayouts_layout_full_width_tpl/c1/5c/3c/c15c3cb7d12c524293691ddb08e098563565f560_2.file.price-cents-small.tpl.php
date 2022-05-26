<?php
/* Smarty version 3.1.43, created on 2022-05-24 09:10:38
  from 'A:\WebImpacto\xampp\htdocs\fct\themes\classic-rocket\templates\catalog\_partials\price-cents-small.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628c84eee3c2c6_14766449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c15c3cb7d12c524293691ddb08e098563565f560' => 
    array (
      0 => 'A:\\WebImpacto\\xampp\\htdocs\\fct\\themes\\classic-rocket\\templates\\catalog\\_partials\\price-cents-small.tpl',
      1 => 1653374416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628c84eee3c2c6_14766449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_478635301628c84eee384a3_94902978', 'price');
}
/* {block 'price'} */
class Block_478635301628c84eee384a3_94902978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'price' => 
  array (
    0 => 'Block_478635301628c84eee384a3_94902978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_assignInScope('priceValue', explode(",",$_smarty_tpl->tpl_vars['product']->value['price']));?>
<div class="price_product">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['priceValue']->value[0], ENT_QUOTES, 'UTF-8');?>
,<span class="small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['priceValue']->value[1], ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php
}
}
/* {/block 'price'} */
}
