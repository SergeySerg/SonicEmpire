<?php /*%%SmartyHeaderCode:24452577bf38859e115-01980283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '107e33eb7d80974f53336ec0c9c63c7457167660' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1467738648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24452577bf38859e115-01980283',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577bf5198ab1d4_98005003',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577bf5198ab1d4_98005003')) {function content_577bf5198ab1d4_98005003($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://sonicempire.loc/manufacturers" title="Производители">
						Производители
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://sonicempire.loc/1_fashion-manufacturer" title="Подробнее о Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Все производители</option>
													<option value="http://sonicempire.loc/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
