<!--Блок вывода товаров в корзине-->
<tr id="product_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}{if !empty($product.gift)}_gift{/if}" class="{if isset($productLast) && $productLast && (!isset($ignoreProductLast) || !$ignoreProductLast)}last_item{elseif isset($productFirst) && $productFirst}first_item{/if} {if isset($customizedDatas.$productId.$productAttributeId) AND $quantityDisplayed == 0}alternate_item{/if} cart_item address_{$product.id_address_delivery|intval} {if $odd}odd{else}even{/if}">
	<td class="my-cart_product-remove">
		<a href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category, null, null, $product.id_shop, $product.id_product_attribute)|escape:'htmlall':'UTF-8'}"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'small_default')}" alt="{$product.name|escape:'htmlall':'UTF-8'}" {if isset($smallSize)}width="{$smallSize.width}" height="{$smallSize.height}" {/if} /></a>
	</td>
	<td class="my-cart_product-description">
        <h4 class="manuf-name">{$product.manufacturer_name}</h4>
		<h5 class="model-name"><a href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category, null, null, $product.id_shop, $product.id_product_attribute)|escape:'htmlall':'UTF-8'}">{$product.name|escape:'htmlall':'UTF-8'}</a></h5>
		{if isset($product.attributes) && $product.attributes}<a href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category, null, null, $product.id_shop, $product.id_product_attribute)|escape:'htmlall':'UTF-8'}">{$product.attributes|escape:'htmlall':'UTF-8'}</a>{/if}
	</td>

    {if $PS_STOCK_MANAGEMENT}
    <td class="my-cart_product-available">{*<span class="{if $product.quantity_available <= 0 && !$product.allow_oosp}label label-available_later{else}label label-success{/if}">{if $product.quantity_available <= 0}{if $product.allow_oosp}{if isset($product.available_later) && $product.available_later}{$product.available_later}{else}{l s='In Stock'}{/if}{else}{l s='Out of stock'}{/if}{else}{if isset($product.available_now) && $product.available_now}{$product.available_now}{else}{l s='In Stock'}{/if}{/if}</span>{hook h="displayProductDeliveryTime" product=$product}*}</td>
    {/if}

    <td class="my-cart_product-quantity"{if isset($customizedDatas.$productId.$productAttributeId) AND $quantityDisplayed == 0} style="text-align: center;"{/if}>
        {if isset($cannotModify) AND $cannotModify == 1}
            <span style="float:left">
				{if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}{$customizedDatas.$productId.$productAttributeId|@count}
                {else}
                    {$product.cart_quantity-$quantityDisplayed}
                {/if}
			</span>
        {else}
            {if isset($customizedDatas.$productId.$productAttributeId) AND $quantityDisplayed == 0}
                <span id="cart_quantity_custom_{$product.id_product}_{$product.id_product_attribute}_{$product.id_address_delivery|intval}" >{$product.customizationQuantityTotal}</span>
            {/if}
            {if !isset($customizedDatas.$productId.$productAttributeId) OR $quantityDisplayed > 0}

                <div id="cart_quantity_button" class="updown-quantity" style="float:left;">
                    <div class="quantity">
                        <span> <input size="2" type="text" autocomplete="off" class="quantity" value="{if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}{$customizedDatas.$productId.$productAttributeId|@count}{else}{$product.cart_quantity-$quantityDisplayed}{/if}"  name="quantity_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" /></span>
                    </div>
                            <ul class="updown-quantity">
                                <li class="quantity-up"> <a rel="nofollow" class="no-loader cart_quantity_up" id="cart_quantity_up_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" href="{$link->getPageLink('cart', true, NULL, "add&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_address_delivery={$product.id_address_delivery|intval}&amp;token={$token_cart}")}" title="{l s='Add' mod='onepagecheckout'}"></a>
                                {if $product.minimal_quantity < ($product.cart_quantity-$quantityDisplayed) OR $product.minimal_quantity <= 1}
                                <li class="quantity-down"> <a rel="nofollow" class="no-loader cart_quantity_down" id="cart_quantity_down_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" href="{$link->getPageLink('cart', true, NULL, "add&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_address_delivery={$product.id_address_delivery|intval}&amp;op=down&amp;token={$token_cart}")}" title="{l s='Subtract' mod='onepagecheckout'}"></a>
                                {else}
                                <li class="quantity-down"> <a class="cart_quantity_down" style="opacity: 0.2;" href="#" id="cart_quantity_down_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" title="{l s='You must purchase a minimum of %d of this product.' sprintf=$product.minimal_quantity mod='onepagecheckout'}"></a>
                                {/if}
                            </ul>
                </div>
                <input type="hidden" value="{if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}{$customizedDatas.$productId.$productAttributeId|@count}{else}{$product.cart_quantity-$quantityDisplayed}{/if}" name="quantity_{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}_hidden" />
            {/if}
        {/if}
    </td>
	<td class="my-cart_product-total">
		<span class="price" id="product_price_{$product.id_product}_{$product.id_product_attribute}_{$product.id_address_delivery|intval}{if !empty($product.gift)}_gift{/if}">
			{if !empty($product.gift)}
				<li class="gift-icon">{l s='Gift!' mod='onepagecheckout'}</li>
			{else}
            	{if !$priceDisplay}
					<li class="price{if isset($product.is_discounted) && $product.is_discounted && isset($product.reduction_applies) && $product.reduction_applies} special-price{/if}">{convertPrice price=$product.price_wt}</li>
				{else}
               	 	<li class="price{if isset($product.is_discounted) && $product.is_discounted && isset($product.reduction_applies) && $product.reduction_applies} special-price{/if}">{convertPrice price=$product.price}</li>
				{/if}
				{if isset($product.is_discounted) && $product.is_discounted && isset($product.reduction_applies) && $product.reduction_applies}
                	<li class="price-percent-reduction small">
            			{if !$priceDisplay}
            				{if isset($product.reduction_type) && $product.reduction_type == 'amount'}
                    			{assign var='priceReduction' value=($product.price_wt - $product.price_without_specific_price)}
                    			{assign var='symbol' value=$currency->sign}
                    		{else}
                    			{assign var='priceReduction' value=(($product.price_without_specific_price - $product.price_wt)/$product.price_without_specific_price) * 100 * -1}
                    			{assign var='symbol' value='%'}
                    		{/if}
						{else}
							{if isset($product.reduction_type) && $product.reduction_type == 'amount'}
								{assign var='priceReduction' value=($product.price - $product.price_without_specific_price)}
								{assign var='symbol' value=$currency->sign}
                    		{else}
                    			{assign var='priceReduction' value=(($product.price_without_specific_price - $product.price)/$product.price_without_specific_price) * 100 * -1}
                    			{assign var='symbol' value='%'}
                    		{/if}
						{/if}
						{if $symbol == '%'}
							&nbsp;{$priceReduction|round:2|string_format:"%.2f"|regex_replace:"/[^\d]0+$/":""}{$symbol}&nbsp;
						{else}
							&nbsp;{convertPrice price=$priceReduction}&nbsp;
						{/if}
                    </li>
					<li class="old-price">{convertPrice price=$product.price_without_specific_price}</li>
				{/if}
			{/if}
		</span>
	</td>

	<td class="my-cart_product-remove r-cart-remove">
        {if !isset($noDeleteButton) || !$noDeleteButton}
            {if (!isset($customizedDatas.$productId.$productAttributeId) OR $quantityDisplayed) > 0 && empty($product.gift)}
                <a rel="nofollow" class="no-loader my-rmv cart_quantity_delete" id="{$product.id_product}_{$product.id_product_attribute}_0_{$product.id_address_delivery|intval}" href="{$link->getPageLink('cart', true, NULL, "delete=1&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_address_delivery={$product.id_address_delivery|intval}&amp;token={$token_cart}")}"></a><br />
            {/if}
        {/if}
		<!--<span class="price" id="total_product_price_{$product.id_product}_{$product.id_product_attribute}_{$product.id_address_delivery|intval}{if !empty($product.gift)}_gift{/if}">
			{if !empty($product.gift)}
				<span class="gift-icon">{l s='Gift!' mod='onepagecheckout'}</span>
			{else}
				{if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}
					{if !$priceDisplay}{displayPrice price=$product.total_customization_wt}{else}{displayPrice price=$product.total_customization}{/if}
				{else}
					{if !$priceDisplay}{displayPrice price=$product.total_wt}{else}{displayPrice price=$product.total}{/if}
				{/if}
			{/if}
		</span>-->
	</td>
</tr>
<!--/Блок вывода товаров в корзине-->