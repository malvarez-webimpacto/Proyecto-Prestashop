<?php
/* Smarty version 3.1.43, created on 2022-05-24 09:10:38
  from 'A:\WebImpacto\xampp\htdocs\fct\themes\classic-rocket\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628c84ee6549c6_99222084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '555af68cb673cd587924d51ec5508d70eeef72bc' => 
    array (
      0 => 'A:\\WebImpacto\\xampp\\htdocs\\fct\\themes\\classic-rocket\\templates\\catalog\\product.tpl',
      1 => 1653374416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/price-cents-small.tpl' => 1,
    'file:catalog/_partials/price-without-tax.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-brands.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/stock.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/garantia_devolucion.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-tabs.tpl' => 1,
  ),
),false)) {
function content_628c84ee6549c6_99222084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_801591759628c84ee633a67_27698518', 'content');
?>

</contact@prestashop.com><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_flags'} */
class Block_989550015628c84ee634608_60510708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover_thumbnails'} */
class Block_1269862180628c84ee637449_33070862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_1553485751628c84ee634308_02913258 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_989550015628c84ee634608_60510708', 'product_flags', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1269862180628c84ee637449_33070862', 'product_cover_thumbnails', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1065935177628c84ee633fb3_56289094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <section class="page-content--product" id="content">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1553485751628c84ee634308_02913258', 'page_content', $this->tplIndex);
?>

                </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_345581248628c84ee6387a4_80706062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1666487758628c84ee638486_55834719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1 class="h1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_345581248628c84ee6387a4_80706062', 'page_title', $this->tplIndex);
?>
</h1>
                <!-- <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_header'} */
/* {block "price"} */
class Block_2091237721628c84ee63c123_23774842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/price-cents-small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "price"} */
/* {block 'sin-iva'} */
class Block_1176218602628c84ee63ca58_55842913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'sin-iva'} */
/* {block 'page_header_container'} */
class Block_1611086082628c84ee638180_24230083 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1666487758628c84ee638486_55834719', 'page_header', $this->tplIndex);
?>
 -->
                <div class="prices">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2091237721628c84ee63c123_23774842', "price", $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1176218602628c84ee63ca58_55842913', 'sin-iva', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_679341289628c84ee63d1e5_57227733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/price-without-tax.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_1479200794628c84ee63d9d0_24642971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_846649007628c84ee6406b4_58943048 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?> <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_585791134628c84ee642849_99768853 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-brands.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_321301478628c84ee648489_82332518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_1863124021628c84ee643364_56665853 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                            <section class="product-pack mb-4">
                                <p class="h4">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                </p>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_321301478628c84ee648489_82332518', 'product_miniature', $this->tplIndex);
?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </section>
                            <?php }?> <?php
}
}
/* {/block 'product_pack'} */
/* {block 'stock'} */
class Block_1043374795628c84ee649c60_20160606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/stock.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'stock'} */
/* {block 'product_discounts'} */
class Block_1474390696628c84ee64a534_18871419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_1663681059628c84ee64ad70_47276236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_300957029628c84ee64b543_13805442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_additional_info'} */
/* {block "garantias"} */
class Block_1732060537628c84ee64beb4_70111883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/garantia_devolucion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block "garantias"} */
/* {block 'product_refresh'} */
class Block_945396122628c84ee64c6a2_72432996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['product_url']))) {?>

                            <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" /> <?php }?> <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_82675764628c84ee641575_85774562 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
" />
                            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id" />
                            <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" /> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_585791134628c84ee642849_99768853', 'product_variants', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1863124021628c84ee643364_56665853', 'product_pack', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1043374795628c84ee649c60_20160606', 'stock', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1474390696628c84ee64a534_18871419', 'product_discounts', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1663681059628c84ee64ad70_47276236', 'product_add_to_cart', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300957029628c84ee64b543_13805442', 'product_additional_info', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1732060537628c84ee64beb4_70111883', "garantias", $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_945396122628c84ee64c6a2_72432996', 'product_refresh', $this->tplIndex);
?>

                        </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_652344576628c84ee64e038_25703594 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'hook_display_reassurance'} */
class Block_1912089288628c84ee64ef45_58680652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_2138941114628c84ee650d98_63086659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_254933872628c84ee64f758_84756160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories mt-3">
            <p class="products-section-title">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

            </p>
            <div class="products">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2138941114628c84ee650d98_63086659', 'product_miniature', $this->tplIndex);
