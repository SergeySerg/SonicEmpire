<?php /* Smarty version Smarty-3.1.19, created on 2016-12-12 22:26:58
         compiled from "D:\OpenServer\domains\sonicempire.loc\modules\smartbloghomelatestnews\views\templates\front\smartblog_latest_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193005847f235dfb7c2-76388328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7fde63d852f466ab9c62e5248cb0a343f118291' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\modules\\smartbloghomelatestnews\\views\\templates\\front\\smartblog_latest_news.tpl',
      1 => 1481574385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193005847f235dfb7c2-76388328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5847f235e8bda7_76113577',
  'variables' => 
  array (
    'view_data' => 0,
    'post' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847f235e8bda7_76113577')) {function content_5847f235e8bda7_76113577($_smarty_tpl) {?><!--Скрипт выпидающего текста-->
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
                        <section><p><?php echo $_smarty_tpl->tpl_vars['post']->value['short_description'];?>
</p></section>
                        <div class="spoiler-body" style="display: none;"><section><p><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p></section></div>
                        <a href="#" class="more">Подробнее<i class="fa fa-angle-down"></i></a>
                    </div>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php } ?>
        <?php }?>


<?php }} ?>
