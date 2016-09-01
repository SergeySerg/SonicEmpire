<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 15:53:59
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/modules/blockcartaccessories/views/blockcartaccessories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213680649557c6d3677f4ef2-18744515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3e66567ad19c7cbdaea3b5d3b03d54495f2b036' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/modules/blockcartaccessories/views/blockcartaccessories.tpl',
      1 => 1472567977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213680649557c6d3677f4ef2-18744515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeacc' => 0,
    'product' => 0,
    'link' => 0,
    'homeSize' => 0,
    'quick_view' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
    'bcachnbr' => 0,
    'bcaccmaxacc' => 0,
    'tzc_hover_show2' => 0,
    'tzc_but_show2' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'tzc_more_show2' => 0,
    'tzc_qty_show2' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'items_wide2' => 0,
    'items_desktop2' => 0,
    'items_desktop_small2' => 0,
    'items_tablet2' => 0,
    'items_mobile2' => 0,
    'tzc_autoplay2' => 0,
    'tzc_nav2' => 0,
    'tzc_nav_text2' => 0,
    'productodr' => 0,
    'productord' => 0,
    'tzc_new_show2' => 0,
    'productsViewedObj' => 0,
    'showviewed' => 0,
    'viewedProduct' => 0,
    'sameprod' => 0,
    'homeaccv' => 0,
    'accessoryv' => 0,
    'news' => 0,
    'productnew' => 0,
    'others' => 0,
    'productoth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d3687358d1_97928884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d3687358d1_97928884')) {function content_57c6d3687358d1_97928884($_smarty_tpl) {?>﻿<!--Compatible accessories cart products-->
<?php if (isset($_smarty_tpl->tpl_vars['homeacc']->value)&&count($_smarty_tpl->tpl_vars['homeacc']->value)>2) {?>
<div class="accompaying-goods-in-cart">
    <h4><?php echo smartyTranslate(array('s'=>'Accessories','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</h4>
        <!-- Products list -->
        <ul id="owl-sliderc" class="owl-carousel product_list grid prom">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeacc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <li class="item ajax_block_product">
                    <div class="product-item" itemscope itemtype="http://schema.org/Product">

                            <div class="product-item-img_in-cart">
                                <a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
                                    <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
                                </a>
                                <!--<?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                                    <div class="quick-view-wrapper-mobile">
                                        <a class="quick-view-mobile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    </div>
                                    <a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                                <span class="old-price product-price">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

                                        </span>
                                            <?php }?>
                                            <span itemprop="price" class="price product-price">
                                        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                                    </span>
                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                        <?php }?>
                                    </div>
                                <?php }?>-->
                                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&'tzc_new_show2'==1&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>
                                        <span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sall','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl);?>



                            <h4 class="product-item-manufactory_in-cart"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h4>
                            <h5 class="product-item-name_in-cart">
                                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?>
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h5>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

                           <!-- <p class="product-desc<?php if ($_smarty_tpl->tpl_vars['bcachnbr']->value==1) {?>r<?php }?>" itemprop="description">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bcaccmaxacc']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),$_tmp1,'...');?>

                            </p>-->
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>

                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                            <span class="old-price product-price">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

                                </span>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'type'=>"old_price"),$_smarty_tpl);?>

                                        <?php }?>
                                        <span itemprop="price" class="product-item-price_in-cart">
                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                            </span>
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                    <?php }?>
                                </div>

                            <?php }?>
                            <div class="button-container<?php if ($_smarty_tpl->tpl_vars['tzc_hover_show2']->value==1) {?> hovereff<?php }?>">
                                <?php if ((($_smarty_tpl->tpl_vars['tzc_but_show2']->value==1)&&($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>
                                    <?php if ((!isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])||!$_smarty_tpl->tpl_vars['product']->value['customization_required'])&&($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp2."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$product.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php }?>
                                    <?php } else { ?>
                                        <span class="button ajax_add_to_cart_button btn btn-default disabled">
                                    <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                </span>
                                    <?php }?>
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['tzc_more_show2']->value==1)) {?>
                                <a itemprop="url" class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
">
                                    <span><?php echo smartyTranslate(array('s'=>'More','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                </a>
                                <?php }?>
                            </div>
                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['color_list'])) {?>
                                <div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['product']->value['color_list'];?>
</div>
                            <?php }?>
                            <!--<div class="product-flags">
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['online_only'])&&$_smarty_tpl->tpl_vars['product']->value['online_only']) {?>
                                        <span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                            </div>
                            <?php if (($_smarty_tpl->tpl_vars['tzc_qty_show2']->value==1&&(!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']))))) {?>

                                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
                                <?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
                                    <span class="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0&&!$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>out-of-stock<?php } else { ?>available-now<?php }?>">
                                        <link itemprop="availability" href="http://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later'])&&$_smarty_tpl->tpl_vars['product']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now'])&&$_smarty_tpl->tpl_vars['product']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
                                    </span>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
                                    <span class="available-dif">
                                        <link itemprop="availability" href="http://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

                                    </span>
                                <?php } else { ?>
                                    <span class="out-of-stock">
                                        <link itemprop="availability" href="http://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

                                    </span>
                                <?php }?>
                            </span>
                                <?php }?>

                            <?php }?>-->

                        
                    </div><!-- .product-container> -->
                </li>
            <?php } ?>
        </ul>
    <script>
        $(document).ready(function() {
            var owlc = $("#owl-sliderc");
            owlc.owlCarousel({
                items : <?php echo $_smarty_tpl->tpl_vars['items_wide2']->value;?>
, //10 items above 1000px browser width
                itemsDesktop : [1000,<?php echo $_smarty_tpl->tpl_vars['items_desktop2']->value;?>
], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,<?php echo $_smarty_tpl->tpl_vars['items_desktop_small2']->value;?>
], // 3 items betweem 900px and 601px
                itemsTablet: [600,<?php echo $_smarty_tpl->tpl_vars['items_tablet2']->value;?>
], //2 items between 600 and 0;
                itemsMobile : <?php echo $_smarty_tpl->tpl_vars['items_mobile2']->value;?>
, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: <?php if ($_smarty_tpl->tpl_vars['tzc_autoplay2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigation: <?php if ($_smarty_tpl->tpl_vars['tzc_nav2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigationText: <?php if ($_smarty_tpl->tpl_vars['tzc_nav_text2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                pagination: true,
            });
        });
    </script>  
</div>
<?php }?>



<!--Customer also bougth-->
<?php if (isset($_smarty_tpl->tpl_vars['productodr']->value)&&count($_smarty_tpl->tpl_vars['productodr']->value)) {?>        
                <ul class="clearfix homepromos">
                    <li class="htmlcontent-item-new">        
                            <strong><?php echo smartyTranslate(array('s'=>'Customers also bought','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</strong><br />
                                <?php echo smartyTranslate(array('s'=>'Customers who bought those products also bought','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

                    </li>
                </ul>
        <!-- Products list -->
        <ul id="owl-sliderh" class="owl-carousel product_list grid prom">
            <?php  $_smarty_tpl->tpl_vars['productord'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productord']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productodr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productord']->key => $_smarty_tpl->tpl_vars['productord']->value) {
$_smarty_tpl->tpl_vars['productord']->_loop = true;
?>

                <li class="item ajax_block_product">
                    <div class="product-item" itemscope itemtype="http://schema.org/Product">

                            <div class="product-image-container">
                                <a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
                                    <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['productord']->value['link_rewrite'],$_smarty_tpl->tpl_vars['productord']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['productord']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
                                </a>
                                <?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                                    <div class="quick-view-wrapper-mobile">
                                        <a class="quick-view-mobile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    </div>
                                    <a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                               <!-- <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['productord']->value['show_price'])&&$_smarty_tpl->tpl_vars['productord']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productord']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productord']->value['available_for_order'])))) {?>
                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['show_price'])&&$_smarty_tpl->tpl_vars['productord']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['productord']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['productord']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['productord']->value['specific_prices']['reduction']>0) {?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productord']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                                <span class="old-price product-price">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['productord']->value['price_without_reduction']),$_smarty_tpl);?>

                                        </span>
                                            <?php }?>
                                            <span itemprop="price" class="price product-price">
                                        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productord']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productord']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                                    </span>
                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productord']->value,'type'=>"price"),$_smarty_tpl);?>

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productord']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                        <?php }?>
                                    </div>
                                <?php }?>-->
                                <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['new'])&&($_smarty_tpl->tpl_vars['tzc_new_show2']->value==1)&&$_smarty_tpl->tpl_vars['productord']->value['new']==1) {?>
                                    
                                        <span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['on_sale'])&&$_smarty_tpl->tpl_vars['productord']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['productord']->value['show_price'])&&$_smarty_tpl->tpl_vars['productord']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sall','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['productord']->value),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productord']->value,'type'=>"weight"),$_smarty_tpl);?>



                            <h5 itemprop="name">
                                <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['productord']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['productord']->value['pack_quantity'])).(' x ');?>
