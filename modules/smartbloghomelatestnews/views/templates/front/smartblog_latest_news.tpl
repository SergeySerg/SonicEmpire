<!--Скрипт выпидающего текста-->
<script type="text/javascript">
    $(document).ready(function(){
        $('.more').click(function(){
            $(this).parent().children('.spoiler-body').slideToggle(700);
            $('.more i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
            return false;
        });
    });
</script>
<!--/Скрипт выпидающего текста-->
           {if isset($view_data) AND !empty($view_data)}
            {assign var='i' value=1}
            {foreach from=$view_data item=post}
                    {assign var="options" value=null}
                    {$options.id_post = $post.id}
                    {$options.slug = $post.link_rewrite}
                    <div id="sds_blog_post">
                        <h1>{$post.title}</h1>
                        <section><p>{$post.short_description}</p></section>
                        <div class="spoiler-body" style="display: none;"><section><p>{$post.content}</p></section></div>
                        <a href="#" class="more">Подробнее<i class="fa fa-angle-down"></i></a>
                    </div>
                {$i=$i+1}
            {/foreach}
        {/if}


