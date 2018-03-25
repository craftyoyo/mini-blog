<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{
        $settings = $this->settings_model->get_settings();
		if($this->input->method() == 'post')
        {
            $this->settings_model->set_setting('open', $this->input->post('open'));
            $success = 'Settings have been saved';
        }
        $this->load->view('settings', compact('settings', 'success'));
	}
}
