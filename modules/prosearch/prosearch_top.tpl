<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="{l s='Search' mod='prosearch'}" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>{l s='Search' mod='prosearch'}</span>
		</button>
	</form>
</div>  

  <div id="search_autocomplete" class="search-autocomplete"></div>
	
	{include file="$self/prosearch_instant.tpl"}			
