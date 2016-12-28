<?php /* Smarty version Smarty-3.1.19, created on 2016-12-26 14:59:29
         compiled from "D:\OpenServer\domains\sonicempire.loc\themes\sonicempire\modules\blockcategories\blockcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13475860fbd0bd2973-06148091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1401cc05491e6bc95a5298513d864d47fc393e3' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1482757157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13475860fbd0bd2973-06148091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5860fbd0c30578_20143506',
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'child' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5860fbd0c30578_20143506')) {function content_5860fbd0c30578_20143506($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['blockCategTree']->value&&count($_smarty_tpl->tpl_vars['blockCategTree']->value['children'])) {?>
<!-- Block categories module -->
<div id="categories_block_left">
	<!--<h2 class="title_block">
		<?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {?>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentCategory']->value->name, ENT_QUOTES, 'UTF-8', true);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl);?>

		<?php }?>
	</h2>-->
        <ul id="r-catalog-open" class="col-xs-12 catalog">
            <li class="raund-categories">
                <span class="grower CLOSE"></span>
                <a href="#"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl);?>
</a>
            </li>
        </ul>

    <div id="raund-categories-hide" class="r-categories-hide">
        <ul id="menu" class="catalog tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
            <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

                <?php }?>
            <?php } ?>
        </ul>
    </div>

</div>
<!-- /Block categories module -->
<?php }?>



    <!--Сортировка товара-->

    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp7=='manufacturer'||$_tmp8=='category') {?>
        <ul id="r-filters-open" class="col-xs-12 catalog">
            <li class="raund-filters">
                <a href="#">Фильтры</a>
            </li>
        </ul>

        <div class="r-filter-adaptive">
            <div id="filter-close">
                <h4>Закрыть</h4>
            </div>
            <div class="sort" id="sorting_product" style="display: none">
                <h4>Сортировка</h4>
                <label data-sort="price:desc"><input type="radio" name="sorting">Высокая цена в начале</label>
                <label data-sort="price:asc"><input type="radio" name="sorting">Низкая цена в начале</label>
                <label data-sort="sales:asc"><input type="radio" name="sorting">Самые популярные в начале</label>
            </div>
            <SCRIPT>
                $(function(){
                    if($('#selectProductSort').length > 0){
                        var currentSort = $("#selectProductSort option:selected").val();
                        console.info('Направление сортировки: ', currentSort);
                        $('#sorting_product label[data-sort="' + currentSort + '"]').addClass('checked');

                        $('#sorting_product').fadeIn(3000);

                        $('#sorting_product label').click(function(event){

                            var sort = $(this).attr('data-sort');
                            console.info('Изменение направления сортировки: ', sort);

                            $('#sorting_product label').removeClass('checked');
                            $(this).addClass('checked');

                            $('#selectProductSort option').removeAttr('selected');
                            $('#selectProductSort option[value="' + sort + '"]').attr("selected", "selected");
                            $('#selectProductSort').change();
                            //$('#selectProductSort option[value="' + sort + '"]').trigger('click');

                            event.preventDefault();
                        });
                    }
                });

            </SCRIPT>
    <?php }?>
    <!--/Сортировка товара--><?php }} ?>
