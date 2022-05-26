<?php
/* Smarty version 3.1.43, created on 2022-05-25 09:43:09
  from 'A:\WebImpacto\xampp\htdocs\fct\themes\classic-rocket\templates\catalog\_partials\product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628dde0db72b30_78149183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aafc9bac2a2789b68a4eada1d56ec0e82a505acd' => 
    array (
      0 => 'A:\\WebImpacto\\xampp\\htdocs\\fct\\themes\\classic-rocket\\templates\\catalog\\_partials\\product-images-modal.tpl',
      1 => 1653374416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628dde0db72b30_78149183 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade js-product-images-modal" id="product-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div data-slick id="js-slick-product">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                        <figure class="position-relative rc rc_1_1">
                            <img data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid lazyload" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['width'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
">
                        </figure>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }
}
