<div class="bootstrap">
	<nav id="{if $employee->bo_menu}nav-sidebar{else}nav-topbar{/if}" role="navigation">
		{if !$tab}
			<div class="mainsubtablist" style="display:none;"></div>
		{/if}
		<ul class="menu">
			<li class="searchtab">
				{include file="search_form.tpl" id="header_search" show_clear_btn=1}
			</li>
			{foreach $tabs as $t}
				{if $t.active}
				<li class="maintab {if $t.current}active{/if} {if $t.sub_tabs|@count}has_submenu{/if}" id="maintab-{$t.class_name}" data-submenu="{$t.id_tab}">
					<a href="{if $t.sub_tabs|@count && isset($t.sub_tabs[0].href)}{$t.sub_tabs[0].href|escape:'html':'UTF-8'}{else}{$t.href|escape:'html':'UTF-8'}{/if}" class="title" >
						<i class="icon-{$t.class_name}"></i>
						<span>{if $t.name eq ''}{$t.class_name|escape:'html':'UTF-8'}{else}{$t.name|escape:'html':'UTF-8'}{/if}</span>
					</a>
					{if $t.sub_tabs|@count}
						<ul class="submenu">
						{foreach from=$t.sub_tabs item=t2}
							{if $t2.active}
							<li id="subtab-{$t2.class_name|escape:'html':'UTF-8'}" {if $t2.current} class="active"{/if}>
								<a href="{$t2.href|escape:'html':'UTF-8'}">
									{if $t2.name eq ''}{$t2.class_name|escape:'html':'UTF-8'}{else}{$t2.name|escape:'html':'UTF-8'}{/if}
								</a>
							</li>
							{/if}
						{/foreach}
						</ul>
					{/if}
				</li>
				{/if}
			{/foreach}
            <li class="maintab">
                <a href='{$base_dir}/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=blocksocial&tab_module=front_office_features&module_name=blocksocial' class="title" >
                    <i class="icon-AdminParentCustomer"></i>
                    <span>Редактор Соц. сетей</span>
                </a>
            </li>
			<li class="maintab">
				<a href='{$base_dir}/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=productcomments&tab_module=front_office_features&module_name=productcomments' class="title" >
					<i class="icon-AdminSmartBlog"></i>
					<span>Модератор отзывов</span>
				</a>
			</li>
			<li class="maintab">
				<a href='{$base_dir}/admin9377xbaxo/index.php?controller=AdminTranslations&lang=ru&type=mails&theme=sonicempire&token=3d4d4508fd20b8e99271c78b1d40e53e' class="title" >
					<i class="icon-AdminParentOrders"></i>
					<span>Редактор писем для клиентов</span>
				</a>
			</li>
			<!--<li class="maintab">
				<a href='{$base_dir}/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=bankwire&tab_module=payments_gateways&module_name=bankwire' class="title" >
					<i class="icon-AdminPriceRule"></i>
					<span>Реквизиты банковского перевода</span>
				</a>
			</li>
			<li class="maintab">
				<a href='{$base_dir}/admin9377xbaxo/index.php?controller=AdminModules&token=96546ed585126989fb2231c0986937cc&configure=cheque&tab_module=payments_gateways&module_name=cheque' class="title" >
					<i class="icon-AdminParentOrders"></i>
					<span>Реквизиты пластиковой карты</span>
				</a>
			</li>-->
		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify icon-rotate-90"></i>
		</span>
		{hook h='displayAdminNavBarBeforeEnd'}
	</nav>
</div>
