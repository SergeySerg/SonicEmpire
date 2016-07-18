{if ($page_name != 'index')}
    <div class="manuf-light" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul>
                    {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                        {if $manufacturer.image}
                            <li class="{if $smarty.foreach.manufacturer_list.last}last_item{elseif $smarty.foreach.manufacturer_list.first}first_item{else}item{/if}">
                                <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" title="{l s='Подробнее о %s' sprintf=[$manufacturer.name] mod='mib'}">
                                    <img src="{$content_dir}img/m/{$manufacturer.image_url}" alt="{$manufacturer.name|escape:'html':'UTF-8'}"/>
                                </a>
                            </li>
                        {/if}
                    {/foreach}

                </ul>
            </div>
        </div>
    </div>

    {else}
    <div class="manuf" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul>
                    {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                        {if $manufacturer.image}
                            <li class="{if $smarty.foreach.manufacturer_list.last}last_item{elseif $smarty.foreach.manufacturer_list.first}first_item{else}item{/if}">
                                <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" title="{l s='Подробнее о %s' sprintf=[$manufacturer.name] mod='mib'}">
                                    <img src="{$content_dir}img/m/{$manufacturer.image_url}" alt="{$manufacturer.name|escape:'html':'UTF-8'}"/>
                                </a>
                            </li>
                        {/if}
                    {/foreach}
                </ul>
            </div>
        </div>
    </div>
    {/if}
<!--
	<div class="manuf-dropdown">

		<div class="container">
			<div class="row">

				<div class="manuf-logo-dropdown"><img src="img/Manufactory/marshall.png"></div>
				<div class="manuf-description-dropdown">
					<section>
						<p>Компания Marshall получила международное признание как бесспорным японским лидер в производстве высококачественного звукового и аудиовизуального оборудования, программных средств в развлекательной и информационной индустрии, а также как единственная…</p>
						<a href="#" class="more">Подробнее<i class="fa fa-angle-down"></i></a>
					</section>
				</div>
			</div>
		</div>
	</div>

</div>
-->
