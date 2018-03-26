<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Blog extends CI_Controller
    {

        public function index()
        {
            $posts = $this->posts_model->get_posts();
            $this->load->view('posts/index', compact('posts'));
        }

        public function create()
        {
            if ($this->input->method() == 'post') {
                $title = $this->input->post('title');
                $body = $this->input->post('body');
                $draft = $this->input->post('draft') ? true : false;
                $post = $this->posts_model->create_post($title, $body, $draft);
                console_log($post);
            }
            $this->load->view('posts/create');
        }

        public function posts($user)
        {
            console_log($this->router->fetch_method());
            console_log($user);
        }

        public function archive($user)
        {
            console_log($this->router->fetch_method());
            console_log($user);
        }

        public function page($user, $page)
        {
            console_log($this->router->fetch_method());
            console_log($user);
        }

        public function board($user)
        {
            console_log($this->router->fetch_method());
            console_log($user);
        }

        public function about($user)
        {
            console_log($this->router->fetch_method());
            console_log($user);
        }
    }
