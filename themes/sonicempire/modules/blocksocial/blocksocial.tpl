<div id="social_block" class="social col-md-3 clearfix">
	<ul>
        {if isset($youtube_url) && $youtube_url != ''}
            <li>
                <a class="youtube no-loader" href="{$youtube_url|escape:html:'UTF-8'}">
                </a>
            </li>
        {/if}
		{if isset($facebook_url) && $facebook_url != ''}
			<li>
				<a class="fb no-loader" href="{$facebook_url|escape:html:'UTF-8'}">
				</a>
			</li>
		{/if}
        {if isset($instagram_url) && $instagram_url != ''}
            <li>
                <a class="instagram no-loader" href="{$instagram_url|escape:html:'UTF-8'}">
                </a>
            </li>
        {/if}
		<!--{if isset($twitter_url) && $twitter_url != ''}
			<li class="twitter">
				<a class="_blank" href="{$twitter_url|escape:html:'UTF-8'}">
					<span>{l s='Twitter' mod='blocksocial'}</span>
				</a>
			</li>
		{/if}
		{if isset($rss_url) && $rss_url != ''}
			<li class="rss">
				<a class="_blank" href="{$rss_url|escape:html:'UTF-8'}">
					<span>{l s='RSS' mod='blocksocial'}</span>
				</a>
			</li>
		{/if}

        {if isset($google_plus_url) && $google_plus_url != ''}
        	<li class="google-plus">
        		<a class="_blank" href="{$google_plus_url|escape:html:'UTF-8'}" rel="publisher">
        			<span>{l s='Google Plus' mod='blocksocial'}</span>
        		</a>
        	</li>
        {/if}
        {if isset($pinterest_url) && $pinterest_url != ''}
        	<li class="pinterest">
        		<a class="_blank" href="{$pinterest_url|escape:html:'UTF-8'}">
        			<span>{l s='Pinterest' mod='blocksocial'}</span>
        		</a>
        	</li>
        {/if}
        {if isset($vimeo_url) && $vimeo_url != ''}
        	<li class="vimeo">
        		<a class="_blank" href="{$vimeo_url|escape:html:'UTF-8'}">
        			<span>{l s='Vimeo' mod='blocksocial'}</span>
        		</a>
        	</li>
        {/if}-->

	</ul>
   <!-- <h4>{l s='Follow us' mod='blocksocial'}</h4>-->
</div>
<!--Страницы контента-->
        <div class="bottom-menu">

            <ul>
                <li><a href="{$base_dir}content/6-contact">Контакты</a></li>
                <li><a href="{$base_dir}content/4-about-us">О компании</a></li>
                <li><a href="{$base_dir}content/2-legal-notice">Политика безопасности</a></li>
            </ul>

        </div>
<!--/Страницы контента-->
