<?php
/* Smarty version 3.1.33, created on 2019-09-11 16:33:05
  from '/Volumes/DATA/a/Facebook/content/themes/default/templates/__feeds_post.comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7921c124fe55_84054176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30a06dee82b058927f58e266c4f0661b5a09e69e' => 
    array (
      0 => '/Volumes/DATA/a/Facebook/content/themes/default/templates/__feeds_post.comments.tpl',
      1 => 1563076832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.tpl' => 2,
    'file:__feeds_comment.form.tpl' => 2,
  ),
),false)) {
function content_5d7921c124fe55_84054176 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="post-comments">
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <?php if ($_smarty_tpl->tpl_vars['_is_photo']->value) {?>

            <!-- previous comments -->
            <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
                <div class="pb10 text-center js_see-more" data-get="photo_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-remove="true">
                    <span class="text-link">
                        <i class="fa fa-comment"></i>
                        <?php echo __("View previous comments");?>

                    </span>
                    <div class="loader loader_small x-hidden"></div>
                </div>
            <?php }?>
            <!-- previous comments -->

            <!-- comments -->
            <ul class="js_comments">
                <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photo']->value['photo_comments'], 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </ul>
            <!-- comments -->

            <!-- post comment -->
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'photo','_id'=>$_smarty_tpl->tpl_vars['photo']->value['photo_id']), 0, false);
?>
            <!-- post comment -->

        <?php } else { ?>

            <!-- previous comments -->
            <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
                <div class="pb10 text-center js_see-more" data-get="post_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" data-remove="true">
                    <span class="text-link">
                        <i class="fa fa-comment"></i>
                        <?php echo __("View previous comments");?>

                    </span>
                    <div class="loader loader_small x-hidden"></div>
                </div>
            <?php }?>
            <!-- previous comments -->

            <!-- comments -->
            <ul class="js_comments">
                <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['post_comments'], 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </ul>
            <!-- comments -->

            <!-- post comment -->
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'post','_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id']), 0, true);
?>
            <!-- post comment -->

        <?php }?>
    <?php } else { ?>
        <div class="pb10">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Please log in to like, share and comment!");?>
</a>
        </div>
    <?php }?>
</div><?php }
}
