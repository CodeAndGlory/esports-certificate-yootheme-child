<div class="secondary-header-wrapper">
    <div class="secondary-header">
        <div class="site-title">
            <a href="<?php echo get_bloginfo( 'url' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
        </div>
        <div class="secondary-navigation-wrapper">
            <div class="secondary-navigation">
                <?php wp_nav_menu( array( 'menu' => 'Secondary Menu - DO NOT DELETE' ) ) ?>
            </div>
            <div class="search-wrapper">
                <?php include_once("search/search.php") ?>
            </div>
        </div>
    </div>
</div>
