<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class B extends CI_Controller
    {
        public function posts($username)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            $this->load->view('blog/home', compact('blog'));
        }

        public function archive($username)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            $this->load->view('blog/archive', compact('blog'));
        }

        public function page($username, $pageTitle)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            $page = $this->pages_model->get_page_by_title($blog, $pageTitle);
            $this->load->view('blog/page', compact('blog', 'page'));
        }

        public function board($username)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            $this->load->view('blog/board', compact('blog'));
        }

        public function about($username)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            $this->load->view('blog/about', compact('blog'));
        }
    }
