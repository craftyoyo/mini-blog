<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function bootstrap_alert($message, $type = 'danger')
{
    echo "<div class=\"alert alert-$type\" role=\"alert\">$message</div>";
}