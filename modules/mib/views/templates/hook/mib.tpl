{if ($page_name != 'index')}
    <!--Скрипт выпидающего текста-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.more').click(function(){
                $(this).parent().parent().children('.spoiler-body').slideToggle(700);
                $('.more i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
                return false;
            });

/*
            $('.r-tab').on('click', function(e){
                if($(this).hasClass('active')){
                    $('.r-tab-data').slideUp('1000');
                    $(this).removeClass('active');
                    e.preventDefault();
                    return false;
                };

/!*
                var dataId = $(this).attr('data-id');
                $('a[data-id=' + dataId + ']').parent().hide();
*!/

                var idTab = $(this).attr('data-tab');
                $('.r-tab').removeClass('active');
                $(this).addClass('active');

                $('.r-tab-data').slideUp('1000');
                $(idTab).delay('500').slideDown('1000');
                e.preventDefault();
                return false;
            });
*/

            $("#r-owl-demo").owlCarousel({
              autoPlay: 3000, //Set AutoPlay to 3 seconds
              items : 12,
              itemsDesktop: [1199,8],
              itemsDesktopSmall:	[979,6],
              itemsTablet:	[768,4],
              itemsMobile:	[479,2],
              pagination : true
            });

        $('.manuf li a').on('click', function () {
            alert(1);
        })

    });
    </script>
    <!--/Скрипт выпидающего текста-->
    <div class="manuf-light" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul id="r-owl-demo">
                    {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                        {if $manufacturer.image}
                            <li class="{if $smarty.foreach.manufacturer_list.last}last_item{elseif $smarty.foreach.manufacturer_list.first}first_item{else}item{/if}">
                                <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" data-id="{$manufacturer.id_manufacturer}" data-tab="#manufacturer-descrition-{$manufacturer.id_manufacturer}" title="{l s='Подробнее о %s' sprintf=[$manufacturer.name] mod='mib'}" class="r-tab no-loader manufacturer-tab">
                                    <img src="{$content_dir}img/m/{$manufacturer.image_url}" alt="{$manufacturer.name|escape:'html':'UTF-8'}"/>
                                </a>
                            </li>
                        {/if}
                    {/foreach}
                </ul>
                <ul class="dropdown-manuf-list">
                    {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                        <li id="manufacturer-descrition-{$manufacturer.id_manufacturer}" class="r-tab-data manuf-dropdown" style="display:none">
                            <hr>
                            <div class="manuf-logo-dropdown">
                                <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" title="{l s='Подробнее о %s' sprintf=[$manufacturer.name] mod='mib'}">
                                    <img src="{$content_dir}img/m/{$manufacturer.image_url}" alt="{$manufacturer.name|escape:'html':'UTF-8'}"/>
                                </a>
                            </div>
                            <div class="manuf-description-dropdown">
                                {$manufacturer.short_description}
                                <div class="spoiler-body" style="display: none;"><section><p>{$manufacturer.description}</p></section></div>
                                <div class="r-link-block">
                                    <a href="#" class="more">Подробнее<i class="fa fa-angle-down"></i></a>
{*
                                    <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" class="products-of-manufacturer">Товары этого производителя<i class="fa fa-angle-right"></i></a>
*}
                                </div>
                            </div>

                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </div>
{else}
    <div class="manuf" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul>{$i = 1}
                    {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                        {if $manufacturer.image && $i <= 13}
                            <li class="r-item-{$i} {if $smarty.foreach.manufacturer_list.last}last_item{elseif $smarty.foreach.manufacturer_list.first}first_item{else}item{/if}">
                                <a class="no-loader" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" title="{l s='Подробнее о %s' sprintf=[$manufacturer.name] mod='mib'}">
                                    <img src="{$content_dir}img/m/{$manufacturer.image_url}" alt="{$manufacturer.name|escape:'html':'UTF-8'}"/>
                                </a>
                            </li>
                        {/if}
                        <div style="display:none">{$i++}</div>
                    {/foreach}
                </ul>
            </div>
        </div>
    </div>
    {*смена производителей на главной при адаптации*}
    <div class="manuf-light-main" id="mypresta_mib">
        <div class="container">
            <div class="row">
                <ul id="r-owl-main">
                    {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                        {if $manufacturer.image}
                            <li class="{if $smarty.foreach.manufacturer_list.last}last_item{elseif $smarty.foreach.manufacturer_list.first}first_item{else}item{/if}">
                                <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" data-id="{$manufacturer.id_manufacturer}" data-tab="#manufacturer-descrition-{$manufacturer.id_manufacturer}" title="{l s='Подробнее о %s' sprintf=[$manufacturer.name] mod='mib'}" class="r-tab manufacturer-tab">
                                    <img src="{$content_dir}img/m/{$manufacturer.image_url}" alt="{$manufacturer.name|escape:'html':'UTF-8'}"/>
                                </a>
                            </li>
                        {/if}
                    {/foreach}
                </ul>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $("#r-owl-main").owlCarousel({
                autoPlay: 2000, //Set AutoPlay to 3 seconds
                items : 12,
                itemsDesktop: [1199,8],
                itemsDesktopSmall:	[979,6],
                itemsTablet:	[768,4],
                itemsMobile:	[479,2],
                pagination : true,
            });
        });
    </script>
    {*смена производителей на главной при адаптации*}

    {*
        <div class="manuf-light" id="mypresta_mib">
            <div class="container">
                <div class="row">
                    <ul id="r-owl-demo">
                        {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                            {if $manufacturer.image}
                                <li class="{if $smarty.foreach.manufacturer_list.last}last_item{elseif $smarty.foreach.manufacturer_list.first}first_item{else}item{/if}">
                                    <a href="#" data-id="{$manufacturer.id_manufacturer}" data-tab="#manufacturer-descrition-{$manufacturer.id_manufacturer}" title="{l s='Подробнее о %s' sprintf=[$manufacturer.name] mod='mib'}" class="r-tab no-loader manufacturer-tab">
                                        <img src="{$content_dir}img/m/{$manufacturer.image_url}" alt="{$manufacturer.name|escape:'html':'UTF-8'}"/>
                                    </a>
                                </li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>
    *}
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
