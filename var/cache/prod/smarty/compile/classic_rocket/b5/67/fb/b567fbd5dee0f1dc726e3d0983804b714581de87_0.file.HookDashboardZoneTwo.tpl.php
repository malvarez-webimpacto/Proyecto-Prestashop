<?php
/* Smarty version 3.1.43, created on 2022-05-23 17:09:10
  from 'A:\WebImpacto\xampp\htdocs\fct\modules\ps_metrics\views\templates\hook\HookDashboardZoneTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_628ba3968cc5b2_75950441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b567fbd5dee0f1dc726e3d0983804b714581de87' => 
    array (
      0 => 'A:\\WebImpacto\\xampp\\htdocs\\fct\\modules\\ps_metrics\\views\\templates\\hook\\HookDashboardZoneTwo.tpl',
      1 => 1652784536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628ba3968cc5b2_75950441 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="metrics-app"></div>
<link rel="stylesheet" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsAssets']->value ));?>
" type="text/css" media="all">

<?php echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8' ));?>
" async defer><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['pathMetricsAppSourceMap']->value) {?>
  <?php echo '<script'; ?>
 type="application/json" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsAppSourceMap']->value ));?>
" async defer><?php echo '</script'; ?>
>
<?php }
}
}