?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>
        <?php }?> <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_1891895836628c84ee651e75_47248601 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_883491653628c84ee652915_00183817 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_1310082820628c84ee653490_20937554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1832149792628c84ee653188_38494455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1310082820628c84ee653490_20937554', 'page_footer', $this->tplIndex);
?>
</footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'product_tabs'} */
class Block_1732708537628c84ee653b74_22971672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'content'} */
class Block_801591759628c84ee633a67_27698518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_801591759628c84ee633a67_27698518',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1065935177628c84ee633fb3_56289094',
  ),
  'page_content' => 
  array (
    0 => 'Block_1553485751628c84ee634308_02913258',
  ),
  'product_flags' => 
  array (
    0 => 'Block_989550015628c84ee634608_60510708',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_1269862180628c84ee637449_33070862',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1611086082628c84ee638180_24230083',
  ),
  'page_header' => 
  array (
    0 => 'Block_1666487758628c84ee638486_55834719',
  ),
  'page_title' => 
  array (
    0 => 'Block_345581248628c84ee6387a4_80706062',
  ),
  'price' => 
  array (
    0 => 'Block_2091237721628c84ee63c123_23774842',
  ),
  'sin-iva' => 
  array (
    0 => 'Block_1176218602628c84ee63ca58_55842913',
  ),
  'product_prices' => 
  array (
    0 => 'Block_679341289628c84ee63d1e5_57227733',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_1479200794628c84ee63d9d0_24642971',
  ),
  'product_customization' => 
  array (
    0 => 'Block_846649007628c84ee6406b4_58943048',
  ),
  'product_buy' => 
  array (
    0 => 'Block_82675764628c84ee641575_85774562',
  ),
  'product_variants' => 
  array (
    0 => 'Block_585791134628c84ee642849_99768853',
  ),
  'product_pack' => 
  array (
    0 => 'Block_1863124021628c84ee643364_56665853',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_321301478628c84ee648489_82332518',
    1 => 'Block_2138941114628c84ee650d98_63086659',
  ),
  'stock' => 
  array (
    0 => 'Block_1043374795628c84ee649c60_20160606',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1474390696628c84ee64a534_18871419',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1663681059628c84ee64ad70_47276236',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_300957029628c84ee64b543_13805442',
  ),
  'garantias' => 
  array (
    0 => 'Block_1732060537628c84ee64beb4_70111883',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_945396122628c84ee64c6a2_72432996',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_652344576628c84ee64e038_25703594',
    1 => 'Block_1912089288628c84ee64ef45_58680652',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_254933872628c84ee64f758_84756160',
  ),
  'product_footer' => 
  array (
    0 => 'Block_1891895836628c84ee651e75_47248601',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_883491653628c84ee652915_00183817',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1832149792628c84ee653188_38494455',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1310082820628c84ee653490_20937554',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_1732708537628c84ee653b74_22971672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="main">
        <div class="row">
            <div class="col-lg-4">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1065935177628c84ee633fb3_56289094', 'page_content_container', $this->tplIndex);
?>

            </div>
            <div class="col-lg-8">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1611086082628c84ee638180_24230083', 'page_header_container', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_679341289628c84ee63d1e5_57227733', 'product_prices', $this->tplIndex);
?>

                </div>

                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1479200794628c84ee63d9d0_24642971', 'product_description_short', $this->tplIndex);
?>

                    </div>
                    <!--Incluyo el el tpl stock para ver disponibilidad en stock-->

                    <!--------------------------------------------------------->
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_846649007628c84ee6406b4_58943048', 'product_customization', $this->tplIndex);
?>
 <?php }?>
                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82675764628c84ee641575_85774562', 'product_buy', $this->tplIndex);
?>

                    </div>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_652344576628c84ee64e038_25703594', 'hook_display_reassurance', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1912089288628c84ee64ef45_58680652', 'hook_display_reassurance', $this->tplIndex);
?>

                </div>
            </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_254933872628c84ee64f758_84756160', 'product_accessories', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1891895836628c84ee651e75_47248601', 'product_footer', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_883491653628c84ee652915_00183817', 'product_images_modal', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1832149792628c84ee653188_38494455', 'page_footer_container', $this->tplIndex);
?>

    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1732708537628c84ee653b74_22971672', 'product_tabs', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'content'} */
}
