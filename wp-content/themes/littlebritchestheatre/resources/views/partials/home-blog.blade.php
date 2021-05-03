<?php if ( is_active_sidebar( 'homeblog' ) ) : ?>
    <div class="page-bloghome">
        <?php dynamic_sidebar( 'homeblog' ); ?>
        <div style="clear:both"></div>
    </div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'homewhatson' ) ) : ?>
    <div class="page-homewhatson">
        <?php dynamic_sidebar( 'homewhatson' ); ?>
        <div style="clear:both"></div>
    </div>
<?php endif; ?>
