<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function signup()
	{
		$name = $this->input->post('name');

        echo $name;
	}

}
