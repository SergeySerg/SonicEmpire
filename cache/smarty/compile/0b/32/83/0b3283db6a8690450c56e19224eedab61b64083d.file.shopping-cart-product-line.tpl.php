<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 16:00:56
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/modules/onepagecheckout/views/templates/front/shopping-cart-product-line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34583559057c6d5083339f5-87446308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b3283db6a8690450c56e19224eedab61b64083d' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/modules/onepagecheckout/views/templates/front/shopping-cart-product-line.tpl',
      1 => 1472568282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34583559057c6d5083339f5-87446308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'productLast' => 0,
    'ignoreProductLast' => 0,
    'productFirst' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'customizedDatas' => 0,
    'quantityDisplayed' => 0,
    'odd' => 0,
    'link' => 0,
    'smallSize' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'cannotModify' => 0,
    'token_cart' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
    'symbol' => 0,
    'priceReduction' => 0,
    'noDeleteButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d5085d68a6_23103651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d5085d68a6_23103651')) {function content_57c6d5085d68a6_23103651($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/usr/www/users/stalkeg/sonicempire.com.ua/tools/smarty/plugins/modifier.regex_replace.php';
?><!--Блок вывода товаров в корзине-->
<tr id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_0_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>" class="<?php if (isset($_smarty_tpl->tpl_vars['productLast']->value)&&$_smarty_tpl->tpl_vars['productLast']->value&&(!isset($_smarty_tpl->tpl_vars['ignoreProductLast']->value)||!$_smarty_tpl->tpl_vars['ignoreProductLast']->value)) {?>last_item<?php } elseif (isset($_smarty_tpl->tpl_vars['productFirst']->value)&&$_smarty_tpl->tpl_vars['productFirst']->value) {?>first_item<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])&&$_smarty_tpl->tpl_vars['quantityDisplayed']->value==0) {?>alternate_item<?php }?> cart_item address_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
 <?php if ($_smarty_tpl->tpl_vars['odd']->value) {?>odd<?php } else { ?>even<?php }?>">
	<td class="my-cart_product-remove">
		<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['smallSize']->value)) {?>width="<?php echo $_smarty_tpl->tpl_vars['smallSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['smallSize']->value['height'];?>
" <?php }?> /></a>
	</td>
	<td class="my-cart_product-description">
        <h4 class="manuf-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'];?>
</h4>
		<h5 class="model-name"><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h5>
		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']) {?><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a><?php }?>
	</td>

    <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
    <td class="my-cart_product-available"><span class="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available']<=0&&!$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>label label-available_later<?php } else { ?>label label-success<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available']<=0) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later'])&&$_smarty_tpl->tpl_vars['product']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now'])&&$_smarty_tpl->tpl_vars['product']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?></span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
</td>
    <?php }?>

    <td class="my-cart_product-quantity"<?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])&&$_smarty_tpl->tpl_vars['quantityDisplayed']->value==0) {?> style="text-align: center;"<?php }?>>
        <?php if (isset($_smarty_tpl->tpl_vars['cannotModify']->value)&&$_smarty_tpl->tpl_vars['cannotModify']->value==1) {?>
            <span style="float:left">
				<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;?>

                <?php }?>
			</span>
        <?php } else { ?>
            <?php if (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])&&$_smarty_tpl->tpl_vars['quantityDisplayed']->value==0) {?>
                <span id="cart_quantity_custom_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" ><?php echo $_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'];?>
</span>
            <?php }?>
            <?php if (!isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])||$_smarty_tpl->tpl_vars['quantityDisplayed']->value>0) {?>

                <div id="cart_quantity_button" class="updown-quantity" style="float:left;">
                    <div class="quantity">
                        <span> <input size="2" type="text" autocomplete="off" class="quantity" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;?>
<?php }?>"  name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_0_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" /></span>
                    </div>
                            <ul class="updown-quantity">
                                <li class="quantity-up"> <a rel="nofollow" class="cart_quantity_up" id="cart_quantity_up_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_0_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"add&amp;id_product=".$_tmp7."&amp;ipa=".$_tmp8."&amp;id_address_delivery=".$_tmp9."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value));?>
" title="<?php echo smartyTranslate(array('s'=>'Add','mod'=>'onepagecheckout'),$_smarty_tpl);?>
"></a>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value)||$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1) {?>
                                <li class="quantity-down"> <a rel="nofollow" class="cart_quantity_down" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_0_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php $_tmp12=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"add&amp;id_product=".$_tmp10."&amp;ipa=".$_tmp11."&amp;id_address_delivery=".$_tmp12."&amp;op=down&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value));?>
