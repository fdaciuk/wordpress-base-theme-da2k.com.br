<?php
if( ! defined( 'ABSPATH' ) ) {
    header( 'Location: /' );
    exit;
}
?>
<?php get_header() ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post() ?>
    <h2>
        <a href="<?php the_permalink() ?>">
            <?php the_title() ?>
        </a>
    </h2>

    <div class="content">
        <?php the_content() ?>
    </div>
<?php endwhile; ?>

<?php else : ?>
    <p>Não existem posts.</p>
<?php endif ?>

<?php get_footer() ?>