<?php }?>
                                <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['productord']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h5>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['productord']->value),$_smarty_tpl);?>

                            <p class="product-desc<?php if ($_smarty_tpl->tpl_vars['bcachnbr']->value==1) {?>r<?php }?>" itemprop="description">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bcaccmaxacc']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['productord']->value['description_short']),$_tmp3,'...');?>

                            </p>
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['productord']->value['show_price'])&&$_smarty_tpl->tpl_vars['productord']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productord']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productord']->value['available_for_order'])))) {?>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                    <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['show_price'])&&$_smarty_tpl->tpl_vars['productord']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['productord']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['productord']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['productord']->value['specific_prices']['reduction']>0) {?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productord']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                            <span class="old-price product-price">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['productord']->value['price_without_reduction']),$_smarty_tpl);?>

                                </span>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['productord']->value['id_product'],'type'=>"old_price"),$_smarty_tpl);?>

                                        <?php }?>
                                        <span itemprop="price" class="price product-price">
                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productord']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productord']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
                            </span>
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productord']->value,'type'=>"price"),$_smarty_tpl);?>

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productord']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                    <?php }?>
                                </div>
                            <?php }?>
                            <div class="button-container<?php if ($_smarty_tpl->tpl_vars['tzc_hover_show2']->value==1) {?> hovereff<?php }?>">
                                <?php if ((($_smarty_tpl->tpl_vars['tzc_but_show2']->value==1)&&(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1))&&$_smarty_tpl->tpl_vars['productord']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>
                                    <?php if ((!isset($_smarty_tpl->tpl_vars['productord']->value['customization_required'])||!$_smarty_tpl->tpl_vars['productord']->value['customization_required'])&&($_smarty_tpl->tpl_vars['productord']->value['allow_oosp']||$_smarty_tpl->tpl_vars['productord']->value['quantity']>0)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['productord']->value['id_product']);?>
<?php $_tmp4=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp4."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['productord']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$productord.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['productord']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php }?>
                                    <?php } else { ?>
                                        <span class="button ajax_add_to_cart_button btn btn-default disabled">
                                    <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                </span>
                                    <?php }?>
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['tzc_more_show2']->value)) {?>
                                <a itemprop="url" class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productord']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
">
                                    <span><?php echo smartyTranslate(array('s'=>'More','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                </a>
                                <?php }?>
                            </div>
                            <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['color_list'])) {?>
                                <div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['productord']->value['color_list'];?>
</div>
                            <?php }?>
                            <div class="product-flags">
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['productord']->value['show_price'])&&$_smarty_tpl->tpl_vars['productord']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productord']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productord']->value['available_for_order'])))) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['online_only'])&&$_smarty_tpl->tpl_vars['productord']->value['online_only']) {?>
                                        <span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['on_sale'])&&$_smarty_tpl->tpl_vars['productord']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['productord']->value['show_price'])&&$_smarty_tpl->tpl_vars['productord']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['productord']->value['reduction'])&&$_smarty_tpl->tpl_vars['productord']->value['reduction']&&isset($_smarty_tpl->tpl_vars['productord']->value['show_price'])&&$_smarty_tpl->tpl_vars['productord']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                            </div>
                            <?php if (($_smarty_tpl->tpl_vars['tzc_qty_show2']->value==1&&(!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['productord']->value['show_price'])&&$_smarty_tpl->tpl_vars['productord']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productord']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productord']->value['available_for_order']))))) {?>

                                <?php if (isset($_smarty_tpl->tpl_vars['productord']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productord']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
                                <?php if (($_smarty_tpl->tpl_vars['productord']->value['allow_oosp']||$_smarty_tpl->tpl_vars['productord']->value['quantity']>0)) {?>
                                    <span class="<?php if ($_smarty_tpl->tpl_vars['productord']->value['quantity']<=0&&!$_smarty_tpl->tpl_vars['productord']->value['allow_oosp']) {?>out-of-stock<?php } else { ?>available-now<?php }?>">
                                        <link itemprop="availability" href="http://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['productord']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['productord']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['productord']->value['available_later'])&&$_smarty_tpl->tpl_vars['productord']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['productord']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['productord']->value['available_now'])&&$_smarty_tpl->tpl_vars['productord']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['productord']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
                                    </span>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['productord']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['productord']->value['quantity_all_versions']>0)) {?>
                                    <span class="available-dif">
                                        <link itemprop="availability" href="http://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

                                    </span>
                                <?php } else { ?>
                                    <span class="out-of-stock">
                                        <link itemprop="availability" href="http://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

                                    </span>
                                <?php }?>
                            </span>
                                <?php }?>
                            <?php }?>
                    </div><!-- .product-container> -->
                </li>
            <?php } ?>
        </ul>
    <script>
        $(document).ready(function() {
            var owlh = $("#owl-sliderh");
            owlh.owlCarousel({
                items : <?php echo $_smarty_tpl->tpl_vars['items_wide2']->value;?>
, //10 items above 1000px browser width
                itemsDesktop : [1000,<?php echo $_smarty_tpl->tpl_vars['items_desktop2']->value;?>
], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,<?php echo $_smarty_tpl->tpl_vars['items_desktop_small2']->value;?>
], // 3 items betweem 900px and 601px
                itemsTablet: [600,<?php echo $_smarty_tpl->tpl_vars['items_tablet2']->value;?>
], //2 items between 600 and 0;
                itemsMobile : <?php echo $_smarty_tpl->tpl_vars['items_mobile2']->value;?>
, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: <?php if ($_smarty_tpl->tpl_vars['tzc_autoplay2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigation: <?php if ($_smarty_tpl->tpl_vars['tzc_nav2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigationText: <?php if ($_smarty_tpl->tpl_vars['tzc_nav_text2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                pagination: true,
            });
        });
    </script>  
<?php }?>
<!--Viewved product(s)-->
<?php if (isset($_smarty_tpl->tpl_vars['productsViewedObj']->value)&&count($_smarty_tpl->tpl_vars['productsViewedObj']->value)>0&&($_smarty_tpl->tpl_vars['showviewed']->value==1)) {?>
                 <ul class="clearfix homepromos col-12">
                    <li class="htmlcontent-item-new">        
                            <strong><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</strong><br />
                              <?php echo smartyTranslate(array('s'=>'Your latest visited products','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

                    </li>
                </ul>
        <ul id="owl-slidera" class="owl-carousel product_list grid prom">
			<?php  $_smarty_tpl->tpl_vars['viewedProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['viewedProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsViewedObj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['viewedProduct']->key => $_smarty_tpl->tpl_vars['viewedProduct']->value) {
$_smarty_tpl->tpl_vars['viewedProduct']->_loop = true;
?>
                        
                <li class="">
                    <div class="product-container" itemscope itemtype="http://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link"	href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['viewedProduct']->value->id,$_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->category_rewrite);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
                                    <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->id_image,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['viewedProduct']->value->legend)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
                                </a>
                                <?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                                    <div class="quick-view-wrapper-mobile">
                                        <a class="quick-view-mobile" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['viewedProduct']->value->id,$_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->category_rewrite);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['viewedProduct']->value->id,$_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->category_rewrite), ENT_QUOTES, 'UTF-8', true);?>
">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    </div>
                                    <a class="quick-view" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['viewedProduct']->value->id,$_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->category_rewrite);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['viewedProduct']->value->id,$_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->category_rewrite), ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)||(isset($_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order)))) {?>
                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->specific_prices)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->specific_prices&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value->specific_prices['reduction'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value->specific_prices['reduction']>0) {?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                                <span class="old-price product-price">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price_without_reduction),$_smarty_tpl);?>

										</span>
                                            <?php }?>
                                            <span itemprop="price" class="price product-price">
										<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price_tax_exc),$_smarty_tpl);?>
