<?php
/* Smarty version 3.1.48, created on 2026-08-21 18:14:07
  from '/home/c/cg496041/public_html/core/components/versionx/templates/mgr/tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a886b3f082d90_56602741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cdcf8de35b60edf0594ad88c47b2d7eab9924a9' => 
    array (
      0 => '/home/c/cg496041/public_html/core/components/versionx/templates/mgr/tab.tpl',
      1 => 1767083744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a886b3f082d90_56602741 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    (function() {
        var added = false;

        // Use whichever ready event is first
        MODx.on('ready', function() {
            addVersionXTab();
        });
        Ext.onReady(function() {
            addVersionXTab();
        });

        function addVersionXTab() {
            if (added) {
                return;
            }
            added = true;
            MODx.addTab('<?php echo $_smarty_tpl->tpl_vars['tabs_component_id']->value;?>
', {
                title: _('versionx.tabheader'),
                id: 'versionx-tab',
                layout: 'anchor',
                defaults: {
                    anchor: '1',
                },
                items: [{
                    layout: 'anchor',
                    items: [{
                        xtype: 'versionx-grid-deltas',
                        principal_package: '<?php echo $_smarty_tpl->tpl_vars['principal_package']->value;?>
',
                        principal_class: '<?php echo $_smarty_tpl->tpl_vars['principal_class']->value;?>
',
                        principal: '<?php echo $_smarty_tpl->tpl_vars['principal']->value;?>
',
                        type: '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
',
                    }]
                }]
            });
            // Refresh versions grid after save
            var panel = Ext.getCmp('<?php echo $_smarty_tpl->tpl_vars['panel_id']->value;?>
');
            panel.on('success', function(o) {
                panel.find('itemId', 'versionx-grid-deltas')[0].refresh();
            });
        }
    })();
<?php echo '</script'; ?>
>
<?php }
}
