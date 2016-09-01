

<li class="{if $node.expand == 1}cat_expand{/if}">
	<a 
	href="{$node.link|escape:'html':'UTF-8'}"{if isset($currentCategoryId) && $node.id == $currentCategoryId} class="selected" style="color: #bf6d3b; " {/if} <!--title="{$node.desc|strip_tags|trim|escape:'html':'UTF-8'}-->">
		{$node.name|escape:'html':'UTF-8'}
	</a>
		{if $node.children|@count > 0}
			<ul class="sub_menu" style="display:block">
				{foreach from=$node.children item=child name=categoryTreeBranch}
					{if $smarty.foreach.categoryTreeBranch.last}
						{include file="$branche_tpl_path" node=$child last='true'}
					{else}
						{include file="$branche_tpl_path" node=$child last='false'}
					{/if}
				{/foreach}
			</ul>
		{/if}
</li>
	