<?php }?>
									</span>
                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"price"),$_smarty_tpl);?>

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                        <?php }?>
                                    </div>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->new)&&'tzc_new_show2'==1&&$_smarty_tpl->tpl_vars['viewedProduct']->value->new==1) {?>
                                        <span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->on_sale)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->on_sale&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->show_price&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->link, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sall','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"weight"),$_smarty_tpl);?>

                        </div>
                        <div class="right-block">
                            <h5 itemprop="name">
                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->pack_quantity)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->pack_quantity) {?><?php echo (intval($_smarty_tpl->tpl_vars['viewedProduct']->value->pack_quantity)).(' x ');?>
<?php }?>
                                <a class="product-name" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['viewedProduct']->value->id,$_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->category_rewrite);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['viewedProduct']->value->name,45,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h5>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value),$_smarty_tpl);?>

                            <p class="product-desc<?php if ($_smarty_tpl->tpl_vars['bcachnbr']->value==1) {?>r<?php }?>" itemprop="description">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bcaccmaxacc']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['viewedProduct']->value->description_short),$_tmp5,'...');?>

                            </p>
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)||(isset($_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order)))) {?>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                    <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->specific_prices)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->specific_prices&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value->specific_prices['reduction'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value->specific_prices['reduction']>0) {?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                            <span class="old-price product-price">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price_without_reduction),$_smarty_tpl);?>

								</span>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->id_product,'type'=>"old_price"),$_smarty_tpl);?>

                                        <?php }?>
                                        <span itemprop="price" class="price product-price">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price_tax_exc),$_smarty_tpl);?>
