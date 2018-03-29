<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class B extends CI_Controller
    {
        public function index()
        {
            $this->check_authenticated();
            $blog = $this->blogs_model->get_blog($this->session->userdata('user_id'));
            $this->load->view('posts/index', compact('blog'));
        }

        private function check_authenticated()
        {
            if (!$this->ion_auth->logged_in()) {
                $this->session->set_flashdata('error', 'Please log in to access this page');
                redirect('login');
            }
        }

        private function check_authorized($post)
        {
            if ($post->getUserId() != $this->session->userdata('user_id')) {
                $this->session->set_flashdata('error', 'You do not have permission to access this post');
                redirect('b');
            }
        }

        public function view($post_id)
        {
            $post = $this->posts_model->get_post($post_id);
            $this->check_authorized($post);
            $this->load->view('posts/view', compact('post'));
        }

        public function create()
        {
            $this->check_authenticated();
            if ($this->input->method() == 'post') {
                $this->form_validation->set_rules('title', 'Post Title', 'required');
                $this->form_validation->set_rules('body', 'Post Body', 'required');
                if ($this->form_validation->run() !== FALSE) {
                    $title = $this->input->post('title');
                    $body = $this->input->post('body');
                    $draft = $this->input->post('draft') ? true : false;
                    $post = $this->posts_model->create_post($title, $body, $draft);

                    redirect('b');
                }
            }
            $this->load->view('posts/create');
        }

        public function edit($post_id)
        {
            $post = $this->posts_model->get_post($post_id);
            $this->check_authorized($post);
            if ($this->input->method() == 'post') {
                $this->form_validation->set_rules('title', 'Post Title', 'required');
                $this->form_validation->set_rules('body', 'Post Body', 'required');
                if ($this->form_validation->run() !== FALSE) {
                    $title = $this->input->post('title');
                    $body = $this->input->post('body');
                    $draft = $this->input->post('draft') ? true : false;
                    $post = $this->posts_model->update_post($post_id, $title, $body, $draft);

                    redirect('b');
                }
            }
            $this->load->view('posts/edit', compact('post'));
        }

        public function delete($post_id)
        {
            console_log($post_id);
            $post = $this->posts_model->get_post($post_id);
            $this->check_authorized($post);
            if ($this->input->method() == 'post') {
                $post = $this->posts_model->delete_post($post_id);
            }
            redirect('b');
        }

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

        public function page($username, $page)
        {
            $blog = $this->blogs_model->get_blog_by_username($username);
            $this->load->view('blog/page', compact('blog'));
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
