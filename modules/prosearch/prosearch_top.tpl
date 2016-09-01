<div id="search_block_top" class="search_block_top-my col-xs-6 col-sm-2 col-md-3" >
	<form id="searchbox" class="searchbox-my" method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query_top-my" type="text" id="search_query_top" name="search_query" placeholder="{l s='Поиск' mod='prosearch'}" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
        <button class="btn-my" title="Поиск"></button>
	</form>
</div>  

  <div id="search_autocomplete" class="search-autocomplete"></div>
	
	{include file="$self/prosearch_instant.tpl"}
