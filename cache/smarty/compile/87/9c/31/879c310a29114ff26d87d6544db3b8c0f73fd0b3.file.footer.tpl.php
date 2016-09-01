<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 15:41:01
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46497606157c6d05d1905d8-30630329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '879c310a29114ff26d87d6544db3b8c0f73fd0b3' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/footer.tpl',
      1 => 1472568384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46497606157c6d05d1905d8-30630329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d05d1b8314_79367943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d05d1b8314_79367943')) {function content_57c6d05d1b8314_79367943($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<!--<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>-->

					</div><!-- .row -->
				</div><!--Контейнер страницы--><!-- #columns -->
    <!--</div> .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
					<footer id="footer">
                        <div class="container">
                            <div class="row">
                            <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

                            <div class="clearfix">
                                <div class="bottom-phone"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>
</div>
                             </div>
                                <section class="bottom-footer col-xs-12">&copy; Sonic Empire, 2016</section>

                            </div>
                        </div>
					</footer>
                <div class="hidden"></div>
				<!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
<?php }} ?>
