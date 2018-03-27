<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Blog_model extends CI_Model
    {
        public function __construct()
        {

        }

        public function get_blog($blog_id)
        {
            $query = $this->db->get_where('blogs', array('blog_id' => $blog_id));
            $row = $query->first_row();

            $posts = $this->posts_model->get_posts($row->user_id);
            //$pages = $this->pages_model->get_pages($row->user_id);

            $blog = new Blog(
                $row->blog_id,
                $row->user_id,
                $row->name,
                $row->description,
                $row->created,
                $row->modified,
                $posts,
                null,
                $row->about,
                $row->style
            );
            return $blog;
        }
    }

    class Blog extends CI_Model
    {
        private $blog_id;
        private $user_id;

        private $name;
        private $description;

        private $created;
        private $modified;

        private $posts;
        private $pages;
        private $about;

        private $style;

        /**
         * Blog constructor.
         * @param $blog_id
         * @param $user_id
         * @param $name
         * @param $description
         * @param $created
         * @param $modified
         * @param $posts
         * @param $pages
         * @param $about
         * @param $style
         */
        public function __construct($blog_id, $user_id, $name, $description, $created, $modified, $posts, $pages, $about, $style)
        {
            $this->blog_id = $blog_id;
            $this->user_id = $user_id;
            $this->name = $name;
            $this->description = $description;
            $this->created = $created;
            $this->modified = $modified;
            $this->posts = $posts;
            $this->pages = $pages;
            $this->about = $about;
            $this->style = $style;
        }

        /**
         * @return mixed
         */
        public function getBlogId()
        {
            return $this->blog_id;
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
        public function getName()
        {
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getDescription()
        {
            return $this->description;
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
        public function getPosts()
        {
            return $this->posts;
        }

        /**
         * @return mixed
         */
        public function getPages()
        {
            return $this->pages;
        }

        /**
         * @return mixed
         */
        public function getAbout()
        {
            return $this->about;
        }

        /**
         * @return mixed
         */
        public function getStyle()
        {
            return $this->style;
        }
    }