<?php }?>
							</span>
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"price"),$_smarty_tpl);?>

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                    <?php }?>
                                </div>
                            <?php }?>
                            <div class="button-container<?php if ($_smarty_tpl->tpl_vars['tzc_hover_show2']->value==1) {?> hovereff<?php }?>">
                                <?php if ((($_smarty_tpl->tpl_vars['tzc_but_show2']->value==1)&&($_smarty_tpl->tpl_vars['viewedProduct']->value->id_product_attribute==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->minimal_quantity<=1&&$_smarty_tpl->tpl_vars['viewedProduct']->value->customizable!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>
                                    <?php if ((!isset($_smarty_tpl->tpl_vars['viewedProduct']->value->customization_required)||!$_smarty_tpl->tpl_vars['viewedProduct']->value->customization_required)&&($_smarty_tpl->tpl_vars['viewedProduct']->value->allow_oosp||$_smarty_tpl->tpl_vars['viewedProduct']->value->quantity>0)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['viewedProduct']->value->id_product);?>
<?php $_tmp6=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp6."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['viewedProduct']->value->id_product);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$viewedProduct->id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['viewedProduct']->value->id_product);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php }?>
                                    <?php } else { ?>
                                        <span class="button ajax_add_to_cart_button btn btn-default disabled">
									<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
								</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['tzc_more_show2']->value==1)) {?>
                                <a itemprop="url" class="button lnk_view btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['viewedProduct']->value->id,$_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->category_rewrite);?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
">
                                    <span><?php echo smartyTranslate(array('s'=>'More','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                </a>
                                <?php }?>
                            </div>
                            <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->color_list)) {?>
                                <div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value->color_list;?>
</div>
                            <?php }?>
                            <div class="product-flags">
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)||(isset($_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order)))) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->online_only)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->online_only) {?>
                                        <span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->on_sale)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->on_sale&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->show_price&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->reduction)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->reduction&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->show_price&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                            </div>
                            <?php if (($_smarty_tpl->tpl_vars['tzc_qty_show2']->value==1&&(!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->show_price)||(isset($_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order))))) {?>

                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->available_for_order&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
								<?php if (($_smarty_tpl->tpl_vars['viewedProduct']->value->allow_oosp||$_smarty_tpl->tpl_vars['viewedProduct']->value->quantity>0)) {?>
                                    <span class="<?php if ($_smarty_tpl->tpl_vars['viewedProduct']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['viewedProduct']->value->allow_oosp) {?>out-of-stock<?php } else { ?>available-now<?php }?>">
										<link itemprop="availability" href="http://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['viewedProduct']->value->quantity<=0) {?><?php if ($_smarty_tpl->tpl_vars['viewedProduct']->value->allow_oosp) {?><?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->available_later)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->available_later) {?><?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value->available_later;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->available_now)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->available_now) {?><?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value->available_now;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
									</span>
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['viewedProduct']->value->quantity_all_versions)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->quantity_all_versions>0)) {?>
									<span class="available-dif">
										<link itemprop="availability" href="http://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
								<?php } else { ?>
									<span class="out-of-stock">
										<link itemprop="availability" href="http://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
                                <?php }?>
							</span>
                                <?php }?>

                            <?php }?>
                        </div>
                        
                    </div><!-- .product-container> -->
                </li>
			<?php } ?>
		</ul>
    <script>
        $(document).ready(function() {
            var owla = $("#owl-slidera");
            owla.owlCarousel({
                items : <?php echo $_smarty_tpl->tpl_vars['items_wide2']->value;?>
, //10 items above 1000px browser width
                itemsDesktop : [1000,<?php echo $_smarty_tpl->tpl_vars['items_desktop2']->value;?>
], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,<?php echo $_smarty_tpl->tpl_vars['items_desktop_small2']->value;?>
], // 3 items betweem 900px and 601px
                itemsTablet: [600,<?php echo $_smarty_tpl->tpl_vars['items_tablet2']->value;?>
], //2 items between 600 and 0;
                itemsMobile : <?php echo $_smarty_tpl->tpl_vars['items_mobile2']->value;?>
, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: <?php if ($_smarty_tpl->tpl_vars['tzc_autoplay2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigation: <?php if ($_smarty_tpl->tpl_vars['tzc_nav2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigationText: <?php if ($_smarty_tpl->tpl_vars['tzc_nav_text2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                pagination: true,

            });
        });
    </script>
<?php }?>
<!--Same product(s)-->
<?php if (isset($_smarty_tpl->tpl_vars['sameprod']->value)&&count($_smarty_tpl->tpl_vars['sameprod']->value)) {?>
                 <ul class="clearfix homepromos">
                    <li class="htmlcontent-item-new">        
                            <strong><?php echo smartyTranslate(array('s'=>'Similar products','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</strong><br />
                                <?php echo smartyTranslate(array('s'=>'Similar to the last visited product','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</a>                      
                    </li>
                </ul>
			<ul id="owl-sliderg" class="owl-carousel product_list grid prom">
			<?php  $_smarty_tpl->tpl_vars['viewedProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['viewedProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sameprod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['viewedProduct']->key => $_smarty_tpl->tpl_vars['viewedProduct']->value) {
$_smarty_tpl->tpl_vars['viewedProduct']->_loop = true;
?>
                <li class="item ajax_block_product">
                    <div class="product-container" itemscope itemtype="http://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
                                    <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['viewedProduct']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['viewedProduct']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
                                </a>
                                <?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                                    <div class="quick-view-wrapper-mobile">
                                        <a class="quick-view-mobile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    </div>
                                    <a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order'])))) {?>
                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['specific_prices']['reduction']>0) {?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                                <span class="old-price product-price">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['viewedProduct']->value['price_without_reduction']),$_smarty_tpl);?>

										</span>
                                            <?php }?>
                                            <span itemprop="price" class="price product-price">
										<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['viewedProduct']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['viewedProduct']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
									</span>
                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"price"),$_smarty_tpl);?>

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                        <?php }?>
                                    </div>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['new'])&&'tzc_new_show2'==1&&$_smarty_tpl->tpl_vars['viewedProduct']->value['new']==1) {?>
                                        <span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['on_sale'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sall','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"weight"),$_smarty_tpl);?>

                        </div>
                        <div class="right-block">
                            <h5 itemprop="name">
                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['viewedProduct']->value['pack_quantity'])).(' x ');?>
