<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        if (!$this->ion_auth->logged_in()) {
            redirect('login');
        }
		$this->load->view('home');
	}
}
