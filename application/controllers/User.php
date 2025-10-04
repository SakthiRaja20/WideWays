<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public $db;

	public function signup()
	{
		$name = $this->input->post('name');
        $mobile = $this->input->post('mobile');
        $password = md5($this->input->post('password'));


        $query = "INSERT INTO user(id, name, mobile, password) VALUES (?, ?, ?)";

        $this->db->query($query, array( $name, $mobile, $password));\

        echo 'success';

	}

}
