
{include file="$tpl_dir./errors.tpl"}
{if isset($category)}
	{if $category->id AND $category->active}

		<h1 class="page-heading{if (isset($subcategories) && !$products) || (isset($subcategories) && $products) || !isset($subcategories) && $products} product-listing{/if}"><span class="cat-name">{$category->name|escape:'html':'UTF-8'}{if isset($categoryNameComplement)}&nbsp;{$categoryNameComplement|escape:'html':'UTF-8'}{/if}</span></h1>
<div id="content">
		{if $category->description}
			<div class="cat_desc">
				{if Tools::strlen($category->description) > 350}
					<div id="category_description_short">{$description_short}</div>
					<div id="category_description_full" class="unvisible">{$category->description}</div>
					<a href="#" class="lnk_more">Подробнее<i class="fa fa-angle-down"></i></a>
				{else}
					<div>{$category->description}</div>
				{/if}
			</div>
		{/if}

		{if $products}
            {include file="./product-sort.tpl"}
			{include file="./product-list.tpl" products=$products}
      <div class="pagination-wrap">
           {include file="./pagination.tpl" paginationId='bottom'}
      </div>
		{/if}
	{elseif $category->id}
		<p class="alert alert-warning">{l s='This category is currently unavailable.'}</p>
	{/if}
  </div>
{/if}