<?php }?>
                                <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['viewedProduct']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h5>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value),$_smarty_tpl);?>

                            <p class="product-desc<?php if ($_smarty_tpl->tpl_vars['bcachnbr']->value==1) {?>r<?php }?>" itemprop="description">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bcaccmaxacc']->value;?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['viewedProduct']->value['description_short']),$_tmp7,'...');?>

                            </p>
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order'])))) {?>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                    <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['specific_prices']['reduction']>0) {?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                            <span class="old-price product-price">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['viewedProduct']->value['price_without_reduction']),$_smarty_tpl);?>

								</span>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value['id_product'],'type'=>"old_price"),$_smarty_tpl);?>

                                        <?php }?>
                                        <span itemprop="price" class="price product-price">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['viewedProduct']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['viewedProduct']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
							</span>
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"price"),$_smarty_tpl);?>

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['viewedProduct']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                    <?php }?>
                                </div>
                            <?php }?>
                            <div class="button-container<?php if ($_smarty_tpl->tpl_vars['tzc_hover_show2']->value==1) {?> hovereff<?php }?>">
                                <?php if ((($_smarty_tpl->tpl_vars['tzc_but_show2']->value==1)&&($_smarty_tpl->tpl_vars['viewedProduct']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['viewedProduct']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['viewedProduct']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>
                                    <?php if ((!isset($_smarty_tpl->tpl_vars['viewedProduct']->value['customization_required'])||!$_smarty_tpl->tpl_vars['viewedProduct']->value['customization_required'])&&($_smarty_tpl->tpl_vars['viewedProduct']->value['allow_oosp']||$_smarty_tpl->tpl_vars['viewedProduct']->value['quantity']>0)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['viewedProduct']->value['id_product']);?>
<?php $_tmp8=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp8."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['viewedProduct']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$viewedProduct.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['viewedProduct']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php }?>
                                    <?php } else { ?>
                                        <span class="button ajax_add_to_cart_button btn btn-default disabled">
									<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
								</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['tzc_more_show2']->value==1)) {?>
                                <a itemprop="url" class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
">
                                    <span><?php echo smartyTranslate(array('s'=>'More','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                </a>
                                <?php }?>
                            </div>
                            <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['color_list'])) {?>
                                <div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value['color_list'];?>
</div>
                            <?php }?>
                            <div class="product-flags">
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order'])))) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['online_only'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['online_only']) {?>
                                        <span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['on_sale'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['reduction'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['reduction']&&isset($_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                            </div>
                            <?php if (($_smarty_tpl->tpl_vars['tzc_qty_show2']->value==1&&(!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order']))))) {?>

                                <?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
								<?php if (($_smarty_tpl->tpl_vars['viewedProduct']->value['allow_oosp']||$_smarty_tpl->tpl_vars['viewedProduct']->value['quantity']>0)) {?>
                                    <span class="<?php if ($_smarty_tpl->tpl_vars['viewedProduct']->value['quantity']<=0&&!$_smarty_tpl->tpl_vars['viewedProduct']->value['allow_oosp']) {?>out-of-stock<?php } else { ?>available-now<?php }?>">
										<link itemprop="availability" href="http://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['viewedProduct']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['viewedProduct']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['available_later'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value['available_now'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['viewedProduct']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
									</span>
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['viewedProduct']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['viewedProduct']->value['quantity_all_versions']>0)) {?>
									<span class="available-dif">
										<link itemprop="availability" href="http://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
								<?php } else { ?>
									<span class="out-of-stock">
										<link itemprop="availability" href="http://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
                                <?php }?>
							</span>
                                <?php }?>

                            <?php }?>
                        </div>
                        
                    </div><!-- .product-container> -->
                </li>
			<?php } ?>
		</ul>
	<script>
        $(document).ready(function() {
            var owla = $("#owl-sliderg");
            owla.owlCarousel({
                items : <?php echo $_smarty_tpl->tpl_vars['items_wide2']->value;?>
, //10 items above 1000px browser width
                itemsDesktop : [1000,<?php echo $_smarty_tpl->tpl_vars['items_desktop2']->value;?>
], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,<?php echo $_smarty_tpl->tpl_vars['items_desktop_small2']->value;?>
], // 3 items betweem 900px and 601px
                itemsTablet: [600,<?php echo $_smarty_tpl->tpl_vars['items_tablet2']->value;?>
], //2 items between 600 and 0;
                itemsMobile : <?php echo $_smarty_tpl->tpl_vars['items_mobile2']->value;?>
, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: <?php if ($_smarty_tpl->tpl_vars['tzc_autoplay2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigation: <?php if ($_smarty_tpl->tpl_vars['tzc_nav2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigationText: <?php if ($_smarty_tpl->tpl_vars['tzc_nav_text2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                pagination: true,
            });
        });
    </script>
<?php }?>

<!--Viewed accessories-->
 <?php if (isset($_smarty_tpl->tpl_vars['homeaccv']->value)&&count($_smarty_tpl->tpl_vars['homeaccv']->value)) {?>
     <ul class="clearfix homepromos">
        <li class="htmlcontent-item-new">        
                <strong><?php echo smartyTranslate(array('s'=>'Accessories','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</strong><br />
                    <?php echo smartyTranslate(array('s'=>'Compatible accessories with the last visited product','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</a>               
        </li>
    </ul>
 	<div class="single col-sm-12">
        <ul id="owl-sliderb" class="owl-carousel product_list grid prom">
			<?php  $_smarty_tpl->tpl_vars['accessoryv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessoryv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeaccv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessoryv']->key => $_smarty_tpl->tpl_vars['accessoryv']->value) {
$_smarty_tpl->tpl_vars['accessoryv']->_loop = true;
?>
                <li class="item ajax_block_product">
                    <div class="product-container" itemscope itemtype="http://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
                                    <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['accessoryv']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessoryv']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['accessoryv']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
                                </a>
                                <?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                                    <div class="quick-view-wrapper-mobile">
                                        <a class="quick-view-mobile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    </div>
                                    <a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order'])))) {?>
                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['accessoryv']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['specific_prices']['reduction']>0) {?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['accessoryv']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                                <span class="old-price product-price">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessoryv']->value['price_without_reduction']),$_smarty_tpl);?>

										</span>
                                            <?php }?>
                                            <span itemprop="price" class="price product-price">
										<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['accessoryv']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['accessoryv']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
									</span>
                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['accessoryv']->value,'type'=>"price"),$_smarty_tpl);?>

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['accessoryv']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                        <?php }?>
                                    </div>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['new'])&&'tzc_new_show2'==1&&$_smarty_tpl->tpl_vars['accessoryv']->value['new']==1) {?>
                                        <span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['on_sale'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sall','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['accessoryv']->value),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['accessoryv']->value,'type'=>"weight"),$_smarty_tpl);?>

                        </div>
                        <div class="right-block">
                            <h5 itemprop="name">
                                <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['accessoryv']->value['pack_quantity'])).(' x ');?>
<?php }?>
                                <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['accessoryv']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h5>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['accessoryv']->value),$_smarty_tpl);?>

                            <p class="product-desc<?php if ($_smarty_tpl->tpl_vars['bcachnbr']->value==1) {?>r<?php }?>" itemprop="description">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bcaccmaxacc']->value;?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['accessoryv']->value['description_short']),$_tmp9,'...');?>

                            </p>
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order'])))) {?>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                    <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['accessoryv']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['specific_prices']['reduction']>0) {?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['accessoryv']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                            <span class="old-price product-price">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['accessoryv']->value['price_without_reduction']),$_smarty_tpl);?>

								</span>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['accessoryv']->value['id_product'],'type'=>"old_price"),$_smarty_tpl);?>

                                        <?php }?>
                                        <span itemprop="price" class="price product-price">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['accessoryv']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['accessoryv']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
							</span>
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['accessoryv']->value,'type'=>"price"),$_smarty_tpl);?>

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['accessoryv']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                    <?php }?>
                                </div>
                            <?php }?>
                            <!--<div class="button-container <?php if ($_smarty_tpl->tpl_vars['tzc_hover_show2']->value==1) {?> hovereff<?php }?>">
                                <?php if ((($_smarty_tpl->tpl_vars['tzc_but_show2']->value==1)&&($_smarty_tpl->tpl_vars['accessoryv']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['accessoryv']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['accessoryv']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>
                                    <?php if ((!isset($_smarty_tpl->tpl_vars['accessoryv']->value['customization_required'])||!$_smarty_tpl->tpl_vars['accessoryv']->value['customization_required'])&&($_smarty_tpl->tpl_vars['accessoryv']->value['allow_oosp']||$_smarty_tpl->tpl_vars['accessoryv']->value['quantity']>0)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['accessoryv']->value['id_product']);?>
<?php $_tmp10=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp10."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['accessoryv']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$accessoryv.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['accessoryv']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php }?>
                                    <?php } else { ?>
                                        <span class="button ajax_add_to_cart_button btn btn-default disabled">
									<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
								</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['tzc_more_show2']->value==1)) {?>
                                <a itemprop="url" class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryv']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
">
                                    <span><?php echo smartyTranslate(array('s'=>'More','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                </a>
                                <?php }?>
                            </div>-->
                            <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['color_list'])) {?>
                                <div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['accessoryv']->value['color_list'];?>
</div>
                            <?php }?>
                            <div class="product-flags">
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order'])))) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['online_only'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['online_only']) {?>
                                        <span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['on_sale'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['accessoryv']->value['reduction'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['reduction']&&isset($_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                            </div>
                            <?php if (($_smarty_tpl->tpl_vars['tzc_qty_show2']->value==1&&(!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order']))))) {?>

                                <?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
								<?php if (($_smarty_tpl->tpl_vars['accessoryv']->value['allow_oosp']||$_smarty_tpl->tpl_vars['accessoryv']->value['quantity']>0)) {?>
                                    <span class="<?php if ($_smarty_tpl->tpl_vars['accessoryv']->value['quantity']<=0&&!$_smarty_tpl->tpl_vars['accessoryv']->value['allow_oosp']) {?>out-of-stock<?php } else { ?>available-now<?php }?>">
										<link itemprop="availability" href="http://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['accessoryv']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['accessoryv']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['available_later'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['accessoryv']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['accessoryv']->value['available_now'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['accessoryv']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
									</span>
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['accessoryv']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['accessoryv']->value['quantity_all_versions']>0)) {?>
									<span class="available-dif">
										<link itemprop="availability" href="http://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
								<?php } else { ?>
									<span class="out-of-stock">
										<link itemprop="availability" href="http://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
                                <?php }?>
							</span>
                                <?php }?>

                            <?php }?>
                        </div>
                        
                    </div><!-- .product-container> -->
                </li>
			<?php } ?>
		</ul>
	</div>       
    <script>
        $(document).ready(function() {
            var owlb = $("#owl-sliderb");
            owlb.owlCarousel({
                items : <?php echo $_smarty_tpl->tpl_vars['items_wide2']->value;?>
, //10 items above 1000px browser width
                itemsDesktop : [1000,<?php echo $_smarty_tpl->tpl_vars['items_desktop2']->value;?>
], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,<?php echo $_smarty_tpl->tpl_vars['items_desktop_small2']->value;?>
], // 3 items betweem 900px and 601px
                itemsTablet: [600,<?php echo $_smarty_tpl->tpl_vars['items_tablet2']->value;?>
], //2 items between 600 and 0;
                itemsMobile : <?php echo $_smarty_tpl->tpl_vars['items_mobile2']->value;?>
, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: <?php if ($_smarty_tpl->tpl_vars['tzc_autoplay2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigation: <?php if ($_smarty_tpl->tpl_vars['tzc_nav2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigationText: <?php if ($_smarty_tpl->tpl_vars['tzc_nav_text2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                pagination: true,
            });
        });
    </script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['news']->value)&&count($_smarty_tpl->tpl_vars['news']->value)) {?>
                <ul class="clearfix homepromos">
                    <li class="htmlcontent-item-new">        
                            <strong><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</strong><br />
                                <?php echo smartyTranslate(array('s'=>'Our latests products','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

                    </li>
                </ul>
        <!-- Products list -->
        <ul id="owl-sliderj" class="owl-carousel product_list grid prom">
            <?php  $_smarty_tpl->tpl_vars['productnew'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productnew']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productnew']->key => $_smarty_tpl->tpl_vars['productnew']->value) {
$_smarty_tpl->tpl_vars['productnew']->_loop = true;
?>

                <li class="item ajax_block_product">
                    <div class="product-container" itemscope itemtype="http://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
                                    <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['productnew']->value['link_rewrite'],$_smarty_tpl->tpl_vars['productnew']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['productnew']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
                                </a>
                                <?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                                    <div class="quick-view-wrapper-mobile">
                                        <a class="quick-view-mobile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    </div>
                                    <a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['productnew']->value['show_price'])&&$_smarty_tpl->tpl_vars['productnew']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productnew']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productnew']->value['available_for_order'])))) {?>
                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['show_price'])&&$_smarty_tpl->tpl_vars['productnew']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['productnew']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['productnew']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['productnew']->value['specific_prices']['reduction']>0) {?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productnew']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                                <span class="old-price product-price">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['productnew']->value['price_without_reduction']),$_smarty_tpl);?>

										</span>
                                            <?php }?>
                                            <span itemprop="price" class="price product-price">
										<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productnew']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productnew']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
									</span>
                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productnew']->value,'type'=>"price"),$_smarty_tpl);?>

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productnew']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                        <?php }?>
                                    </div>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['new'])&&$_smarty_tpl->tpl_vars['tzc_new_show2']->value==1&&$_smarty_tpl->tpl_vars['productnew']->value['new']==1) {?>
                                        <span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['on_sale'])&&$_smarty_tpl->tpl_vars['productnew']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['productnew']->value['show_price'])&&$_smarty_tpl->tpl_vars['productnew']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sall','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['productnew']->value),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productnew']->value,'type'=>"weight"),$_smarty_tpl);?>

                        </div>
                        <div class="right-block">
                            <h5 itemprop="name">
                                <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['productnew']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['productnew']->value['pack_quantity'])).(' x ');?>
