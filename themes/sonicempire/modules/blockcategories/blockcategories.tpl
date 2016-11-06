{if $blockCategTree && $blockCategTree.children|@count}
<!-- Block categories module -->
<div id="categories_block_left">
	<!--<h2 class="title_block">
		{if isset($currentCategory)}
			{$currentCategory->name|escape}
		{else}
			{l s='Categories' mod='blockcategories'}
		{/if}
	</h2>-->
        <ul id="r-catalog-open" class="col-xs-12 catalog">
            <li class="raund-categories">
                <span class="grower CLOSE"></span>
                <a href="#">{l s='Categories' mod='blockcategories'}</a>
            </li>
        </ul>

    <div id="raund-categories-hide" class="r-categories-hide">
        <ul id="menu" class="catalog tree {if $isDhtml}dhtml{/if}">
            {foreach from=$blockCategTree.children item=child name=blockCategTree}
                {if $smarty.foreach.blockCategTree.last}
                    {include file="$branche_tpl_path" node=$child last='true'}
                {else}
                    {include file="$branche_tpl_path" node=$child}
                {/if}
            {/foreach}
        </ul>
    </div>

</div>
<!-- /Block categories module -->
{/if}

{*raund adaptive block filters*}

    <!--Сортировка товара-->

    {if {$page_name} == 'manufacturer' || {$page_name} == 'category' }
        <ul id="r-filters-open" class="col-xs-12 catalog">
            <li class="raund-filters">
                <a href="#">Фильтры</a>
            </li>
        </ul>

        <div class="r-filter-adaptive">
            <div id="filter-close">
                <h4>Закрыть</h4>
            </div>
            <div class="sort" id="sorting_product" style="display: none">
                <h4>Сортировка</h4>
                <label data-sort="price:desc"><input type="radio" name="sorting">Высокая цена в начале</label>
                <label data-sort="price:asc"><input type="radio" name="sorting">Низкая цена в начале</label>
                <label data-sort="sales:asc"><input type="radio" name="sorting">Самые популярные в начале</label>
            </div>
            <SCRIPT>
                $(function(){
                    if($('#selectProductSort').length > 0){
                        var currentSort = $("#selectProductSort option:selected").val();
                        console.info('Направление сортировки: ', currentSort);
                        $('#sorting_product label[data-sort="' + currentSort + '"]').addClass('checked');

                        $('#sorting_product').fadeIn(3000);

                        $('#sorting_product label').click(function(event){

                            var sort = $(this).attr('data-sort');
                            console.info('Изменение направления сортировки: ', sort);

                            $('#sorting_product label').removeClass('checked');
                            $(this).addClass('checked');

                            $('#selectProductSort option').removeAttr('selected');
                            $('#selectProductSort option[value="' + sort + '"]').attr("selected", "selected");
                            $('#selectProductSort').change();
                            //$('#selectProductSort option[value="' + sort + '"]').trigger('click');

                            event.preventDefault();
                        });
                    }
                });

            </SCRIPT>
    {/if}
    <!--/Сортировка товара-->