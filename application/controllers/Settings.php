<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{
        $settings = $this->settings_model->get_settings();
		if($this->input->method() == 'post')
        {
            $this->settings_model->set_setting('name', $this->input->post('name'));
            $this->settings_model->set_setting('about', $this->input->post('about'));
            $this->settings_model->set_setting('css', $this->input->post('css'));
            $this->settings_model->set_setting('posts_per_page', $this->input->post('posts_per_page'));
            $success = 'Settings have been saved';
        }
        $this->load->view('settings', compact('settings', 'success'));
	}
}
