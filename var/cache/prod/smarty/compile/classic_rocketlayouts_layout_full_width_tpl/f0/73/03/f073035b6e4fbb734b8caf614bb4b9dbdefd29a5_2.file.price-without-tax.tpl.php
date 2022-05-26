<?php
/* Smarty version 3.1.43, created on 2022-05-24 09:10:38
  from 'A:\WebImpacto\xampp\htdocs\fct\themes\classic-rocket\templates\catalog\_partials\price-without-tax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628c84eee7c595_76706195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f073035b6e4fbb734b8caf614bb4b9dbdefd29a5' => 
    array (
      0 => 'A:\\WebImpacto\\xampp\\htdocs\\fct\\themes\\classic-rocket\\templates\\catalog\\_partials\\price-without-tax.tpl',
      1 => 1653374416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628c84eee7c595_76706195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194395900628c84eee78a71_00896144', 'sin_iva');
}
/* {block 'sin_iva'} */
class Block_194395900628c84eee78a71_00896144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sin_iva' => 
  array (
    0 => 'Block_194395900628c84eee78a71_00896144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['product']->value['price']);?> <?php $_smarty_tpl->_assignInScope('tax', $_smarty_tpl->tpl_vars['product']->value['id_tax_rules_group']);?> <?php if (($_smarty_tpl->tpl_vars['tax']->value == 1)) {?> <?php $_smarty_tpl->_assignInScope('iva', ($_smarty_tpl->tpl_vars['price']->value*21)/100);?> <?php $_smarty_tpl->_assignInScope('precio_sin_iva', $_smarty_tpl->tpl_vars['price']->value-$_smarty_tpl->tpl_vars['iva']->value);?>
<div class="price-without-tax">
    <p class="word">SIN IVA</p>
    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['precio_sin_iva']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('final', number_format($_prefixVariable1,2,",","."));?>
    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['final']->value, ENT_QUOTES, 'UTF-8');?>
€</p>
</div>
<?php }?> <?php
}
}
/* {/block 'sin_iva'} */
}
