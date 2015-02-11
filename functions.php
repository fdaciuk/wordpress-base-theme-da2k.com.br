<?php
require_once __DIR__ . '/functions/security.php';
require_once __DIR__ . '/functions/controllers/controller-single.php';

add_action( 'after_setup_theme', 'setup_features' );
function setup_features() {
    add_theme_support( 'post-thumbnails' );
}