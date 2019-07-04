<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function bootstrap_alert($message, $type = 'danger')
{
    echo "<div class=\"alert alert-$type\" role=\"alert\">$message</div>";
}

function dd( $data ){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function set_title($title) {
    $ci =& get_instance();
    $ci->title = $title;
}

function get_title() {
    $ci =& get_instance();
    return $ci->title ?? null;
}