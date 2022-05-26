<?php
/* Smarty version 3.1.43, created on 2022-05-24 09:10:39
  from 'A:\WebImpacto\xampp\htdocs\fct\themes\classic-rocket\templates\catalog\_partials\stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628c84ef1b2206_80686266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2b8ff25b469027d2266aa2e1545dd599ee95e70' => 
    array (
      0 => 'A:\\WebImpacto\\xampp\\htdocs\\fct\\themes\\classic-rocket\\templates\\catalog\\_partials\\stock.tpl',
      1 => 1653374416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628c84ef1b2206_80686266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_455106844628c84ef1b0ad0_76157282', 'stock');
}
/* {block 'stock'} */
class Block_455106844628c84ef1b0ad0_76157282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stock' => 
  array (
    0 => 'Block_455106844628c84ef1b0ad0_76157282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0)) {?>
<div class="div_stock">
    Disponibilidad:
    <p class="p_stock">¡En stock!</p>
</div>
<?php }?> <?php if (($_smarty_tpl->tpl_vars['product']->value['quantity'] < 0)) {?> <div class="div_stock">
    Disponibilidad:
    <p class="p_stockout">NO HAY STOCK DISPONIBLE</p>
    </div>
    <?php }?> <?php
}
}
/* {/block 'stock'} */
}
