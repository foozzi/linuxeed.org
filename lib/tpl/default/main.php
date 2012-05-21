<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>
    <?php //tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>

  <?php tpl_metaheaders()?>
  <?php echo tpl_favicon(array('favicon', 'mobile')) ?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>
<div class="dokuwiki">
  <?php html_msgarea()?>

  <div class="stylehead">

    <div class="header">
      <div class="pagename">
        <a href="/" ><img src="<?php echo DOKU_TPL; ?>images/logo.png" align="absmiddle"/></a>
        <!--[[<?php tpl_link(wl($ID,'do=backlink'),tpl_pagetitle($ID,true),'title="'.$lang['btn_backlink'].'"')?>]]-->
      </div>
      <div class="logo">
        <?php //tpl_link(wl(),$conf['title'],'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"')?>
        <a href="http://linux.org.ru/" ><img src="http://www.linux.org.ru/img/linux-banner5.gif" alt="linux.org.ru" ></a>
      </div>


      <div class="clearer"></div>
    </div>

    <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>
<br />
    <div class="bar" id="bar__top">
      <div class="bar-left" id="bar__topleft">
        <?php tpl_button('edit')?>
        <?php tpl_button('history')?>
      </div>

      <div class="bar-right" id="bar__topright">
<!-- Social button -->
              |<a target="_blank" style="text-decoration: none"
               href="https://twitter.com/intent/tweet?text=Песочница *nux и СПО&amp;url=http://www.linuxeed.org/">
              <img border="0" src="<?php echo DOKU_TPL; ?>/images/twitter.png" width=16 height=16 alt="Share on Twitter" title="Share on Twitter">
            </a>
        
        <a target="_blank" style="text-decoration: none"
               href="http://plus.google.com/share?url=http://www.linuxeed.org/">
              <img border="0" src="<?php echo DOKU_TPL; ?>/images/google-plus-icon.png" width=16 height=16 alt="Share on Google Plus" title="Share on Google Plus">
            </a>|
            <!-- End Social buttons -->
      <a href="/feed.php"><img src="<?php echo DOKU_TPL; ?>images/button-rss.png"/></a> |
              <?php /*
        if(!empty($_POST['go'])) {
	     $name = $_POST['article'];
	     header('Location: http://linuxeed.org/sandbox/' . $name);
	     }
	     else {
		  echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <form action="" method="post">
            Введите название статьи: <input type="text" name="article" value="" /><input type="submit" name="go" value="Начать написание" />
            </form>';
		  }*/
        ?>
        <?php tpl_button('recent')?>
        <?php tpl_searchform()?>&nbsp;
      </div>

      <div class="clearer"></div>
    </div>

    <?php if($conf['breadcrumbs']){?>
    <div class="breadcrumbs">
      <?php //tpl_breadcrumbs()?>
      <?php //tpl_youarehere() //(some people prefer this)?>
    </div>
    <?php }?>

    <?php if($conf['youarehere']){?>
    <div class="breadcrumbs">
      <?php tpl_youarehere() ?>
    </div>
    <?php }?>

  </div>
  <?php tpl_flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>

  <div class="page">
    <!-- wikipage start -->
    <?php tpl_content()?>
    <!-- wikipage stop -->
  </div>

  <div class="clearer"></div>

  <?php tpl_flush()?>

  <div class="stylefoot">

    <div class="meta">
      <div class="user">
        <?php tpl_userinfo()?>
      </div>
      <div class="doc">
        <?php tpl_pageinfo()?>
      </div>
    </div>

   <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>

    <div class="bar" id="bar__bottom">
      <div class="bar-left" id="bar__bottomleft">
        <?php tpl_button('edit')?>
        <?php tpl_button('history')?>
        <?php tpl_button('revert')?>
      </div>
      <div class="bar-right" id="bar__bottomright">
        <?php tpl_button('subscribe')?>
        <?php tpl_button('media')?>
        <?php tpl_button('admin')?>
        <?php tpl_button('profile')?>
        <?php tpl_button('login')?>
        <?php tpl_button('index')?>
        <?php tpl_button('top')?>&nbsp;
      </div>
      <div class="clearer"></div>
    </div>

  </div>

  <?php tpl_license(false);?>

</div>
<?php /*old includehook*/ @include(dirname(__FILE__).'/footer.html')?>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
</body>
</html>
