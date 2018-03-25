<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function posts($user) {
	    console_log($this->router->fetch_method());
	    console_log($user);
    }

    public function archive($user) {
        console_log($this->router->fetch_method());
        console_log($user);
    }

    public function page($user, $page) {
        console_log($this->router->fetch_method());
        console_log($user);
    }

    public function board($user) {
        console_log($this->router->fetch_method());
        console_log($user);
    }

    public function about($user) {
        console_log($this->router->fetch_method());
        console_log($user);
    }
}
