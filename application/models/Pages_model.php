<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pages_model extends CI_Model
    {
        public function __construct()
        {
        }

        public function create_page($title, $body, $draft)
        {
            $user_id = $this->session->userdata('user_id');
            $blog = $this->blogs_model->get_blog($user_id);
            
            $data = array(
                'blog_id' => $blog->getBlogId(),
                'user_id' => $user_id,
                'title' => $title,
                'body' => $body,
                'draft' => $draft ? 'Y' : 'N'
            );
            $this->db->insert('pages', $data);
            $page_id = $this->db->insert_id();
            $page = $this->get_page($page_id);

            return $page;
        }

        public function update_page($page_id, $title, $body, $draft)
        {
            $this->db->set('title', $title);
            $this->db->set('body', $body);
            $this->db->set('draft', $draft ? 'Y' : 'N');
            $this->db->where('page_id', $page_id);
            $this->db->update('pages');
            $page = $this->get_page($page_id);

            return $page;
        }

        public function delete_page($page_id)
        {
            $this->db->where('page_id', $page_id);
            $this->db->delete('pages');
        }

        public function get_pages($blog_id)
        {
            $pages = array();
            $query = $this->db->get_where('pages', array('blog_id' => $blog_id));
            $rows = $query->result();
            foreach ($rows as $row)
            {
                $page = $this->get_page($row->page_id);
                $pages[] = $page;
            }
            return $pages;
        }

        public function get_page($page_id)
        {
            $query = $this->db->get_where('pages', array('page_id' => $page_id));
            $row = $query->first_row();
            $page = new Page(
                $row->page_id,
                $row->user_id,
                $row->title,
                $row->body,
                $row->created,
                $row->modified,
                $row->draft == 'Y' ? true : false,
                array(),
                $row->cheers
            );
            return $page;
        }

        public function get_page_by_title($blog, $pageTitle)
        {
            $query = $this->db->get_where('pages', array('title' => $pageTitle, 'blog_id' => $blog->getBlogId()));
            $row = $query->first_row();
            $page = new Page(
                $row->page_id,
                $row->user_id,
                $row->title,
                $row->body,
                $row->created,
                $row->modified,
                $row->draft == 'Y' ? true : false,
                array(),
                $row->cheers
            );
            return $page;
        }
    }

    class Page extends CI_Model
    {
        private $page_id;
        private $user_id;

        private $title;
        private $body;

        private $created;
        private $modified;

        private $draft;
        private $comments;
        private $cheers;

        /**
         * Page constructor.
         * @param $page_id
         * @param $user_id
         * @param $title
         * @param $body
         * @param $created
         * @param $modified
         * @param $draft
         * @param $comments
         * @param $cheers
         */
        public function __construct($page_id, $user_id, $title, $body, $created, $modified, $draft, $comments, $cheers)
        {
            $this->page_id = $page_id;
            $this->user_id = $user_id;
            $this->title = $title;
            $this->body = $body;
            $this->created = $created;
            $this->modified = $modified;
            $this->draft = $draft;
            $this->comments = $comments;
            $this->cheers = $cheers;
        }

        /**
         * @return mixed
         */
        public function getPageId()
        {
            return $this->page_id;
        }

        /**
         * @return mixed
         */
        public function getUserId()
        {
            return $this->user_id;
        }

        /**
         * @return mixed
         */
        public function getUsername()
        {
            return $this->users_model->get_user($this->user_id)->getUsername();
        }

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @return mixed
         */
        public function getBody()
        {
            return $this->body;
        }

        /**
         * @return mixed
         */
        public function getCreated()
        {
            return $this->created;
        }

        /**
         * @return mixed
         */
        public function getModified()
        {
            return $this->modified;
        }

        /**
         * @return mixed
         */
        public function getDraft()
        {
            return $this->draft;
        }

        /**
         * @return mixed
         */
        public function getComments()
        {
            return $this->comments;
        }

        /**
         * @return mixed
         */
        public function getCheers()
        {
            return $this->cheers;
        }


    }