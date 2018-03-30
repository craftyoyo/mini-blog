<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pages extends CI_Controller
    {
        public function index()
        {
            $this->check_authenticated();
            $blog = $this->blogs_model->get_blog($this->session->userdata('user_id'));
            $this->load->view('pages/index', compact('blog'));
        }

        private function check_authenticated()
        {
            if (!$this->ion_auth->logged_in()) {
                $this->session->set_flashdata('error', 'Please log in to access this page');
                redirect('login');
            }
        }

        private function check_authorized($page)
        {
            if ($page->getUserId() != $this->session->userdata('user_id')) {
                $this->session->set_flashdata('error', 'You do not have permission to access this page');
                redirect('pages');
            }
        }

        public function view($page_id)
        {
            $page = $this->pages_model->get_page($page_id);
            $this->check_authorized($page);
            $this->load->view('pages/view', compact('page'));
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
                    console_log($title);
                    $page = $this->pages_model->create_page($title, $body, $draft);

                    redirect('pages');
                }
            }
            $this->load->view('pages/create');
        }

        public function edit($page_id)
        {
            $page = $this->pages_model->get_page($page_id);
            $this->check_authorized($page);
            if ($this->input->method() == 'post') {
                $this->form_validation->set_rules('title', 'Post Title', 'required');
                $this->form_validation->set_rules('body', 'Post Body', 'required');
                if ($this->form_validation->run() !== FALSE) {
                    $title = $this->input->post('title');
                    $body = $this->input->post('body');
                    $draft = $this->input->post('draft') ? true : false;
                    $page = $this->pages_model->update_page($page_id, $title, $body, $draft);

                    redirect('pages');
                }
            }
            $this->load->view('pages/edit', compact('page'));
        }

        public function delete($page_id)
        {
            console_log($page_id);
            $page = $this->pages_model->get_page($page_id);
            $this->check_authorized($page);
            if ($this->input->method() == 'post') {
                $page = $this->pages_model->delete_page($page_id);
            }
            redirect('pages');
        }
    }
