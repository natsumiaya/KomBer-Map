<?php
class Users_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function createUser($fullname, $username, $password) {
        $is_exist = $this->checkUsername($username);
        if (!$is_exist) {
            $sql = 'insert into users values(\''.$this->generate_uuid_v4().'\',\''.$username.'\''.',\''.$password.'\')';
            return $this->db->query($sql);
        }
        else {
            return false; // User exists
        }
    }
    public function checkUsername($username) {
        $sql = 'select * from users where username = \''.$username.'\'';
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return true; // User with $username found
        }
        else {
            return false; // Not found
        }
    }
    public function login($username, $password) {
        $sql = 'select userid, username from users where username = \''.$username.'\' and password = \''.$password.'\'';
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $user_data = $query->first_row();
            $this->session->set_userdata('userid', $user_data->userid);
            $this->session->set_userdata('username', $user_data->username);
            return true; // User and password match
        }
        else {
            return false; // User and password doesn't match or user doesn't exist
        }
    }
}