<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function __construct()
    {
        $this->load->model('ion_auth_model');
    }

    function get_user($id)
    {
        $query = $this->db->get_where('users', array('id' => $id));
        $row = $query->first_row();
        $groups = $this->ion_auth_model->get_users_groups($id)->result();
        $user = new User(
            $row->id,
            $row->username,
            $row->email,
            $row->first_name,
            $row->last_name,
            $groups
        );
        return $user;
    }

    function get_user_by_username($username)
    {
        $query = $this->db->get_where('users', array('username' => $username));
        $row = $query->first_row();
        $id = $row->id;
        $groups = $this->ion_auth_model->get_users_groups($id)->result();
        $user = new User(
            $row->id,
            $row->username,
            $row->email,
            $row->first_name,
            $row->last_name,
            $groups
        );
        return $user;
    }
}

class User
{
    private $id;
    private $username;
    private $email;
    private $firstName;
    private $lastName;
    private $groups;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $email
     * @param $firstName
     * @param $lastName
     */
    public function __construct($id, $username, $email, $firstName, $lastName, $groups)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->groups = $groups;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     */
    public function setGroup($groups)
    {
        $this->groups = $groups;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

}