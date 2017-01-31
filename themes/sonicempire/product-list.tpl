
{if isset($products) && $products}
	{*define number of products per line in other page for desktop*}
	{if $page_name !='index' && $page_name !='product'}
		{assign var='nbItemsPerLine' value=3}
		{assign var='nbItemsPerLineTablet' value=2}
		{assign var='nbItemsPerLineMobile' value=3}
	{else}
		{assign var='nbItemsPerLine' value=4}
		{assign var='nbItemsPerLineTablet' value=3}
		{assign var='nbItemsPerLineMobile' value=2}
	{/if}
	{*define numbers of product per line in other page for tablet*}
	{assign var='nbLi' value=$products|@count}
	{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
	{math equation="nbLi/nbItemsPerLineTablet" nbLi=$nbLi nbItemsPerLineTablet=$nbItemsPerLineTablet assign=nbLinesTablet}
	<!-- Products list -->
	<ul{if isset($id) && $id} id="{$id}"{/if} class="product_list grid row clearfix">
	{foreach from=$products item=product name=products}
		{math equation="(total%perLine)" total=$smarty.foreach.products.total perLine=$nbItemsPerLine assign=totModulo}
		{math equation="(total%perLineT)" total=$smarty.foreach.products.total perLineT=$nbItemsPerLineTablet assign=totModuloTablet}
		{math equation="(total%perLineT)" total=$smarty.foreach.products.total perLineT=$nbItemsPerLineMobile assign=totModuloMobile}
		{if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
		{if $totModuloTablet == 0}{assign var='totModuloTablet' value=$nbItemsPerLineTablet}{/if}
		{if $totModuloMobile == 0}{assign var='totModuloMobile' value=$nbItemsPerLineMobile}{/if}

		<li class="product-item ajax_block_product{if $page_name == 'index' || $page_name == 'product'} col-xs-12 col-sm-4 col-md-3{else} col-xs-12 col-sm-6 col-md-4{/if}{if $smarty.foreach.products.iteration%$nbItemsPerLine == 0} last-in-line{elseif $smarty.foreach.products.iteration%$nbItemsPerLine == 1} first-in-line{/if}{if $smarty.foreach.products.iteration > ($smarty.foreach.products.total - $totModulo)} last-line{/if}{if $smarty.foreach.products.iteration%$nbItemsPerLineTablet == 0} last-item-of-tablet-line{elseif $smarty.foreach.products.iteration%$nbItemsPerLineTablet == 1} first-item-of-tablet-line{/if}{if $smarty.foreach.products.iteration%$nbItemsPerLineMobile == 0} last-item-of-mobile-line{elseif $smarty.foreach.products.iteration%$nbItemsPerLineMobile == 1} first-item-of-mobile-line{/if}{if $smarty.foreach.products.iteration > ($smarty.foreach.products.total - $totModuloMobile)} last-mobile-line{/if}">
          <a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
            <div itemscope itemtype="https://schema.org/Product">
                <div class="product-item-img">
						        <!--<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">-->
					<img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" />
					        	<!--</a>-->

						<!--{if (!$PS_CATALOG_MODE && ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
							<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
								{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
									<span itemprop="price" class="price product-price">
										{hook h="displayProductPriceBlock" product=$product type="before_price"}
										{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
									</span>
									<meta itemprop="priceCurrency" content="{$currency->iso_code}" />
									{if $product.price_without_reduction > 0 && isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
										{hook h="displayProductPriceBlock" product=$product type="old_price"}
										<span class="old-price product-price">
											{displayWtPrice p=$product.price_without_reduction}
										</span>
										{if $product.specific_prices.reduction_type == 'percentage'}
											<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
										{/if}
									{/if}
									{if $PS_STOCK_MANAGEMENT && isset($product.available_for_order) && $product.available_for_order && !isset($restricted_country_mode)}
										<span class="unvisible">
											{if ($product.allow_oosp || $product.quantity > 0)}
													<link itemprop="availability" href="https://schema.org/InStock" />{if $product.quantity <= 0}{if $product.allow_oosp}{if isset($product.available_later) && $product.available_later}{$product.available_later}{else}{l s='In Stock'}{/if}{/if}{else}{if isset($product.available_now) && $product.available_now}{$product.available_now}{else}{l s='In Stock'}{/if}{/if}
											{elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}
													<link itemprop="availability" href="https://schema.org/LimitedAvailability" />{l s='Product available with different options'}

											{else}
													<link itemprop="availability" href="https://schema.org/OutOfStock" />{l s='Out of stock'}
											{/if}
										</span>
									{/if}
									{hook h="displayProductPriceBlock" product=$product type="price"}
									{hook h="displayProductPriceBlock" product=$product type="unit_price"}
								{/if}
							</div>
						{/if}-->
						{if isset($product.new) && $product.new == 1}
                                <!--<a class="new-box" href="{$product.link|escape:'html':'UTF-8'}">-->
					<span class="new-label">{l s='New'}</span>-->
                                <!--</a>-->
						{/if}
						{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
                                <!--<a class="sale-box" href="{$product.link|escape:'html':'UTF-8'}">-->
					<span class="sale-label">{l s='Sale!'}</span>
                                <!--</a>-->
						{/if}
				</div>
					{if isset($product.is_virtual) && !$product.is_virtual}{hook h="displayProductDeliveryTime" product=$product}{/if}
					{hook h="displayProductPriceBlock" product=$product type="weight"}


                    <!--Готово-->
                    <h4 class="product-item-manufactory">
                                <!-- <a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >-->
                    {$product.manufacturer_name|escape:'htmlall':'UTF-8'}
                                 <!-- </a>-->
                    </h4>
                    <h5 class="product-item-name">
						{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
                                 <!--<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >-->
						{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
                                <!--</a>-->
					</h5>
                    <p class="product-item-description" itemprop="description">
                        {$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}
                    </p>
                    <!--/Готово-->
					{capture name='displayProductListReviews'}{hook h='displayProductListReviews' product=$product}{/capture}
					{if $smarty.capture.displayProductListReviews}
						<div class="hook-reviews">
						{hook h='displayProductListReviews' product=$product}
						</div>
					{/if}

					{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
					<div><!--Раздел цены-->
						{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
							{hook h="displayProductPriceBlock" product=$product type='before_price'}
                            <span class="product-item-price">
								{if !$priceDisplay}{convertPrice price=$product.price}{if !empty($product.unity)}{l s='/'}{$product.unity|escape:'html':'UTF-8'}{/if}{else}{convertPrice price=$product.price_tax_exc}{/if}
							</span>
							{if $product.price_without_reduction > 0 && isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
								{hook h="displayProductPriceBlock" product=$product type="old_price"}
							<span class="old-price product-price">
								{displayWtPrice p=$product.price_without_reduction}
							</span>
								{hook h="displayProductPriceBlock" id_product=$product.id_product type="old_price"}
								{if $product.specific_prices.reduction_type == 'percentage'}
							<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
								{/if}
							{/if}
							{hook h="displayProductPriceBlock" product=$product type="price"}
							{hook h="displayProductPriceBlock" product=$product type="unit_price"}
							{hook h="displayProductPriceBlock" product=$product type='after_price'}
						{/if}
					</div><!--/Раздел цены-->
					{/if}
					<a class="product-item-more" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='View'}">
						{if (isset($product.customization_required) && $product.customization_required)}{l s='Customize'}{else}{l s='More'}{/if}
					</a>

			</div><!-- .product-container> -->
          </a>
        </li>
	{/foreach}
	</ul>



    {if isset ($categories_manufacturer_filter)}
            <div class="filter" id="manufacturer-category-filter" style="display: none;">
                <h4>Фильтр</h4>

                {foreach from=$categories_manufacturer_filter item=category name=categories}
                    <label data-category-id="{$category.id}"><input type="text" name="sorting" value="price-up">{$category.name|escape:'html':'UTF-8'}</label>
                {/foreach}
                <a href="#" style="border: 2px solid #fff; display: none;" id="filter-button" class="product-item-more">Отфильтровать</a>
            </div>
        <SCRIPT>
            $(function(){
                var $sidebar = $('#sidebar'),
                    $filter = $('#manufacturer-category-filter'),
                    $filter_button = $('#filter-button');

                if($sidebar.length > 0 && $filter.length > 0){
                    $sidebar.append($filter);
                    $filter.fadeIn(3000);

                    var categories_checked = {};
                    var categories = {};

                    {if isset ($categories_manufacturer_filter_checked)}
                        {foreach from=$categories_manufacturer_filter_checked item=category_checked}
                            categories['{$category_checked}'] = true;
                            categories_checked['category-{$category_checked}'] = true;
                            $('#manufacturer-category-filter label[data-category-id="{$category_checked}"]').addClass('checked');
                        {/foreach}
                    {/if}




                    $filter_button.on('click', function(event){
                        var url = window.location.href;
                        url = url.replace(/\&categories=[0-9\-]*/, '');
                        var param = '';
                        url = url
                                .replace(/\&p=[0-9\-]*/, '&p=1')
                                .replace(/\?p=[0-9\-]*/, '?p=1');
                        if(Object.keys(categories).length > 0){
                            for(var key in categories){
                                if(param){
                                    param += '-'+key;
                                }else{
                                    param += key.toString();
                                }
                            }
                            if(url.indexOf('?') == -1){
                                window.location.href = url + '?categories=' + param;
                            }
                            else{
                                window.location.href = url + '&categories=' + param;
                            }


                        }else{
                            window.location.href = url;
                        }

                        event.preventDefault();
                    });

                    $filter.find('label').on('click', function(event){
                        var category_id = $(this).attr('data-category-id');

                        if(category_id in categories){
                            delete categories[category_id];
                            $(this).removeClass('checked');
                        }else{
                            categories[category_id] = true;
                            $(this).addClass('checked');
                        }

                        /*$categories_checked = $('#manufacturer-category-filter label.checked');
                        if(Object.keys(categories_checked).length == $categories_checked.length){
                            $filter_button.hide();
                            $categories_checked.each(function(){
                                var current_category_id = $(this).attr('data-category-id');
                                if(!categories_checked['category-' + current_category_id]){
                                    $filter_button.show();
                                }
                            });
                        }else{
                            $filter_button.show();
                        }*/


                        if(Object.keys(categories_checked).length == Object.keys(categories).length){
                            $filter_button.hide();
                            for(var key in categories){
                                if(!categories_checked['category-' + key]){
                                    $filter_button.show();
                                }
                            }
                        }else{
                            $filter_button.show();
                        }


                        console.info('Клик по категории: ', category_id);
                        console.info('Массив категорий для фильтра: ', categories);

                        event.preventDefault();
                    });

                }

                /* парсим списки и таблицу в описании номера */
                $filter.appendTo('.r-filter-adaptive');
                /* END парсим списки и таблицу в описании номера */
            });
        </SCRIPT>
    {/if}
{addJsDefL name=min_item}{l s='Please select at least one product' js=1}{/addJsDefL}
{addJsDefL name=max_item}{l s='You cannot add more than %d product(s) to the product comparison' sprintf=$comparator_max_item js=1}{/addJsDefL}
{addJsDef comparator_max_item=$comparator_max_item}
{addJsDef comparedProductsIds=$compared_products}
{/if}
