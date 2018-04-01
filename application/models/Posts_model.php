<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Posts_model extends CI_Model
    {
        public function __construct()
        {
        }

        public function create_post($title, $body, $draft)
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
            $this->db->insert('posts', $data);
            $post_id = $this->db->insert_id();
            $post = $this->get_post($post_id);

            return $post;
        }

        public function update_post($post_id, $title, $body, $draft)
        {
            $this->db->set('title', $title);
            $this->db->set('body', $body);
            $this->db->set('draft', $draft ? 'Y' : 'N');
            $this->db->where('post_id', $post_id);
            $this->db->update('posts');
            $post = $this->get_post($post_id);

            return $post;
        }

        public function delete_post($post_id)
        {
            $this->db->where('post_id', $post_id);
            $this->db->delete('posts');
        }

        public function get_posts($blog_id)
        {
            $posts = array();
            $this->db->where('blog_id', $blog_id);
            $this->db->order_by('created', 'DESC');
            $query = $this->db->get('posts');
            $rows = $query->result();
            foreach ($rows as $row)
            {
                $post = $this->get_post($row->post_id);
                $posts[] = $post;
            }
            return $posts;
        }

        public function get_post($post_id)
        {
            $query = $this->db->get_where('posts', array('post_id' => $post_id));
            $row = $query->first_row();
            $post = new Post(
                $row->post_id,
                $row->user_id,
                $row->title,
                $row->body,
                $row->created,
                $row->modified,
                $row->draft == 'Y' ? true : false,
                array(),
                $row->cheers
            );
            return $post;
        }
    }

    class Post extends CI_Model
    {
        private $post_id;
        private $user_id;

        private $title;
        private $body;

        private $created;
        private $modified;

        private $draft;
        private $comments;
        private $cheers;

        /**
         * Post constructor.
         * @param $post_id
         * @param $user_id
         * @param $title
         * @param $body
         * @param $created
         * @param $modified
         * @param $draft
         * @param $comments
         * @param $cheers
         */
        public function __construct($post_id, $user_id, $title, $body, $created, $modified, $draft, $comments, $cheers)
        {
            $this->post_id = $post_id;
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
        public function getPostId()
        {
            return $this->post_id;
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