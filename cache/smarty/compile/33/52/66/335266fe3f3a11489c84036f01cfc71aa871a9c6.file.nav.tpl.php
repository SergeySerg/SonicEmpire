<?php /* Smarty version Smarty-3.1.19, created on 2017-01-31 17:01:06
         compiled from "E:\Webserver\domains\sonicempire.loc\admin9377xbaxo\themes\default\template\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209775890a6b2efdd33-25769731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '335266fe3f3a11489c84036f01cfc71aa871a9c6' => 
    array (
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\admin9377xbaxo\\themes\\default\\template\\nav.tpl',
      1 => 1485814747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209775890a6b2efdd33-25769731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'tab' => 0,
    'tabs' => 0,
    't' => 0,
    't2' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5890a6b3064f42_31658585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5890a6b3064f42_31658585')) {function content_5890a6b3064f42_31658585($_smarty_tpl) {?><div class="bootstrap">
	<nav id="<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu) {?>nav-sidebar<?php } else { ?>nav-topbar<?php }?>" role="navigation">
		<?php if (!$_smarty_tpl->tpl_vars['tab']->value) {?>
			<div class="mainsubtablist" style="display:none;"></div>
		<?php }?>
		<ul class="menu">
			<li class="searchtab">
				<?php echo $_smarty_tpl->getSubTemplate ("search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"header_search",'show_clear_btn'=>1), 0);?>

			</li>
			<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['t']->value['active']) {?>
				<li class="maintab <?php if ($_smarty_tpl->tpl_vars['t']->value['current']) {?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>has_submenu<?php }?>" id="maintab-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
">
					<a href="<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])&&isset($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="title" >
						<i class="icon-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
"></i>
						<span><?php if ($_smarty_tpl->tpl_vars['t']->value['name']=='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
					</a>
					<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>
						<ul class="submenu">
						<?php  $_smarty_tpl->tpl_vars['t2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t2']->key => $_smarty_tpl->tpl_vars['t2']->value) {
$_smarty_tpl->tpl_vars['t2']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']) {?>
							<li id="subtab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['t2']->value['current']) {?> class="active"<?php }?>>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php if ($_smarty_tpl->tpl_vars['t2']->value['name']=='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
								</a>
							</li>
							<?php }?>
						<?php } ?>
						</ul>
					<?php }?>
				</li>
				<?php }?>
			<?php } ?>
            <li class="maintab">
                <a href='<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=blocksocial&tab_module=front_office_features&module_name=blocksocial' class="title" >
                    <i class="icon-AdminParentCustomer"></i>
                    <span>Редактор Соц. сетей</span>
                </a>
            </li>
			<li class="maintab">
				<a href='<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=productcomments&tab_module=front_office_features&module_name=productcomments' class="title" >
					<i class="icon-AdminSmartBlog"></i>
					<span>Модератор отзывов</span>
				</a>
			</li>
			<li class="maintab">
				<a href='<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin9377xbaxo/index.php?controller=AdminTranslations&lang=ru&type=mails&theme=sonicempire&token=3d4d4508fd20b8e99271c78b1d40e53e' class="title" >
					<i class="icon-AdminParentOrders"></i>
					<span>Редактор писем для клиентов</span>
				</a>
			</li>
			<!--<li class="maintab">
				<a href='<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=bankwire&tab_module=payments_gateways&module_name=bankwire' class="title" >
					<i class="icon-AdminPriceRule"></i>
					<span>Реквизиты банковского перевода</span>
				</a>
			</li>-->
			<li class="maintab">
				<a href='<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=cheque&tab_module=payments_gateways&module_name=cheque' class="title" >
					<i class="icon-AdminParentOrders"></i>
					<span>Реквизиты пластиковой карты</span>
				</a>
			</li>
			<li class="maintab">
				<a href='<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=blocklayered&tab_module=front_office_features&module_name=blocklayered' class="title" >
					<i class="icon-AdminTools"></i>
					<span>Фильтр категорий</span>
				</a>
			</li>
			<li class="maintab">
				<a href='<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=blockcontact&tab_module=front_office_features&module_name=blockcontact' class="title" >
					<i class="icon-AdminParentCustomer"></i>
					<span>Изменить конт. телефон</span>
				</a>
			</li>
			<li class="maintab">
				<a href='<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=mailalerts&tab_module=administration&module_name=mailalerts' class="title" >
					<i class="icon-AdminSmartBlog"></i>
					<span>Почта для получения уведомл. о заказах</span>
				</a>
			</li>
		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify icon-rotate-90"></i>
		</span>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminNavBarBeforeEnd'),$_smarty_tpl);?>

	</nav>
</div><?php }} ?>