<?php }?>
                                <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['productnew']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h5>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['productnew']->value),$_smarty_tpl);?>

                            <p class="product-desc<?php if ($_smarty_tpl->tpl_vars['bcachnbr']->value==1) {?>r<?php }?>" itemprop="description">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bcaccmaxacc']->value;?>
<?php $_tmp11=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['productnew']->value['description_short']),$_tmp11,'...');?>

                            </p>
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['productnew']->value['show_price'])&&$_smarty_tpl->tpl_vars['productnew']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productnew']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productnew']->value['available_for_order'])))) {?>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                    <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['show_price'])&&$_smarty_tpl->tpl_vars['productnew']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['productnew']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['productnew']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['productnew']->value['specific_prices']['reduction']>0) {?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productnew']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                            <span class="old-price product-price">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['productnew']->value['price_without_reduction']),$_smarty_tpl);?>

								</span>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['productnew']->value['id_product'],'type'=>"old_price"),$_smarty_tpl);?>

                                        <?php }?>
                                        <span itemprop="price" class="price product-price">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productnew']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productnew']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
							</span>
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productnew']->value,'type'=>"price"),$_smarty_tpl);?>

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productnew']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                    <?php }?>
                                </div>
                            <?php }?>
                            <div class="button-container<?php if ($_smarty_tpl->tpl_vars['tzc_hover_show2']->value==1) {?> hovereff<?php }?>">
                                <?php if ((($_smarty_tpl->tpl_vars['tzc_but_show2']->value==1)&&(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1))&&$_smarty_tpl->tpl_vars['productnew']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>
                                    <?php if ((!isset($_smarty_tpl->tpl_vars['productnew']->value['customization_required'])||!$_smarty_tpl->tpl_vars['productnew']->value['customization_required'])&&($_smarty_tpl->tpl_vars['productnew']->value['allow_oosp']||$_smarty_tpl->tpl_vars['productnew']->value['quantity']>0)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['productnew']->value['id_product']);?>
<?php $_tmp12=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp12."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['productnew']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$productnew.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['productnew']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php }?>
                                    <?php } else { ?>
                                        <span class="button ajax_add_to_cart_button btn btn-default disabled">
									<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
								</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['tzc_more_show2']->value)) {?>
                                <a itemprop="url" class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productnew']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
">
                                    <span><?php if ((isset($_smarty_tpl->tpl_vars['productnew']->value['customization_required'])&&$_smarty_tpl->tpl_vars['productnew']->value['customization_required'])) {?><?php echo smartyTranslate(array('s'=>'Customize','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'More','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
<?php }?></span>
                                </a>
                                <?php }?>
                            </div>
                            <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['color_list'])) {?>
                                <div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['productnew']->value['color_list'];?>
</div>
                            <?php }?>
                            <div class="product-flags">
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['productnew']->value['show_price'])&&$_smarty_tpl->tpl_vars['productnew']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productnew']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productnew']->value['available_for_order'])))) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['online_only'])&&$_smarty_tpl->tpl_vars['productnew']->value['online_only']) {?>
                                        <span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['on_sale'])&&$_smarty_tpl->tpl_vars['productnew']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['productnew']->value['show_price'])&&$_smarty_tpl->tpl_vars['productnew']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['productnew']->value['reduction'])&&$_smarty_tpl->tpl_vars['productnew']->value['reduction']&&isset($_smarty_tpl->tpl_vars['productnew']->value['show_price'])&&$_smarty_tpl->tpl_vars['productnew']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                            </div>
                            <?php if (($_smarty_tpl->tpl_vars['tzc_qty_show2']->value==1&&(!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['productnew']->value['show_price'])&&$_smarty_tpl->tpl_vars['productnew']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productnew']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productnew']->value['available_for_order']))))) {?>

                                <?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productnew']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
								<?php if (($_smarty_tpl->tpl_vars['productnew']->value['allow_oosp']||$_smarty_tpl->tpl_vars['productnew']->value['quantity']>0)) {?>
                                    <span class="<?php if ($_smarty_tpl->tpl_vars['productnew']->value['quantity']<=0&&!$_smarty_tpl->tpl_vars['productnew']->value['allow_oosp']) {?>out-of-stock<?php } else { ?>available-now<?php }?>">
										<link itemprop="availability" href="http://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['productnew']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['productnew']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['available_later'])&&$_smarty_tpl->tpl_vars['productnew']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['productnew']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['productnew']->value['available_now'])&&$_smarty_tpl->tpl_vars['productnew']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['productnew']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
									</span>
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['productnew']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['productnew']->value['quantity_all_versions']>0)) {?>
									<span class="available-dif">
										<link itemprop="availability" href="http://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
								<?php } else { ?>
									<span class="out-of-stock">
										<link itemprop="availability" href="http://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
                                <?php }?>
							</span>
                                <?php }?>

                            <?php }?>
                        </div>

                    </div><!-- .product-container> -->
                </li>
            <?php } ?>
        </ul>
    <script>
        $(document).ready(function() {
            var owlj = $("#owl-sliderj");
            owlj.owlCarousel({
                items : <?php echo $_smarty_tpl->tpl_vars['items_wide2']->value;?>
, //10 items above 1000px browser width
                itemsDesktop : [1000,<?php echo $_smarty_tpl->tpl_vars['items_desktop2']->value;?>
], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,<?php echo $_smarty_tpl->tpl_vars['items_desktop_small2']->value;?>
], // 3 items betweem 900px and 601px
                itemsTablet: [600,<?php echo $_smarty_tpl->tpl_vars['items_tablet2']->value;?>
], //2 items between 600 and 0;
                itemsMobile : <?php echo $_smarty_tpl->tpl_vars['items_mobile2']->value;?>
, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: <?php if ($_smarty_tpl->tpl_vars['tzc_autoplay2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigation: <?php if ($_smarty_tpl->tpl_vars['tzc_nav2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigationText: <?php if ($_smarty_tpl->tpl_vars['tzc_nav_text2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                pagination: true,
            });
        });
    </script>  
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['others']->value)&&count($_smarty_tpl->tpl_vars['others']->value)) {?>
                <ul class="clearfix homepromos">
                    <li class="htmlcontent-item-new">        
                            <strong><?php echo smartyTranslate(array('s'=>'Recommended to you','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</strong><br />
                                <?php echo smartyTranslate(array('s'=>'Reduced price & Featured products','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

                    </li>
                </ul>
        <!-- Products list -->
        <ul id="owl-slideri" class="owl-carousel product_list grid prom">
            <?php  $_smarty_tpl->tpl_vars['productoth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productoth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['others']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productoth']->key => $_smarty_tpl->tpl_vars['productoth']->value) {
$_smarty_tpl->tpl_vars['productoth']->_loop = true;
?>

                <li class="item ajax_block_product">
                    <div class="product-container" itemscope itemtype="http://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
                                    <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['productoth']->value['link_rewrite'],$_smarty_tpl->tpl_vars['productoth']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['productoth']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
                                </a>
                                <?php if (isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
                                    <div class="quick-view-wrapper-mobile">
                                        <a class="quick-view-mobile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    </div>
                                    <a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span><?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['productoth']->value['show_price'])&&$_smarty_tpl->tpl_vars['productoth']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productoth']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productoth']->value['available_for_order'])))) {?>
                                    <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['show_price'])&&$_smarty_tpl->tpl_vars['productoth']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['productoth']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['productoth']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['productoth']->value['specific_prices']['reduction']>0) {?>
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productoth']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                                <span class="old-price product-price">
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['productoth']->value['price_without_reduction']),$_smarty_tpl);?>

										</span>
                                            <?php }?>
                                            <span itemprop="price" class="price product-price">
										<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productoth']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productoth']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
									</span>
                                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productoth']->value,'type'=>"price"),$_smarty_tpl);?>

                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productoth']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                        <?php }?>
                                    </div>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['new'])&&$_smarty_tpl->tpl_vars['tzc_new_show2']->value==1&&$_smarty_tpl->tpl_vars['productoth']->value['new']==1) {?>
                                    
                                        <span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['on_sale'])&&$_smarty_tpl->tpl_vars['productoth']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['productoth']->value['show_price'])&&$_smarty_tpl->tpl_vars['productoth']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <a class="sale-box" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sall','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['productoth']->value),$_smarty_tpl);?>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productoth']->value,'type'=>"weight"),$_smarty_tpl);?>

                        </div>
                        <div class="right-block">
                            <h5 itemprop="name">
                                <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['productoth']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['productoth']->value['pack_quantity'])).(' x ');?>
