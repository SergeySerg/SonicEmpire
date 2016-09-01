<?php /*%%SmartyHeaderCode:17979417757c6d0bc98ae75-16019353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e8227069918811296ac1988707b08e7451c28c' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/modules/blockcategories/blockcategories.tpl',
      1 => 1472568518,
      2 => 'file',
    ),
    'daaad4abee817c8e76008ff3a2724c11815a0627' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/modules/blockcategories/category-tree-branch.tpl',
      1 => 1472568518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17979417757c6d0bc98ae75-16019353',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d765a333c5_10323666',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d765a333c5_10323666')) {function content_57c6d765a333c5_10323666($_smarty_tpl) {?><div id="categories_block_left"><ul id="menu" class="catalog tree dhtml"><li class="cat_expand"> <a href="http://sonicempire.com.ua/15-zvukovoe-oborudovanie" "> Звуковое оборудование </a><ul class="sub_menu" style="display:block"><li class=""> <a href="http://sonicempire.com.ua/16-akusticheskie-sistemy" "> Акустические системы </a></li><li class=""> <a href="http://sonicempire.com.ua/17-usiliteli-mosshnosti" "> Усилители мощности </a></li></ul></li><li class=""> <a href="http://sonicempire.com.ua/18-svetovoe-oborudovanie" "> Световое оборудование </a><ul class="sub_menu" style="display:block"><li class=""> <a href="http://sonicempire.com.ua/19-golovy" "> Головы </a></li><li class=""> <a href="http://sonicempire.com.ua/20-skanery" "> Сканеры </a></li><li class=""> <a href="http://sonicempire.com.ua/21-stroboskopy" "> Стробоскопы </a></li></ul></li><li class=""> <a href="http://sonicempire.com.ua/13-akustika" "> Акустика </a><ul class="sub_menu" style="display:block"><li class=""> <a href="http://sonicempire.com.ua/14-napolnaya" "> Напольная </a></li></ul></li><li class="cat_expand"> <a href="http://sonicempire.com.ua/12-komplekty-akustiki" "> Комплекты акустики </a></li><li class=""> <a href="http://sonicempire.com.ua/22-naushniki" class="selected" style="color: #bf6d3b; " "> Наушники </a></li></ul> <script>/* <![CDATA[ */;$(function(){setTimeout(function(){$('.cat_expand span').trigger('click');},0);});/* ]]> */</script> </div><div class="sort" id="sorting_product" style="display: none"><h4>Сортировка</h4> <label data-sort="price:desc"><input type="radio" name="sorting">Высокая цена в начале</label> <label data-sort="price:asc"><input type="radio" name="sorting">Низкая цена в начале</label> <label data-sort="sales:asc"><input type="radio" name="sorting">Самые популярные в начале</label></div> <script>/* <![CDATA[ */;$(function(){if($('#selectProductSort').length>0){var currentSort=$("#selectProductSort option:selected").val();console.info('Направление сортировки: ',currentSort);$('#sorting_product label[data-sort="'+currentSort+'"]').addClass('checked');$('#sorting_product').fadeIn(3000);$('#sorting_product label').click(function(event){var sort=$(this).attr('data-sort');console.info('Изменение направления сортировки: ',sort);$('#sorting_product label').removeClass('checked');$(this).addClass('checked');$('#selectProductSort option').removeAttr('selected');$('#selectProductSort option[value="'+sort+'"]').attr("selected","selected");$('#selectProductSort').change();event.preventDefault();});}});/* ]]> */</script> <?php }} ?>
