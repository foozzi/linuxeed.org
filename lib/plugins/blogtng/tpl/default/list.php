<?php
/**
 * default list template
 *
 * This template is used by the <blog list> syntax and can be chosen
 * using the 'tpl' attribute. It is used to display a single entry in
 * the list and is called multiple times (once for each shown entry)
 *
 * This example shows full entries and add a footer with info
 * on tags and comments.
 */
?>
<div class="blogtng_list">
<?php
    if ($entry->tpl_entry(true, 'syntax', false)) {
?>
<div class="blogtng_footer level1">
    <img src="<?php echo DOKU_BASE?>imgs/date.gif"/>
    <?php $entry->tpl_created('%d %B %Y, %H:%M')?>
    <img src="<?php echo DOKU_BASE?>imgs/user.gif"/>
    <?php $entry->tpl_author()?>
    <img src="imgs/comment.gif"/>
    <a href="<?php $entry->tpl_link('the__comments')?>" class="wikilink1 blogtng_commentlink"><?php $entry->tpl_commentcount('%d комментариев', '%d комментарий','%d комментариев')?></a><br />
    <img src="<?php echo DOKU_BASE?>imgs/tag.gif"/>
    <?php $entry->tpl_tags('blog')?>
</div>
<?php
    }
?>
</div>