<?php }?>
                                <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['productoth']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h5>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['productoth']->value),$_smarty_tpl);?>

                            <p class="product-desc<?php if ($_smarty_tpl->tpl_vars['bcachnbr']->value==1) {?>r<?php }?>" itemprop="description">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['bcaccmaxacc']->value;?>
<?php $_tmp13=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['productoth']->value['description_short']),$_tmp13,'...');?>

                            </p>
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['productoth']->value['show_price'])&&$_smarty_tpl->tpl_vars['productoth']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productoth']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productoth']->value['available_for_order'])))) {?>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
                                    <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['show_price'])&&$_smarty_tpl->tpl_vars['productoth']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['productoth']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['productoth']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['productoth']->value['specific_prices']['reduction']>0) {?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productoth']->value,'type'=>"old_price"),$_smarty_tpl);?>

                                            <span class="old-price product-price">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['productoth']->value['price_without_reduction']),$_smarty_tpl);?>

								</span>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'id_product'=>$_smarty_tpl->tpl_vars['productoth']->value['id_product'],'type'=>"old_price"),$_smarty_tpl);?>

                                        <?php }?>
                                        <span itemprop="price" class="price product-price">
								<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productoth']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productoth']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
							</span>
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productoth']->value,'type'=>"price"),$_smarty_tpl);?>

                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['productoth']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                                    <?php }?>
                                </div>
                            <?php }?>
                            <div class="button-container<?php if ($_smarty_tpl->tpl_vars['tzc_hover_show2']->value==1) {?> hovereff<?php }?>">
                                <?php if ((($_smarty_tpl->tpl_vars['tzc_but_show2']->value==1)&&(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1))&&$_smarty_tpl->tpl_vars['productoth']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)) {?>
                                    <?php if ((!isset($_smarty_tpl->tpl_vars['productoth']->value['customization_required'])||!$_smarty_tpl->tpl_vars['productoth']->value['customization_required'])&&($_smarty_tpl->tpl_vars['productoth']->value['allow_oosp']||$_smarty_tpl->tpl_vars['productoth']->value['quantity']>0)) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['productoth']->value['id_product']);?>
