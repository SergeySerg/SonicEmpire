
<!-- Breadcrumb -->
{if isset($smarty.capture.path)}{assign var='path' value=$smarty.capture.path}{/if}
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{l s='Return to Home'}">{l s='Home'}</a>
                {if isset($path) AND $path}
                    <span class="navigation-pipe"{if isset($category) && isset($category->id_category) && $category->id_category == (int)Configuration::get('PS_ROOT_CATEGORY')} style="display:none;"{/if}>&nbsp<i class="fa fa-angle-right"></i>&nbsp</span>
                    {if $path|strpos:'span' !== false}
                        <span class="navigation_page">{$path|@replace:'<a ': '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" '|@replace:'data-gg="">': '><span itemprop="title">'|@replace:'</a>': '&nbsp</span>&nbsp</a></span>'}</span>
                    {else}
                        {$path}
                    {/if}
                {/if}
            </div>
        </div>
    </div>
</div>
{if isset($smarty.get.search_query) && isset($smarty.get.results) && $smarty.get.results > 1 && isset($smarty.server.HTTP_REFERER)}
<div class="pull-right">
	<strong>
		{capture}{if isset($smarty.get.HTTP_REFERER) && $smarty.get.HTTP_REFERER}{$smarty.get.HTTP_REFERER}{elseif isset($smarty.server.HTTP_REFERER) && $smarty.server.HTTP_REFERER}{$smarty.server.HTTP_REFERER}{/if}{/capture}
		<a href="{$smarty.capture.default|escape:'html':'UTF-8'|secureReferrer|regex_replace:'/[\?|&]content_only=1/':''}" name="back">
			<i class="icon-chevron-left left"></i> {l s='Back to Search results for "%s" (%d other results)' sprintf=[$smarty.get.search_query,$smarty.get.results]}
		</a>
	</strong>
</div>
{/if}
<!-- /Breadcrumb -->
<!--<div class="breadcrumb">
	<div class="container">
		<div class="row">
			<ul>
				<li><a href="#">Главная</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li><a href="#">Marshall</a></li>
			</ul>
		</div>
	</div>
</div>-->