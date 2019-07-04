<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class B extends CI_Controller
    {
        public function home($username)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            $this->load->view('blog/home', compact('blog'));
        }

        public function post($username, $post_id)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            $post = $this->posts_model->get_post($post_id);
            set_title($post->getTitle());
            $this->load->view('blog/post', compact('blog', 'post'));
        }

        public function archive($username)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            set_title("Archive");
            $this->load->view('blog/archive', compact('blog'));
        }

        public function page($username, $page_id)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            $page = $this->pages_model->get_page($page_id);
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
            set_title("About");
            $this->load->view('blog/about', compact('blog'));
        }
    }
