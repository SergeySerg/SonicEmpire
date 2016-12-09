<?php /* Smarty version Smarty-3.1.19, created on 2016-12-07 13:27:49
         compiled from "D:\OpenServer\domains\sonicempire.loc\themes\sonicempire\modules\blocksocial\blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168455847f235ebc719-85855232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db1c119cb7bedb03bce7fd82c42bd5646be2d23e' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1479314698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168455847f235ebc719-85855232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'youtube_url' => 0,
    'facebook_url' => 0,
    'instagram_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'vimeo_url' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5847f236045126_70089379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847f236045126_70089379')) {function content_5847f236045126_70089379($_smarty_tpl) {?><div id="social_block" class="social col-xs-12 col-sm-12 col-md-3">
	<ul>
        <?php if (isset($_smarty_tpl->tpl_vars['youtube_url']->value)&&$_smarty_tpl->tpl_vars['youtube_url']->value!='') {?>
            <li>
                <a class="youtube no-loader" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                </a>
            </li>
        <?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['facebook_url']->value)&&$_smarty_tpl->tpl_vars['facebook_url']->value!='') {?>
			<li>
				<a class="fb no-loader" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
				</a>
			</li>
		<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['instagram_url']->value)&&$_smarty_tpl->tpl_vars['instagram_url']->value!='') {?>
            <li>
                <a class="instagram no-loader" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                </a>
            </li>
        <?php }?>
		<!--<?php if (isset($_smarty_tpl->tpl_vars['twitter_url']->value)&&$_smarty_tpl->tpl_vars['twitter_url']->value!='') {?>
			<li class="twitter">
				<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					<span><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['rss_url']->value)&&$_smarty_tpl->tpl_vars['rss_url']->value!='') {?>
			<li class="rss">
				<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					<span><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['google_plus_url']->value)&&$_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?>
        	<li class="google-plus">
        		<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" rel="publisher">
        			<span><?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
        		</a>
        	</li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['pinterest_url']->value)&&$_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?>
        	<li class="pinterest">
        		<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        			<span><?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
        		</a>
        	</li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['vimeo_url']->value)&&$_smarty_tpl->tpl_vars['vimeo_url']->value!='') {?>
        	<li class="vimeo">
        		<a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        			<span><?php echo smartyTranslate(array('s'=>'Vimeo','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
        		</a>
        	</li>
        <?php }?>-->

	</ul>
   <!-- <h4><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</h4>-->
</div>
<!--Страницы контента-->
    <div class="col-xs-12 col-sm-12 col-md-6 bottom-menu">

        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/6-contact">Контакты</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/7-about-company">О компании</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
content/2-legal-notice">Политика безопасности</a></li>
        </ul>

    </div>
<!--/Страницы контента-->
<?php }} ?>
