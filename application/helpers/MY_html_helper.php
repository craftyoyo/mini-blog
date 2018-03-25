<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function bootstrap_alert($message, $type = 'danger')
{
    echo "<div class=\"alert alert-$type\" role=\"alert\">$message</div>";
}

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}