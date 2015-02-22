<?php
require_once __DIR__ . '/functions/security.php';
get_header();

the_post();
$single_post = apply_filters( 'get_single_content', false );
?>

<?php echo $single_post->thumbnail ?>

<h2>
    <?php echo $single_post->title ?>
</h2>

<div class="content">
    <?php echo $single_post->content ?>
</div>

<?php get_footer() ?>