<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 15:40:59
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/modules/homesliderpro/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66981187757c6d05bd793e2-49484917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '944668b632d23b8d1749083751d85f30a1b6e408' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/modules/homesliderpro/views/templates/hook/header.tpl',
      1 => 1472568276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66981187757c6d05bd793e2-49484917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuration' => 0,
    'hook' => 0,
    'conf' => 0,
    'size' => 0,
    'value' => 0,
    'rtlslide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d05be62702_00854656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d05be62702_00854656')) {function content_57c6d05be62702_00854656($_smarty_tpl) {?><style type="text/css" class="slidersEverywhereStyle">


<?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['configuration']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->_loop = true;
 $_smarty_tpl->tpl_vars['hook']->value = $_smarty_tpl->tpl_vars['conf']->key;
?>
	.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 {
		padding:<?php echo $_smarty_tpl->tpl_vars['conf']->value['media']['max']['tspace'];?>
px <?php echo $_smarty_tpl->tpl_vars['conf']->value['media']['max']['rspace'];?>
px <?php echo $_smarty_tpl->tpl_vars['conf']->value['media']['max']['bspace'];?>
px <?php echo $_smarty_tpl->tpl_vars['conf']->value['media']['max']['lspace'];?>
px;
		width:<?php echo $_smarty_tpl->tpl_vars['conf']->value['media']['max']['swidth'];?>
%;
		<?php if ($_smarty_tpl->tpl_vars['conf']->value['media']['max']['pos']>0) {?>
			<?php if ($_smarty_tpl->tpl_vars['conf']->value['media']['max']['pos']==1) {?>clear:both;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['conf']->value['media']['max']['pos']==1) {?>float:left;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['conf']->value['media']['max']['pos']==2) {?>margin:0 auto;clear:both;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['conf']->value['media']['max']['pos']==3) {?>float:right;<?php }?>
		<?php }?>
	}

	.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .slidetitle {
		background:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['titlebg'];?>
;
		color:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['titlec'];?>
;
	}

	.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .slide_description {
		background:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['descbg'];?>
;
		color:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['descc'];?>
;
	}

	.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .se-next, .SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .se-prev {
		background:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['arrowbg'];?>
;
		color:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['arrowc'];?>
;
	}

	.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .se-next:hover, .SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .se-prev:hover {
		text-shadow:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['arrowg'];?>
;
	}
	
	.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .se-pager-item {
		border-color:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['pagerbc'];?>
;
	}
	
	.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .se-pager-item:hover {
		border-color:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['pagerhbc'];?>
;
		box-shadow:0 0 3px <?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['pagerhg'];?>
;
	}
	
	.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .se-pager a {
		background-color:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['pagerc'];?>
;
	}
	
	.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 .se-pager a.se-pager-link.active {
		background-color:<?php echo $_smarty_tpl->tpl_vars['conf']->value['color']['pagerac'];?>
;
	}
	
	/** media queries **/

	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['conf']->value['media']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['size']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['size']->value!='max') {?> 
			@media all and (max-width: <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
px) {
				.SEslider.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
 {
					padding:<?php echo $_smarty_tpl->tpl_vars['value']->value['tspace'];?>
px <?php echo $_smarty_tpl->tpl_vars['value']->value['rspace'];?>
px <?php echo $_smarty_tpl->tpl_vars['value']->value['bspace'];?>
px <?php echo $_smarty_tpl->tpl_vars['value']->value['lspace'];?>
px;
					width:<?php echo $_smarty_tpl->tpl_vars['value']->value['swidth'];?>
%;
					<?php if ($_smarty_tpl->tpl_vars['value']->value['pos']>0) {?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['pos']==1) {?>float:left;<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['pos']==2) {?>margin:0 auto;<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['pos']==3) {?>float:right;<?php }?>
					<?php }?>
				}
			}
		<?php }?>
	<?php } ?>


<?php } ?>

/** rtl **/

<?php if ($_smarty_tpl->tpl_vars['rtlslide']->value) {?>
.SEslider, .SEslider * {
  direction: ltr !important;
}

.SEslider .slidetitle, .SEslider .slide_description {
  direction: rtl !important;
}

.SEslider .areaslide.block.transparent .areabuttcont {
	text-align:right;
}

<?php }?>

</style><?php }} ?>
