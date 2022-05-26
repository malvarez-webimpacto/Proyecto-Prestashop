<?php
/* Smarty version 3.1.43, created on 2022-05-24 09:10:39
  from 'A:\WebImpacto\xampp\htdocs\fct\themes\classic-rocket\templates\catalog\_partials\garantia_devolucion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628c84ef589bb0_62239280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c73d8e41d6cbf49515f9818ae9e4495dd8a1808' => 
    array (
      0 => 'A:\\WebImpacto\\xampp\\htdocs\\fct\\themes\\classic-rocket\\templates\\catalog\\_partials\\garantia_devolucion.tpl',
      1 => 1653374416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628c84ef589bb0_62239280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1384015338628c84ef588437_59959059', 'stock');
}
/* {block 'stock'} */
class Block_1384015338628c84ef588437_59959059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stock' => 
  array (
    0 => 'Block_1384015338628c84ef588437_59959059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-iconos">
    <div class="iconos_partebaja--product">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
certificado-de-garantia.png" />
        <p>
            <span class="iconos-garantia">2 años</span><br /> de garantia
        </p>
    </div>
    <div class="iconos_partebaja--product">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
devolucion-de-producto.png" />
        <p>
            <span class="iconos-garantia">30 días</span><br /> de deovolución
        </p>
    </div>
    <div class="iconos_partebaja--product">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
certificado-de-garantia.png" />
        <p>
            <span class="iconos-garantia">100%</span><br/> pago asegurado
        </p>
    </div>
</div>
<?php
}
}
/* {/block 'stock'} */
}
