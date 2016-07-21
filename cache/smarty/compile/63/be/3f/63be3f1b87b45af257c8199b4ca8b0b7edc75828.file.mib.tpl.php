<?php /* Smarty version Smarty-3.1.19, created on 2016-07-22 00:31:01
         compiled from "D:\Webserver\domains\sonicempire.loc\modules\mib\views\templates\hook\mib.tpl" */ ?>
<?php /*%%SmartyHeaderCode:421557913f158268b1-20267856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63be3f1b87b45af257c8199b4ca8b0b7edc75828' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\mib\\views\\templates\\hook\\mib.tpl',
      1 => 1468835251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '421557913f158268b1-20267856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'manufacturers' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'content_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57913f158a7751_64835084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57913f158a7751_64835084')) {function content_57913f158a7751_64835084($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['page_name']->value!='index')) {?>
    <div class="manuf-light" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
                        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['image']) {?>
                            <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']) {?>first_item<?php } else { ?>item<?php }?>">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Подробнее о %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'mib'),$_smarty_tpl);?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['image_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </li>
                        <?php }?>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </div>

    <?php } else { ?>
    <div class="manuf" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
                        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['image']) {?>
                            <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']) {?>first_item<?php } else { ?>item<?php }?>">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Подробнее о %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'mib'),$_smarty_tpl);?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['image_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php }?>
<!--
	<div class="manuf-dropdown">

		<div class="container">
			<div class="row">

				<div class="manuf-logo-dropdown"><img src="img/Manufactory/marshall.png"></div>
				<div class="manuf-description-dropdown">
					<section>
						<p>Компания Marshall получила международное признание как бесспорным японским лидер в производстве высококачественного звукового и аудиовизуального оборудования, программных средств в развлекательной и информационной индустрии, а также как единственная…</p>
						<a href="#" class="more">Подробнее<i class="fa fa-angle-down"></i></a>
					</section>
				</div>
			</div>
		</div>
	</div>

</div>
-->
<?php }} ?>
