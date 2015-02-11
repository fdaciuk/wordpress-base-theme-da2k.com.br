<?php
require_once __DIR__ . '/../security.php';

class Controller_Single {
    public function __construct() {
        add_filter( 'get_single_content', array( $this, 'get_single_content' ) );
    }

    public function get_single_content() {
        $single_content = new StdClass();
        $single_content->thumbnail = has_post_thumbnail() ? get_the_post_thumbnail() : '';
        $single_content->title = get_the_title();
        $single_content->content = get_the_content();
        return $single_content;
    }
}

new Controller_Single();