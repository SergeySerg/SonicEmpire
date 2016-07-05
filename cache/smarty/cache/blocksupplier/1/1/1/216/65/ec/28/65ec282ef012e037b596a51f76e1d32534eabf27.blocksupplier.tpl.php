<?php /*%%SmartyHeaderCode:31081577bf3889091e2-46931554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65ec282ef012e037b596a51f76e1d32534eabf27' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1467738648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31081577bf3889091e2-46931554',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577bf5199d7e90_32109801',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577bf5199d7e90_32109801')) {function content_577bf5199d7e90_32109801($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://sonicempire.loc/supplier" title="Поставщики">
					Поставщики
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://sonicempire.loc/1__fashion-supplier" 
					title="Подробнее о Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Все поставщики</option>
													<option value="http://sonicempire.loc/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
