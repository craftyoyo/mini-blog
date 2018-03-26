<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Blog extends CI_Controller
    {

        public function index()
        {
            $posts = $this->posts_model->get_posts();
            $this->load->view('posts/index', compact('posts'));
        }

        private function check_authenticated($post = null)
        {
            $this->check_authorized();
            if(!$this->ion_auth->logged_in())
            {
                redirect('login');
            }
        }

        private function check_authorized($post = null)
        {
            if(!$post->getUserId() == $this->session->userdata('user_id'))
            {
                redirect('blog');
            }
        }

        public function create()
        {
            $this->check_authenticated();
            if ($this->input->method() == 'post') {
                $title = $this->input->post('title');
                $body = $this->input->post('body');
                $draft = $this->input->post('draft') ? true : false;
                $post = $this->posts_model->create_post($title, $body, $draft);

                redirect('blog');
            }
            $this->load->view('posts/create');
        }

        public function edit($post_id)
        {
            $post = $this->posts_model->get_post($post_id);
            $this->check_authorized($post);
            if ($this->input->method() == 'post') {
                $title = $this->input->post('title');
                $body = $this->input->post('body');
                $draft = $this->input->post('draft') ? true : false;
                $post = $this->posts_model->update_post($post_id, $title, $body, $draft);

                redirect('blog');
            }
            $this->load->view('posts/edit', compact('post'));
        }

        public function delete($post_id)
        {
            $post = $this->posts_model->get_post($post_id);
            $this->check_authorized($post);
            if ($this->input->method() == 'post') {
                $post = $this->posts_model->delete_post($post_id);
            }
            redirect('blog');
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
