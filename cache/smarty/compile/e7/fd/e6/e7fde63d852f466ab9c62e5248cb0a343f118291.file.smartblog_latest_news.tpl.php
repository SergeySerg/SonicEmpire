<?php /* Smarty version Smarty-3.1.19, created on 2016-11-18 21:28:17
         compiled from "D:\OpenServer\domains\sonicempire.loc\modules\smartbloghomelatestnews\views\templates\front\smartblog_latest_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9057582f56511b1538-30123702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7fde63d852f466ab9c62e5248cb0a343f118291' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\modules\\smartbloghomelatestnews\\views\\templates\\front\\smartblog_latest_news.tpl',
      1 => 1479314302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9057582f56511b1538-30123702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_data' => 0,
    'post' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582f56511ec350_20756453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f56511ec350_20756453')) {function content_582f56511ec350_20756453($_smarty_tpl) {?><!--Скрипт выпидающего текста-->
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
           <?php if (isset($_smarty_tpl->tpl_vars['view_data']->value)&&!empty($_smarty_tpl->tpl_vars['view_data']->value)) {?>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                    <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id'];?>
                    <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
                    <div id="sds_blog_post">
                        <h1><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h1>
                        <section><p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['short_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p></section>
                        <div class="spoiler-body" style="display: none;"><section><p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p></section></div>
                        <a href="#" class="more">Подробнее<i class="fa fa-angle-down"></i></a>
                    </div>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php } ?>
        <?php }?>


<?php }} ?>
