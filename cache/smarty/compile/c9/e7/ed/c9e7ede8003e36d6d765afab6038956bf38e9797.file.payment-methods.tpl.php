<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 16:05:24
         compiled from "E:\Webserver\domains\sonicempire.loc\modules\onepagecheckout\views\templates\front\payment-methods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:339058763ba4df9543-93221881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e7ede8003e36d6d765afab6038956bf38e9797' => 
    array (
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\modules\\onepagecheckout\\views\\templates\\front\\payment-methods.tpl',
      1 => 1482143540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '339058763ba4df9543-93221881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_methods' => 0,
    'payment_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58763ba4ea0f25_43620148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58763ba4ea0f25_43620148')) {function content_58763ba4ea0f25_43620148($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'E:\\Webserver\\domains\\sonicempire.loc\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['payment_methods']->value)) {?>
<table id="paymentMethodsTable" class="payment-check">
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['payment_method']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['payment_method']->iteration=0;
 $_smarty_tpl->tpl_vars['payment_method']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
 $_smarty_tpl->tpl_vars['payment_method']->iteration++;
 $_smarty_tpl->tpl_vars['payment_method']->index++;
 $_smarty_tpl->tpl_vars['payment_method']->first = $_smarty_tpl->tpl_vars['payment_method']->index === 0;
 $_smarty_tpl->tpl_vars['payment_method']->last = $_smarty_tpl->tpl_vars['payment_method']->iteration === $_smarty_tpl->tpl_vars['payment_method']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['payment_method']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['payment_method']->last;
?>
        <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2) {?>alternate_item<?php } else { ?>item<?php }?>">
            <td class="payment_action radio hidden">
                <input type="radio" name="id_payment_method" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                       id="payment_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ((count($_smarty_tpl->tpl_vars['payment_methods']->value)==1)) {?>checked="checked"<?php }?> />
            </td>
            <!--<td class="payment_name">
                <label for="payment_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php if ($_smarty_tpl->tpl_vars['payment_method']->value['img']) {?><img<?php if (isset($_smarty_tpl->tpl_vars['payment_method']->value['class'])) {?> class="cssback <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['img'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/><?php }?>
                </label>
            </td>-->
            <td class="payment_description">
                <label for="payment_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
	    	    <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['payment_method']->value['desc'],'/[\r\t\n]/',' ');?>

		</label>
	    </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    <SCRIPT>
        $(function(){
            $('.payment_description label').click(function(event){
                $('.payment_description label').removeClass('checked');
                $(this).addClass('checked');
            });
        });
    </SCRIPT>
<?php }?>
<?php }} ?>
