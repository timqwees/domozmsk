<?php
/* Smarty version 3.1.48, created on 2026-08-21 18:14:07
  from '/home/c/cg496041/public_html/core/components/versionx/templates/mgr/diff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a886b3f775bc6_30700647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55391fd98301c323f741a660bec4c87b0d289776' => 
    array (
      0 => '/home/c/cg496041/public_html/core/components/versionx/templates/mgr/diff.tpl',
      1 => 1767083744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a886b3f775bc6_30700647 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="versionx-field-diff-container">
    <div class="versionx-field-diff-top-row">
        <div class="versionx-field-diff-name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
        <div class="versionx-field-diff-spacer"></div>
        <?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
        <button class="versionx-field-diff-undo-btn-<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
 versionx-field-diff-undo-btn" data-field_id="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" data-delta_id="<?php echo $_smarty_tpl->tpl_vars['delta_id']->value;?>
">
            <i class="icon icon-arrow-left"></i><span><?php echo $_smarty_tpl->tpl_vars['undo']->value;?>
</span>
        </button>
        <?php }?>
    </div>
    <div class="versionx-field-diff"><?php echo $_smarty_tpl->tpl_vars['diff']->value;?>
</div>
</div><?php }
}
