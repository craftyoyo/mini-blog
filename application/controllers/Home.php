<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->config->item('single_blog_mode')) {
			$blog = $this->blogs_model->get_blog_by_username($this->config->item('single_blog_username'));
			$this->load->view('blog/home', compact('blog'));
			return;
		}
		$this->load->view('home');
	}
}