<?php $_tmp14=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp14."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['productoth']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <a class="button ajax_add_to_cart_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$productoth.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['productoth']->value['id_product']);?>
">
                                                <span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                            </a>
                                        <?php }?>
                                    <?php } else { ?>
                                        <span class="button ajax_add_to_cart_button btn btn-default disabled">
									<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
								</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (($_smarty_tpl->tpl_vars['tzc_more_show2']->value)) {?>
                                <a itemprop="url" class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productoth']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
">
                                    <span><?php if ((isset($_smarty_tpl->tpl_vars['productoth']->value['customization_required'])&&$_smarty_tpl->tpl_vars['productoth']->value['customization_required'])) {?><?php echo smartyTranslate(array('s'=>'Customize','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'More','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
<?php }?></span>
                                </a>
                                <?php }?>
                            </div>
                            <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['color_list'])) {?>
                                <div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['productoth']->value['color_list'];?>
</div>
                            <?php }?>
                            <div class="product-flags">
                                <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['productoth']->value['show_price'])&&$_smarty_tpl->tpl_vars['productoth']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productoth']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productoth']->value['available_for_order'])))) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['online_only'])&&$_smarty_tpl->tpl_vars['productoth']->value['online_only']) {?>
                                        <span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                    <?php }?>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['on_sale'])&&$_smarty_tpl->tpl_vars['productoth']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['productoth']->value['show_price'])&&$_smarty_tpl->tpl_vars['productoth']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['productoth']->value['reduction'])&&$_smarty_tpl->tpl_vars['productoth']->value['reduction']&&isset($_smarty_tpl->tpl_vars['productoth']->value['show_price'])&&$_smarty_tpl->tpl_vars['productoth']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                    <span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!','mod'=>'blockcartaccessories'),$_smarty_tpl);?>
</span>
                                <?php }?>
                            </div>
                            <?php if (($_smarty_tpl->tpl_vars['tzc_qty_show2']->value==1&&(!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['productoth']->value['show_price'])&&$_smarty_tpl->tpl_vars['productoth']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['productoth']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productoth']->value['available_for_order']))))) {?>

                                <?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['productoth']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
                                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">
								<?php if (($_smarty_tpl->tpl_vars['productoth']->value['allow_oosp']||$_smarty_tpl->tpl_vars['productoth']->value['quantity']>0)) {?>
                                    <span class="<?php if ($_smarty_tpl->tpl_vars['productoth']->value['quantity']<=0&&!$_smarty_tpl->tpl_vars['productoth']->value['allow_oosp']) {?>out-of-stock<?php } else { ?>available-now<?php }?>">
										<link itemprop="availability" href="http://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['productoth']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['productoth']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['available_later'])&&$_smarty_tpl->tpl_vars['productoth']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['productoth']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['productoth']->value['available_now'])&&$_smarty_tpl->tpl_vars['productoth']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['productoth']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
									</span>
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['productoth']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['productoth']->value['quantity_all_versions']>0)) {?>
									<span class="available-dif">
										<link itemprop="availability" href="http://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
								<?php } else { ?>
									<span class="out-of-stock">
										<link itemprop="availability" href="http://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock','mod'=>'blockcartaccessories'),$_smarty_tpl);?>

									</span>
                                <?php }?>
							</span>
                                <?php }?>

                            <?php }?>
                        </div>
                    </div><!-- .product-container> -->
                </li>
            <?php } ?>
        </ul>
    <script>
        $(document).ready(function() {
            var owli = $("#owl-slideri");
            owli.owlCarousel({
                items : <?php echo $_smarty_tpl->tpl_vars['items_wide2']->value;?>
, //10 items above 1000px browser width
                itemsDesktop : [1000,<?php echo $_smarty_tpl->tpl_vars['items_desktop2']->value;?>
], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,<?php echo $_smarty_tpl->tpl_vars['items_desktop_small2']->value;?>
], // 3 items betweem 900px and 601px
                itemsTablet: [600,<?php echo $_smarty_tpl->tpl_vars['items_tablet2']->value;?>
], //2 items between 600 and 0;
                itemsMobile : <?php echo $_smarty_tpl->tpl_vars['items_mobile2']->value;?>
, // itemsMobile disabled - inherit from itemsTablet option
                autoPlay: <?php if ($_smarty_tpl->tpl_vars['tzc_autoplay2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigation: <?php if ($_smarty_tpl->tpl_vars['tzc_nav2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                navigationText: <?php if ($_smarty_tpl->tpl_vars['tzc_nav_text2']->value==1) {?>true<?php } else { ?>false<?php }?>,
                pagination: true,
            });
        });
    </script>  
<?php }?><?php }} ?>
