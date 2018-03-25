<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Settings_model extends CI_Model
    {
        public function __construct()
        {
        }

        function get_setting($key, $id = NULL)
        {
            if (!$id) {
                $id = $this->session->userdata('user_id');
            }
            $query = $this->db->get_where('settings', array('user_id' => $id));
            console_log($this->db->last_query());
            return $query->first_row()->{$key};
        }

        function get_settings($id = NULL)
        {
            if (!$id) {
                $id = $this->session->userdata('user_id');
            }
            $query = $this->db->get_where('settings', array('user_id' => $id));
            console_log($this->db->last_query());
            return $query->first_row();
        }

        function set_setting($key, $value, $id = null)
        {
            if (!$id) {
                $id = $this->session->userdata('user_id');
            }
            $this->db->set($key, $value);
            $this->db->where('user_id', $id);
            $this->db->update('settings');
        }
    }