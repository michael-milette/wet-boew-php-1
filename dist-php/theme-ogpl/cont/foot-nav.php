<!-- FooterStart -->
<nav role="navigation"><div id="ogpl-sft"><h3><?php echo $_SITE['wb_sitefooter_' .$_PAGE['lang1'] ]; ?></h3><div id="ogpl-sft-in">
<div class="clear"></div>
<?php

//add the four required footer menus
for( $i=1; isset($_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']]); $i++ ) {
    if (empty($_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']])) {
        continue;
    }

    $_TEXT_ = $_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']];
    $_LINK_ = null;
    if( isset($_SITE['wb_ft'.$i.'_href_'.$_PAGE['lang1']]) ) {
        $_LINK_ = $_SITE['wb_ft'.$i.'_href_'.$_PAGE['lang1']];
    }
    if (strlen($_LINK_) > 0) {
        // Add link to text only if available
        $_TEXT_ = '<a'.$_TARGET_.' href="'.$_LINK_ .'">'.$_TEXT_.'</a>';
    }
    echo '<section><div class="span-2"><h4 class="ogpl-col-head">'.$_TEXT_.'</h4>'.PHP_EOL;

    $_MENU_ = $_SITE['wb_ft'.$i.'_menu_file_'.$_PAGE['lang1']];
    if( file_exists($_MENU_) ) {
        include $_MENU_;
    }
    echo '</div></section>'.PHP_EOL;
}
?>
</div></div></nav>
<!-- FooterEnd -->
