<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index() {
		$this->load->view('loginregister');
	}

	public function login() {
	    $username = $this->input->post('login-username');
        $password = $this->input->post('login-password');
        $login = $this->users_model->login($username, $password);

        if ($login) {
            // Session started
            echo site_url();
            redirect(site_url('application')); 
                //echo "true";   
            }
            
        else {
            // Set message incorrect username or password
            redirect(site_url('auth'));
            //echo "false";
        }
    }

    public function register() {
        $username = $this->input->post('form-username');
        $fullname = $this->input->post('form-name');
        $password = $this->input->post('form-password');
        $confirmation = $this->input->post('confirmation');

        if ($password != $confirmation) {
            // Handling here
            redirect(site_url('auth'));
        }

        else {
            $query = $this->users_model->createUser($fullname, $username, $password);
            if ($query == true) {
                redirect(site_url('application'));
            }
            else {
                // Handling here
                // User with that username already exists
                redirect(site_url('auth'));
            }
        }
    }
    
}