" title="<?php echo smartyTranslate(array('s'=>'Subtract','mod'=>'onepagecheckout'),$_smarty_tpl);?>
"></a>
                                <?php } else { ?>
                                <li class="quantity-down"> <a class="cart_quantity_down" style="opacity: 0.2;" href="#" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_0_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" title="<?php echo smartyTranslate(array('s'=>'You must purchase a minimum of %d of this product.','sprintf'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'],'mod'=>'onepagecheckout'),$_smarty_tpl);?>
"></a>
                                <?php }?>
                            </ul>
                </div>
                <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?><?php echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;?>
<?php }?>" name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_0_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
_hidden" />
            <?php }?>
        <?php }?>
    </td>
	<td class="my-cart_product-total">
		<span class="price" id="product_price_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
				<li class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift!','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</li>
			<?php } else { ?>
            	<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
					<li class="price<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']&&isset($_smarty_tpl->tpl_vars['product']->value['reduction_applies'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_applies']) {?> special-price<?php }?>"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_wt']),$_smarty_tpl);?>
</li>
				<?php } else { ?>
               	 	<li class="price<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']&&isset($_smarty_tpl->tpl_vars['product']->value['reduction_applies'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_applies']) {?> special-price<?php }?>"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
</li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']&&isset($_smarty_tpl->tpl_vars['product']->value['reduction_applies'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_applies']) {?>
                	<li class="price-percent-reduction small">
            			<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
            				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
                    			<?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price_wt']-$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']), null, 0);?>
                    			<?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
                    		<?php } else { ?>
                    			<?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']-$_smarty_tpl->tpl_vars['product']->value['price_wt'])/$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price'])*100*-1, null, 0);?>
                    			<?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
                    		<?php }?>
						<?php } else { ?>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])&&$_smarty_tpl->tpl_vars['product']->value['reduction_type']=='amount') {?>
								<?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['price']-$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']), null, 0);?>
								<?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value->sign, null, 0);?>
                    		<?php } else { ?>
                    			<?php $_smarty_tpl->tpl_vars['priceReduction'] = new Smarty_variable((($_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']-$_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price'])*100*-1, null, 0);?>
                    			<?php $_smarty_tpl->tpl_vars['symbol'] = new Smarty_variable('%', null, 0);?>
                    		<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['symbol']->value=='%') {?>
							&nbsp;<?php echo smarty_modifier_regex_replace(sprintf("%.2f",round($_smarty_tpl->tpl_vars['priceReduction']->value,2)),"/[^\d]0+"."$"."/",'');?>
<?php echo $_smarty_tpl->tpl_vars['symbol']->value;?>
&nbsp;
						<?php } else { ?>
							&nbsp;<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['priceReduction']->value),$_smarty_tpl);?>
&nbsp;
						<?php }?>
                    </li>
					<li class="old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']),$_smarty_tpl);?>
</li>
				<?php }?>
			<?php }?>
		</span>
	</td>

	<td class="my-cart_product-remove">
        <?php if (!isset($_smarty_tpl->tpl_vars['noDeleteButton']->value)||!$_smarty_tpl->tpl_vars['noDeleteButton']->value) {?>
            <?php if ((!isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])||$_smarty_tpl->tpl_vars['quantityDisplayed']->value)>0&&empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
                <a rel="nofollow" class="my-rmv cart_quantity_delete" id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_0_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php $_tmp15=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"delete=1&amp;id_product=".$_tmp13."&amp;ipa=".$_tmp14."&amp;id_address_delivery=".$_tmp15."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value));?>
"></a><br />
            <?php }?>
        <?php }?>
		<!--<span class="price" id="total_product_price_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
				<span class="gift-icon"><?php echo smartyTranslate(array('s'=>'Gift!','mod'=>'onepagecheckout'),$_smarty_tpl);?>
</span>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value==0&&isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) {?>
					<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization']),$_smarty_tpl);?>
<?php }?>
				<?php } else { ?>
					<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl);?>
<?php }?>
				<?php }?>
			<?php }?>
		</span>-->
	</td>
</tr>
<!--/Блок вывода товаров в корзине--><?php }} ?>
