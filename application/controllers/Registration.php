<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller 
{
public function index()
	{
		//Form Validation
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('emailid','email d','required|valid_email|is_unique[vendor_info.Email]');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('confirmpassword','confirm password','required|matches[password]');
	
		if($this->form_validation->run())
		{
			//Getting Post Values
			$name		=$this->input->post('name');
			$emailid	=$this->input->post('emailid');
			$password	=$this->input->post('password');

			$this->load->model('Registration_Model');
			$this->Registration_Model->index($name,$emailid,$password);
		} 

		else
		{
			$this->load->view('registration');
		}
	}

}