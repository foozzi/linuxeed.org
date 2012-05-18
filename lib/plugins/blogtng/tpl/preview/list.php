<div class="blogtng_mainpagelist level1">
    <a href="<?php $entry->tpl_link()?>" class="wikilink1 blogtng_permalink"><?php $entry->tpl_title()?></a>
    <img src="<?php echo DOKU_BASE?>imgs/date.gif"/>
    <?php $entry->tpl_created('%d-%m-%Y %H:%M')?>

    <img src="<?php echo DOKU_BASE?>imgs/comment.gif"/>
    <a href="<?php $entry->tpl_link('the__comments')?>" class="wikilink1 blogtng_commentlink"><?php $entry->tpl_commentcount('%d комментариев', '%d комментарий','%d комментариев')?></a>
</div>
<div class="blogtng_footer1"></div>
