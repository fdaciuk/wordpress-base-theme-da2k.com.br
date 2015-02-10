<?php
require_once 'functions/security.php';
get_header();
?>

<?php echo $single_post->thumbnail ?>

<h2>
    <?php echo $single_post->title ?>
</h2>

<div class="content">
    <?php echo $single_post->content ?>
</div>

<?php get_footer() ?>