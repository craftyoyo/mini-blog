<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    function blog_url($blog, $page)
    {
        return base_url("~{$blog->getUser()->getUsername()}/$page");
    }
