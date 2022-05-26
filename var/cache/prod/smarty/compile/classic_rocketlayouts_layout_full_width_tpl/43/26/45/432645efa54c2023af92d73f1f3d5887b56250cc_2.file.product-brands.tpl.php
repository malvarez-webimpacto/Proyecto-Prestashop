<?php
/* Smarty version 3.1.43, created on 2022-05-24 09:10:39
  from 'A:\WebImpacto\xampp\htdocs\fct\themes\classic-rocket\templates\catalog\_partials\product-brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628c84ef1518e7_23738414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '432645efa54c2023af92d73f1f3d5887b56250cc' => 
    array (
      0 => 'A:\\WebImpacto\\xampp\\htdocs\\fct\\themes\\classic-rocket\\templates\\catalog\\_partials\\product-brands.tpl',
      1 => 1653374416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628c84ef1518e7_23738414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-brands">
    <ul>
        <li>
            Marca: <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']))) {?><span class="product_manufacturer_name"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');
}?></span
      >
    </li>
  </ul>
</div>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1823002230628c84ef150491_40063276', 'brand');
?>
 --><?php }
/* {block 'brand'} */
class Block_1823002230628c84ef150491_40063276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand' => 
  array (
    0 => 'Block_1823002230628c84ef150491_40063276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p class="brand_name">
    Marca: <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']))) {?>
    <span class="product_manufacturer_name"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
</span
  >
  <?php }?>
</p>
<?php
}
}
/* {/block 'brand'} */
}
