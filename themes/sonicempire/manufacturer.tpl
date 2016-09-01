{include file="$tpl_dir./errors.tpl"}

{if !isset($errors) OR !sizeof($errors)}
	{if $products}
        <div id="content">
        {include file="./product-sort.tpl"}
		{include file="./product-list.tpl" products=$products}
        <div class="pagination-wrap">
	    {include file="./pagination.tpl" no_follow=1 paginationId='bottom'}
	    </div>
		</div>
	{else}
		<p class="alert alert-warning">{l s='No products for this manufacturer.'}</p>
	{/if}
        </div>
{/if}
