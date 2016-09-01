{if !isset($content_only) || !$content_only}
					</div><!-- #center_column -->
					<!--{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}-->

					</div><!-- .row -->
				</div><!--Контейнер страницы--><!-- #columns -->
    <!--</div> .columns-container -->
			{if isset($HOOK_FOOTER)}
				<!-- Footer -->
					<footer id="footer">
                        <div class="container">
                            <div class="row">
                            {$HOOK_FOOTER}
                            <div class="clearfix">
                                <div class="bottom-phone">{hook h="displayNav"}</div>
                             </div>
                                <section class="bottom-footer col-xs-12">&copy; Sonic Empire, 2016</section>

                            </div>
                        </div>
					</footer>
                <div class="hidden"></div>
				<!-- #footer -->
			{/if}
		</div><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
<!-- HelloPreload http://hello-site.ru/preloader/ -->

<script type="text/javascript">
	var hellopreloader = document.getElementById("hellopreloader_preload");
	function fadeOutnojquery(el){
		el.style.opacity = 1.0;
		var interhellopreloader = setInterval(function(){
			el.style.opacity = el.style.opacity - 0.05;
			if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);
			hellopreloader.style.display = "none";}},16);
	}
		window.onload = function(){
			setTimeout(function(){
				fadeOutnojquery(hellopreloader);
			},1000);
		};

	$(function(){
		$('a').on('click', function(e){
			if( ! $(this).hasClass('no-loader')){
				var hellopreloader = document.getElementById("hellopreloader_preload");
				hellopreloader.style.opacity = 1;
				var href = $(this).attr('href');
				if (href && href.length > 4) {
					$('#hellopreloader_preload').fadeIn(1000);
					setTimeout(function(){
						fadeOutnojquery(hellopreloader);
					},5000);
				}
			}
		})
	});

</script>
<script>
    $(function(){
        var position = window.localStorage.getItem('currentScrollPos');
        if(position){
            window.scrollTo(0, position);
        }


        $(window).scroll(function(){                         // отслеживаем событие
            var currentScrollPos = $(window).scrollTop();
            window.localStorage.setItem('currentScrollPos', currentScrollPos);
        });
    });
</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->
	</body>
</html>
