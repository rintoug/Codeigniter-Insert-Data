<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function register()
	{
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');


        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address1', 'Address 1', 'required');
        $this->form_validation->set_rules('password', 'Email', 'required');

        $data['success']='';

        if ($this->form_validation->run() == TRUE) {
            //Validation passed call the model and insert in to the database
            $this->load->model('user_model');
            $this->user_model->insert_user();
            $data['success'] = '<div style="color:green;">User added sucessfully!</div>';

        }
	    $this->load->view('register',$data);
	}
}
