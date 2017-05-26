<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<html{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}>
	<head>
		<meta charset="utf-8" />
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
		{if isset($meta_description) AND $meta_description}
			<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
		{/if}
		{if isset($meta_keywords) AND $meta_keywords}
			<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
		{/if}
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
		{if isset($css_files)}
			{foreach from=$css_files key=css_uri item=media}
				{if $css_uri == 'lteIE9'}
					<!--[if lte IE 9]>
					{foreach from=$css_files[$css_uri] key=css_uriie9 item=mediaie9}
					<link rel="stylesheet" href="{$css_uriie9|escape:'html':'UTF-8'}?ver1.0.1" type="text/css" media="{$mediaie9|escape:'html':'UTF-8'}" />
					{/foreach}
					<![endif]-->
				{else}
					<link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}?ver1.0.2" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
				{/if}
			{/foreach}
		{/if}
		{if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
			{$js_def}
			{foreach from=$js_files item=js_uri}
			<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
			{/foreach}
		{/if}
		{$HOOK_HEADER}
        {literal}<script type="text/javascript" src="/owl-carousel/owl.carousel.js"></script>{/literal}
		{literal}<script type="text/javascript" src="/sweetalert/sweetalert.min.js"></script>{/literal}
        {literal}<script type="text/javascript" src="/themes/sonicempire/js/common.js?ver1.0.1"></script>{/literal}
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css" media="all" />
		<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body style="background-image: url({$img_dir}/bg.jpg);background-color: #292929;" {if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{else} show-left-column{/if}{if $hide_right_column} hide-right-column{else} show-right-column{/if}{if isset($content_only) && $content_only} content_only{/if} lang_{$lang_iso}">
	<style type="text/css">
		#hellopreloader_preload{
			display: block;
			position: fixed;
			z-index: 99999;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			min-width: 1000px;
			background: #322D29 url('/img/puff.svg') center center no-repeat;
			background-size:41px;}
		.manuf-light img {
			display: none;
		}
		.manuf-light {
			height: 100px;
		}
		{if $page_name =='manufacturer'}
		#hellopreloader_preload{
			display: none;
		}
		{/if}
	</style>
	<div id="hellopreloader">
		<div id="hellopreloader_preload"></div>
	</div>
	<script>
		if(window.location.hash == '#noloader'){
			document.getElementById('hellopreloader').style.display = 'none';
		}
	</script>
	{if !isset($content_only) || !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
			<div id="restricted-country">
				<p>{l s='You cannot place a new order from your country.'}{if isset($geolocation_country) && $geolocation_country} <span class="bold">{$geolocation_country|escape:'html':'UTF-8'}</span>{/if}</p>
			</div>
		{/if}
		<div id="page">

            <div class="container">

                <div class="row">
                    <header class="clearfix">
                        <!-- MODULE Block Contact -->
                        {hook h='displayNav'}
                        <!-- /MODULE Block Contact -->
                        <div id="header_logo-my" class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}">
                                <img src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
                            </a>
                        </div>
                        <div class="top-nav-my col-xs-12 col-sm-5 col-md-5 col-lg-4">
                            <ul>
                                <li><a href="{$base_dir}content/1-delivery">Доставка и оплата</a></li>
								<li><a href="{$base_dir}content/6-contact">Контакты</a></li>
                            </ul>
                        </div>
                        <!-- Block search module and TOP Block cart-->
                        {hook h='displayTop'}
                        <!-- /Block search module and TOP Block cart-->
                    </header>
                </div>
            </div>
            <!-- Block manufactory in header-->
               {hook h="displayRightColumn"}
            <!-- /Block manufactory -->
            <!--Хлебные крошки-->
                {if $page_name !='index' && $page_name !='pagenotfound'}
                    {include file="$tpl_dir./breadcrumb.tpl"}
                {/if}
            <!--/Хлебные крошки-->
            <!--Контейнер страницы-->
				<div id="columns" class="container">
					<div class="row">
						{*проверяем страницу*}
						<div class="page" style="display: none;">{$page_name}</div>
						{* /проверяем страницу*}
                        <!--левый сайдбар-->
						{if isset($left_column_size) && !empty($left_column_size)}
							<div id="left_column" class="col-sm-12 col-md-3 clearfix">
								<div id="sidebar">{$HOOK_LEFT_COLUMN}</div>
							</div>
							{if {$page_name} == 'manufacturer' || {$page_name} == 'category' }
								</div>
							{/if}
						{/if}
                        <!--/левый сайдбар-->
						{if isset($left_column_size) && isset($right_column_size)}{assign var='cols' value=(12 - $left_column_size - $right_column_size)}{else}{assign var='cols' value=12}{/if}

						<div id="center_column" class="col-sm-12 col-md-9"><!-- class="center_column col-xs-12 col-sm-{$cols|intval}">-->


	{/if}