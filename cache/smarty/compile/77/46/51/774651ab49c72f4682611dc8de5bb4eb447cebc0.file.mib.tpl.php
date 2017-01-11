<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 15:48:28
         compiled from "E:\Webserver\domains\sonicempire.loc\modules\mib\views\templates\hook\mib.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14085587637ac891f11-14439293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '774651ab49c72f4682611dc8de5bb4eb447cebc0' => 
    array (
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\modules\\mib\\views\\templates\\hook\\mib.tpl',
      1 => 1482757512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14085587637ac891f11-14439293',
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
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587637aca22984_11198421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587637aca22984_11198421')) {function content_587637aca22984_11198421($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['page_name']->value!='index')) {?>
    <!--Скрипт выпидающего текста-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.more').click(function(){
                $(this).parent().parent().children('.spoiler-body').slideToggle(700);
                $('.more i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
                return false;
            });

/*
            $('.r-tab').on('click', function(e){
                if($(this).hasClass('active')){
                    $('.r-tab-data').slideUp('1000');
                    $(this).removeClass('active');
                    e.preventDefault();
                    return false;
                };

/!*
                var dataId = $(this).attr('data-id');
                $('a[data-id=' + dataId + ']').parent().hide();
*!/

                var idTab = $(this).attr('data-tab');
                $('.r-tab').removeClass('active');
                $(this).addClass('active');

                $('.r-tab-data').slideUp('1000');
                $(idTab).delay('500').slideDown('1000');
                e.preventDefault();
                return false;
            });
*/

            $("#r-owl-demo").owlCarousel({
              autoPlay: 3000, //Set AutoPlay to 3 seconds
              items : 12,
              itemsDesktop: [1199,8],
              itemsDesktopSmall:	[979,6],
              itemsTablet:	[768,4],
              itemsMobile:	[479,2],
              pagination : true
            });

        $('.manuf li a').on('click', function () {
            alert(1);
        })

    });
    </script>
    <!--/Скрипт выпидающего текста-->
    <div class="manuf-light" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul id="r-owl-demo">
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
" data-id="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'];?>
" data-tab="#manufacturer-descrition-<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'];?>
" title="<?php echo smartyTranslate(array('s'=>'Подробнее о %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'mib'),$_smarty_tpl);?>
" class="r-tab no-loader manufacturer-tab">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['image_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
                <ul class="dropdown-manuf-list">
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
                        <li id="manufacturer-descrition-<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'];?>
" class="r-tab-data manuf-dropdown" style="display:none">
                            <hr>
                            <div class="manuf-logo-dropdown">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Подробнее о %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'mib'),$_smarty_tpl);?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['image_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </div>
                            <div class="manuf-description-dropdown">
                                <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>

                                <div class="spoiler-body" style="display: none;"><section><p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>
</p></section></div>
                                <div class="r-link-block">
                                    <a href="#" class="more">Подробнее<i class="fa fa-angle-down"></i></a>

                                </div>
                            </div>

                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="manuf" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
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
                        <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['image']&&$_smarty_tpl->tpl_vars['i']->value<=12) {?>
                            <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']) {?>first_item<?php } else { ?>item<?php }?>">
                                <a class="no-loader" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Подробнее о %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'mib'),$_smarty_tpl);?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['image_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </li>
                        <?php }?>
                        <div style="display:none"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</div>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="manuf-light-main" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul id="r-owl-main">
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
" data-id="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'];?>
" data-tab="#manufacturer-descrition-<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'];?>
" title="<?php echo smartyTranslate(array('s'=>'Подробнее о %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'mib'),$_smarty_tpl);?>
" class="r-tab manufacturer-tab">
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
    <script>
        $(function () {
            $("#r-owl-main").owlCarousel({
                autoPlay: 2000, //Set AutoPlay to 3 seconds
                items : 12,
                itemsDesktop: [1199,8],
                itemsDesktopSmall:	[979,6],
                itemsTablet:	[768,4],
                itemsMobile:	[479,2],
                pagination : true,
            });
        });
    </script>
    

    
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
